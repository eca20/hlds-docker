#!/bin/sh

set -eu

SCRIPT_DIR=$(CDPATH= cd -- "$(dirname -- "$0")" && pwd)
SERVICE_SOURCE="$SCRIPT_DIR/hlds-docker.service"
SERVICE_TARGET="/etc/systemd/system/hlds-docker.service"
START_SCRIPT="$SCRIPT_DIR/start-compose-stack.sh"
STOP_SCRIPT="$SCRIPT_DIR/stop-compose-stack.sh"

for required in "$SERVICE_SOURCE" "$START_SCRIPT" "$STOP_SCRIPT"; do
  if [ ! -f "$required" ]; then
    echo "Missing required file: $required" >&2
    exit 1
  fi
done

chmod +x "$START_SCRIPT" "$STOP_SCRIPT"

sudo install -m 0644 "$SERVICE_SOURCE" "$SERVICE_TARGET"
sudo systemctl daemon-reload

if systemctl cat containerd.service >/dev/null 2>&1; then
  sudo systemctl enable docker.service containerd.service
else
  sudo systemctl enable docker.service
fi

sudo systemctl enable hlds-docker.service
sudo systemctl start hlds-docker.service

echo "Enabled services:"
sudo systemctl is-enabled docker.service
if systemctl cat containerd.service >/dev/null 2>&1; then
  sudo systemctl is-enabled containerd.service
fi
sudo systemctl is-enabled hlds-docker.service

echo "Boot autostart is installed."
echo "Set BIOS/UEFI AC power recovery to 'Power On' so the machine itself boots after power loss."
