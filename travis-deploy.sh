#!/bin/bash
ssh -p22 witchschool@viva.isrv.tech <<EOF
cd public_html
composer install
php artisan migrate --seed

<<EOF