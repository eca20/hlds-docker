#!/usr/bin/env sh

set -eu

GAME=${GAME:-valve}
VERSION=${VERSION:-custom}
IMAGE=${IMAGE:-custom}

# Warn if no +map was provided in the args.
# (Use POSIX-safe printf instead of echo -e.)
case " $* " in
  *" +map "*) : ;;
  *) printf '\033[33mWarning: No +map specified in the command. Server will start but may not be joinable.\033[0m\n' ;;
esac

# Ensure game directory exists (helps first-run + avoids rsync target issues)
mkdir -p "/opt/steam/hlds/$GAME"

# Push mods and config files from their temp directories to the server directories.
# IMPORTANT: Do NOT use rsync --chown here; the container typically runs as user 'steam'
# and --chown will fail unless running as root.

if [ -d /temp/mods ]; then
  # Only sync if there's something to copy
  if [ "$(ls -A /temp/mods 2>/dev/null || true)" ]; then
    rsync -r --update /temp/mods/ /opt/steam/hlds/
  fi
fi

if [ -d /temp/config ]; then
  if [ "$(ls -A /temp/config 2>/dev/null || true)" ]; then
    rsync -r --update /temp/config/ "/opt/steam/hlds/$GAME/"
  fi
fi

cat <<EOF
                          ..::::::..
                      :-=++++++++++++=-:
                  :=++++=--::...::-=++++=:
                :=+++=:              :-++++:
                =+++-     =====:         -+++=
              ++++.      ===+++.         .=+++
              =+++           :+++           =+++
            :+++.           -+++=          .+++:
            =++=           =+++++-          =++=
            =++-         .=++-:+++:         -+++
            =++=        .+++-  -+++.        =++=
            :+++.      :+++.    =+++       .+++:
              =+++     =++=.      ++++++=   =++=
              =+++.  -==-        .+++=-: .=+++
                =+++-.                   -+++=
                :=+++=:              :=+++=:
                  :=+++++=-::..::-=+++++=:
                      :-=++++++++++++=-:
                          ..::::::..

                          hlds-docker

====================================================================
💿 Image: $IMAGE
📎 Version: $VERSION
🎮 Game: $GAME
====================================================================

▄▄ LINKS ▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄
█                                                                  █
█  🔧 Maintained by Jives: https://jives.dev                       █
█  💖 Support: https://github.com/sponsors/JamesIves               █
█  🔔 Feedback / Issues: https://github.com/JamesIves/hlds-docker  █
█                                                                  █
▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀
EOF

printf '\033[32mStarting Half-Life Dedicated Server...\033[0m\n'

# Start the server with the specified game and any additional arguments.
# NOTE: Do not wrap args in a single quoted string; pass them as real argv entries.
exec ./hlds_run -game "$GAME" "$@"
