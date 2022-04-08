#!/bin/bash

docker stop $(docker ps -aq)
sudo docker-compose up