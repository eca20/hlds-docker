#!/bin/sh

set -eu

SCRIPT_DIR=$(CDPATH= cd -- "$(dirname -- "$0")" && pwd)
RESTART_SCRIPT="$SCRIPT_DIR/restart-hlds.sh"
CRON_FILE="$SCRIPT_DIR/cron.hlds_restart"
CRON_MATCH="$RESTART_SCRIPT"
TMP_FILE=$(mktemp)

cleanup() {
  rm -f "$TMP_FILE"
}

trap cleanup EXIT INT TERM

if [ ! -f "$CRON_FILE" ]; then
  echo "Missing cron file: $CRON_FILE" >&2
  exit 1
fi

if [ ! -f "$RESTART_SCRIPT" ]; then
  echo "Missing restart script: $RESTART_SCRIPT" >&2
  exit 1
fi

chmod +x "$RESTART_SCRIPT"

{
  sudo crontab -l 2>/dev/null | grep -vF "$CRON_MATCH" || true
  printf "\n# Restart HLDS daily at 4:00 AM\n"
  cat "$CRON_FILE"
  printf "\n"
} > "$TMP_FILE"

sudo crontab "$TMP_FILE"

echo "Installed root cron job:"
sudo crontab -l | grep -F "$CRON_MATCH"
