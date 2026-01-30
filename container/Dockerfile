FROM ubuntu:24.04

# -------------------------------
# Build args / env
# -------------------------------
# Supported games: valve, cstrike, czero, dod, dmc, gearbox, ricochet, tfc
ARG GAME=valve
ENV GAME=${GAME}

ARG FLAG=
ENV FLAG=${FLAG}

ARG VERSION=custom
ENV VERSION=${VERSION}

ARG IMAGE=custom
ENV IMAGE=${IMAGE}

# -------------------------------
# Labels
# -------------------------------
LABEL org.opencontainers.image.title="hlds:${GAME}"
LABEL org.opencontainers.image.description="🐋 📦 Half-Life Dedicated Server powered by Docker. Supports all the classic GoldSrc Half-Life games and mods, including the ability to add custom configurations and plugins."
LABEL org.opencontainers.image.vendor="https://jamesiv.es"
LABEL org.opencontainers.image.authors="James Ives (https://jamesiv.es)"
LABEL org.opencontainers.image.licenses="MIT"
LABEL org.opencontainers.image.url="https://github.com/jamesives/hlds-docker"
LABEL org.opencontainers.image.documentation="https://github.com/jamesives/hlds-docker"
LABEL org.opencontainers.image.source="https://github.com/jamesives/hlds-docker"
LABEL org.opencontainers.image.version="${VERSION}"

# -------------------------------
# Base deps for SteamCMD + runtime
# -------------------------------
RUN dpkg --add-architecture i386 && \
    apt-get update && \
    apt-get install -y --no-install-recommends \
      curl rsync file ca-certificates \
      libc6:i386 lib32stdc++6 \
      lib32gcc-s1 lib32z1 \
      libcurl4 libcurl4-openssl-dev \
      unzip tmux tar && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# -------------------------------
# Create steam user + dirs
# -------------------------------
# Use a stable uid/gid so ownership is predictable across hosts
RUN groupadd -r -g 1000 steam && \
    useradd -r -u 1000 -g 1000 -m -d /opt/steam steam

# Create runtime bind mount targets (root-owned initially; we'll chown later)
RUN mkdir -p /config /mods /temp /temp/config /temp/mods \
             /opt/steam && \
    chown -R steam:steam /opt/steam

# -------------------------------
# Switch to steam for install
# -------------------------------
USER steam
WORKDIR /opt/steam

# Copy the SteamCMD runscript
COPY ./hlds.txt /opt/steam/hlds.txt

# Patch runscript with selected game and optional flags
RUN sed -i "s/\$GAME/${GAME}/g" /opt/steam/hlds.txt && \
    sed -i "s/\$FLAG/${FLAG}/g" /opt/steam/hlds.txt

# Install SteamCMD + HLDS
RUN curl -fsSL media.steampowered.com/client/installer/steamcmd_linux.tar.gz | tar xzvf - && \
    file /opt/steam/linux32/steamcmd && \
    ./steamcmd.sh +runscript /opt/steam/hlds.txt

# -------------------------------
# Fix permissions for anything Steam installed
# -------------------------------
USER root
RUN chown -R steam:steam /opt/steam/hlds

# Ensure standard game dirs exist (some mods don't create cfg/logs until first run)
RUN mkdir -p "/opt/steam/hlds/${GAME}/cfg" "/opt/steam/hlds/${GAME}/logs" && \
    chown -R steam:steam "/opt/steam/hlds/${GAME}"

# steam_appid.txt is written into /opt/steam/hlds (needs write perms)
USER steam
RUN mkdir -p "$HOME/.steam" && \
    ln -sf /opt/steam/linux32 "$HOME/.steam/sdk32" && \
    echo 70 > /opt/steam/hlds/steam_appid.txt

WORKDIR /opt/steam/hlds

# Entrypoint
COPY --chown=steam:steam ./entrypoint.sh ./entrypoint.sh
RUN chmod +x ./entrypoint.sh

# Provide a default server.cfg in the image AFTER SteamCMD so it doesn't get overwritten
# (docker-compose bind-mount will still override this at runtime)
COPY --chown=steam:steam ./config/server.cfg /opt/steam/hlds/${GAME}/cfg/server.cfg

ENTRYPOINT ["./entrypoint.sh"]