[![Price](https://img.shields.io/badge/price-FREE-0098f7.svg)](https://github.com/mkowsiak/JSONDocker/blob/master/LICENSE.md)
[![GitHub](https://img.shields.io/github/license/mashape/apistatus.svg)](https://github.com/mkowsiak/JSONDocker/blob/master/LICENSE.md)
# Simple JSON generator for Python Programming Specialization 

This Docker based JSON generator start simple HTTP server that generates JSON based content.

# Project structure

    .
    |-- Dockerfile                             - Docker file for creating image
    |-- LICENSE.md                             - MIT license file
    |-- README.md                              - this README.md file
    |-- index.php                              - sample PHP application
    `-- start.sh                               - startup script for Docker container
    
# Starting JSON content server

## Building WWW container

    > git clone https://github.com/mkowsiak/JSONDocker
    > cd JSONDocker
    > docker build -t jsonserver .

## Running WWW container

    > docker run -i -t \
      -p 80:80 \
      jsonserver /bin/start.sh

# Known limitations

At the moment, JSONDocker generates simple JSON based content. Nothing fancy.

