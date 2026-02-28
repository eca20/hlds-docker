#!/usr/bin/env sh

GAME=${GAME:-valve}
VERSION=${VERSION:-custom}
IMAGE=${IMAGE:-custom}

if echo "$@" | grep -qv "+map"; then
  echo -e "\e[33mWarning: No +map specified in the command. Server will start but may not be joinable.\e[0m"
fi

# Push mods and config files from their temp directories to the server directories.
if [ -d /temp/mods ]
then
  # Keep the container's HLDS tree in sync with the repo. We intentionally do NOT use
  # `--update` because the SteamCMD-installed files inside the image can have newer mtimes
  # than the repo checkout, which would otherwise cause rsync to skip our config/plugins.
  rsync --recursive --chown=steam:steam /temp/mods/* /opt/steam/hlds
fi

if [ -d /temp/config ]
then
  # Same rationale as above: we want repo-managed config to always win.
  rsync --recursive --chown=steam:steam /temp/config/* /opt/steam/hlds/$GAME
fi

# Keep the AMX Mod X maps menu in sync with maps actually installed on the server.
# `mapsmenu.amxx` reads `addons/amxmodx/configs/maps.ini` and filters entries with `is_map_valid()`.
# We keep `mapcycle.txt` pinned, so admins can change maps at will without bloating rotation.
AMXX_CONFIG_DIR="/opt/steam/hlds/$GAME/addons/amxmodx/configs"
AMXX_MAPS_INI="$AMXX_CONFIG_DIR/maps.ini"
MAPS_DIR="/opt/steam/hlds/$GAME/maps"

if [ -d "$AMXX_CONFIG_DIR" ] && [ -d "$MAPS_DIR" ]
then
  TMP_MAPS_INI="$(mktemp 2>/dev/null || echo "/tmp/amxx-maps.$$")"

  {
    echo "; Auto-generated on container start from installed .bsp files."
    echo "; Rotation lives in mapcycle.txt; this file is for the admin maps menu."
    echo
    find "$MAPS_DIR" -maxdepth 1 -type f -iname '*.bsp' -print \
      | sed 's#.*/##' \
      | sed 's/\\.[bB][sS][pP]$//' \
      | sort -fu
  } > "$TMP_MAPS_INI" 2>/dev/null || true

  if [ -s "$TMP_MAPS_INI" ]
  then
    mv "$TMP_MAPS_INI" "$AMXX_MAPS_INI"
  else
    rm -f "$TMP_MAPS_INI" 2>/dev/null || true
  fi
fi


echo "
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
"

echo "\e[32mStarting Half-Life Dedicated Server...\e[0m"

# Start the server with the specified game and any additional arguments.
./hlds_run -game "$GAME" "$@"
