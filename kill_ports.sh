#!/bin/bash
for port in 8000 8001 8002 8003
do
    pid=$(lsof -ti:$port)
    if [ ! -z "$pid" ]; then
        echo "Killing process on port $port (PID: $pid)"
        kill -9 $pid
    fi
done
