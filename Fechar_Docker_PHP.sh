#!/bin/sh
echo "Fechando o PHP..."
docker stop 0488b02a1da2
sleep 1
docker ps
echo "PHP fechado!"
sleep 3
