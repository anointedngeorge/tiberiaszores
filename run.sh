#!/bin/bash



# Load environment variables from .env
set -a  # automatically export all variables
source .env
set +a

# Stop and remove existing container if it exists
if docker ps -a --format '{{.Names}}' | grep -Eq "^${DOCKER_IMAGE_NAME}\$"; then
    echo "Stopping and removing existing container: ${DOCKER_IMAGE_NAME}"
    docker stop ${DOCKER_IMAGE_NAME}
    docker rm ${DOCKER_IMAGE_NAME}
fi

# Build Docker image
echo "Building Docker image: ${DOCKER_SERVICE_NAME}"
docker build -t ${DOCKER_SERVICE_NAME} .

# Run Docker container
echo "Running container: ${DOCKER_IMAGE_NAME} on ports ${DOCKER_PORTS}"
docker run -d ${DOCKER_PORTS} --name ${DOCKER_IMAGE_NAME} ${DOCKER_SERVICE_NAME}


