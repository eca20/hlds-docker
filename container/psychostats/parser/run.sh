#!/usr/bin/env sh

LOG_SOURCE="${LOG_SOURCE:-/opt/steam/hlds/cstrike/logs}"
RUN_INTERVAL_SECONDS="${RUN_INTERVAL_SECONDS:-60}"

echo "[psychostats_parser] Using log source: ${LOG_SOURCE}"
echo "[psychostats_parser] Run interval: ${RUN_INTERVAL_SECONDS}s"

while true; do
  /opt/psychostats/root/stats.pl -logsource "${LOG_SOURCE}" -gametype halflife -modtype cstrike
  sleep "${RUN_INTERVAL_SECONDS}"
done
