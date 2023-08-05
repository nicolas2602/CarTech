#!/bin/sh
echo "Abrindo o PHP..."
docker start 0488b02a1da2  
sleep 1
docker ps
echo "PHP  Aberto!"
echo "localhost:80"
sleep 3
