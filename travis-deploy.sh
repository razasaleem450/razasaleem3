#!/bin/bash
ssh -p22 witchschool@viva.isrv.tech <<EOF
cd public_html
git clone git@github.com:razasaleem450/razasaleem3.git .
composer install

<<EOF