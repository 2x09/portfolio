#!/bin/sh
while true; do
    curl \
        -d counter \
        -X POST \
        http://localhost:3000/ > /dev/null
done
