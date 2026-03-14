#!/bin/sh

set -eu

SCRIPT_DIR=$(CDPATH= cd -- "$(dirname -- "$0")" && pwd)
ENV_FILE="$SCRIPT_DIR/.env"
COMPOSE_FILE="$SCRIPT_DIR/docker-compose.yml"
DEFAULT_HOSTNAME="Sofa's 24/7 UPC"
DEFAULT_MAX_PLAYERS="18"

get_env_value() {
  key="$1"

  if [ ! -f "$ENV_FILE" ]; then
    return 0
  fi

  value=$(grep -E "^${key}=" "$ENV_FILE" | tail -n 1 | sed "s/^${key}=//" || true)
  value=$(printf '%s' "$value" | sed 's/^"//; s/"$//')
  printf '%s' "$value"
}

write_env_value() {
  key="$1"
  line="$2"
  tmp_file=$(mktemp)

  if [ -f "$ENV_FILE" ]; then
    grep -v -E "^${key}=" "$ENV_FILE" > "$tmp_file" || true
  fi

  printf '%s\n' "$line" >> "$tmp_file"
  mv "$tmp_file" "$ENV_FILE"
}

run_compose() {
  if docker info >/dev/null 2>&1; then
    docker compose --project-directory "$SCRIPT_DIR" --env-file "$ENV_FILE" -f "$COMPOSE_FILE" "$@"
  else
    sudo docker compose --project-directory "$SCRIPT_DIR" --env-file "$ENV_FILE" -f "$COMPOSE_FILE" "$@"
  fi
}

current_hostname=$(get_env_value SERVER_HOSTNAME)
[ -n "$current_hostname" ] || current_hostname="$DEFAULT_HOSTNAME"

current_max_players=$(get_env_value MAX_PLAYERS)
[ -n "$current_max_players" ] || current_max_players="$DEFAULT_MAX_PLAYERS"

printf 'Server hostname [%s]: ' "$current_hostname"
IFS= read -r server_hostname
[ -n "$server_hostname" ] || server_hostname="$current_hostname"

while :; do
  printf 'Max players [%s]: ' "$current_max_players"
  IFS= read -r max_players
  [ -n "$max_players" ] || max_players="$current_max_players"

  case "$max_players" in
    ''|*[!0-9]*)
      echo "Max players must be a whole number."
      continue
      ;;
  esac

  if [ "$max_players" -lt 1 ] || [ "$max_players" -gt 32 ]; then
    echo "Max players must be between 1 and 32."
    continue
  fi

  break
done

escaped_hostname=$(printf '%s' "$server_hostname" | sed 's/[\\"]/\\&/g')
write_env_value SERVER_HOSTNAME "SERVER_HOSTNAME=\"$escaped_hostname\""
write_env_value MAX_PLAYERS "MAX_PLAYERS=$max_players"

echo "Launching stack with hostname: $server_hostname"
echo "Launching stack with max players: $max_players"

run_compose up -d --build
run_compose ps
