#!/bin/bash 
docker-compose stop
docker system prune -a
docker-compose up -d