# almoe_production_php
This repository contains a simple PHP CRUD which allows to upload image to directory and save the image and text associated to the image in user_date.txt file.

Steps to build with Docker
- cd to your directory
- docker build -t almoe .
- docker run --name almoe_container -v $(pwd):/var/www/html -d -p 9090:80 almoe
- open browser and paste localhost:9090
