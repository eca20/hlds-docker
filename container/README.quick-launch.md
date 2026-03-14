# Quick Launch

This file is the shortest path to getting the server running on a new Linux host.

## First Launch

After cloning or pulling the repo on the server host:

```sh
cd /home/eterraverse/projects/hlds-docker
git pull
cd /home/eterraverse/projects/hlds-docker/container
./quick-launch.sh
```

The script will prompt for:

- `Server hostname`
- `Max players`

It then writes those values to `.env`, builds the Docker images, and starts the stack.
If Docker requires elevated privileges on that machine, the script will prompt for `sudo`.

## Start Again Later

If the stack is already configured and you only want to start it again:

```sh
cd /home/eterraverse/projects/hlds-docker/container
./start-compose-stack.sh
```

## Restart Only The Game Server

```sh
cd /home/eterraverse/projects/hlds-docker/container
./restart-hlds.sh
```

## Change Hostname Or Max Players Later

Run the same quick launch script again:

```sh
cd /home/eterraverse/projects/hlds-docker/container
./quick-launch.sh
```

Or edit `.env` directly:

```sh
cd /home/eterraverse/projects/hlds-docker/container
nano .env
```

The values to update are:

```env
SERVER_HOSTNAME="Your Server Name"
MAX_PLAYERS=18
```

After editing `.env`, restart the HLDS container:

```sh
cd /home/eterraverse/projects/hlds-docker/container
./restart-hlds.sh
```

## Verify The Stack

```sh
cd /home/eterraverse/projects/hlds-docker/container
docker compose --env-file .env -f docker-compose.yml ps
```

If Docker on that host requires `sudo`, use:

```sh
sudo docker compose --env-file .env -f docker-compose.yml ps
```
