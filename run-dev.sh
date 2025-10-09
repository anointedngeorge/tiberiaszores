#!/bin/bash

# Load environment variables
set -a
source .env
set +a

# Check required env vars
if [ -z "$DOCKER_PORTS" ] || [ -z "$DOCKER_IMAGE_NAME" ] || [ -z "$DOCKER_SERVICE_NAME" ]; then
    echo "Error: DOCKER_PORTS, DOCKER_IMAGE_NAME, and DOCKER_SERVICE_NAME must be set in .env"
    exit 1
fi

# Stop and remove existing container if it exists
if docker ps -a --format '{{.Names}}' | grep -Eq "^${DOCKER_IMAGE_NAME}\$"; then
    echo "Stopping and removing existing container: ${DOCKER_IMAGE_NAME}"
    docker stop ${DOCKER_IMAGE_NAME}
    docker rm ${DOCKER_IMAGE_NAME}
fi

# Start container in development mode
echo "Starting Docker container: ${DOCKER_SERVICE_NAME}"

docker run -it \
  ${DOCKER_PORTS} \
  --name ${DOCKER_IMAGE_NAME} \
  -v $(pwd):/app \
  ${DOCKER_SERVICE_NAME} \
  uvicorn src:app --host 0.0.0.0 --port 8000 --reload
