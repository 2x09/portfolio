#!/bin/sh
if [[ -f ./private/db.txt ]]; then
    echo -e "'./private/db.txt': file has already been created. . . skipping"
else
    mkdir -v private/ 
    echo 0 > private/db.txt && echo -e "echo: created & wrote '0' to file 'private/db.txt'"
fi
