#!/bin/sh

set -eu

SCRIPT_DIR=$(CDPATH= cd -- "$(dirname -- "$0")" && pwd)
COMPOSE_FILE="$SCRIPT_DIR/docker-compose.yml"
ENV_FILE="$SCRIPT_DIR/.env"

exec docker compose --project-directory "$SCRIPT_DIR" --env-file "$ENV_FILE" -f "$COMPOSE_FILE" up -d
