#!/bin/bash


JSON_SERVER_ADDRESS=`/sbin/ip route|awk '/default/ { print $3 }'`

cat << EOFA
            ******************************************************
             
                    https://github.com/mkowsiak/JSONDocker     
 
            ******************************************************

            Python Programming Specialization JSON testing server
            ------------------------------------------------------

            Server is running, try to connect to the server
            following way:


            http://localhost:80/
            http://localhost:80/index.php
            http://localhost:80/custom_json.php


            You can also access content using Python

 
            import requests
            import json

            p = requests.get("http://localhost:80")
            print(p.json())

          
            Have fun!
EOFA

/etc/init.d/apache2 start

# we want to prevent container from quiting
/bin/bash
