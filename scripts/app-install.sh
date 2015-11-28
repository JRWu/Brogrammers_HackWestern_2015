#!/bin/bash
#
# Installs the application from scratch. Ensure the database credentials in
# the .env file are correct. Be sure to execute this script while SSH'd into
# the application's host server.
#
# -----------------------------------------------------------------------------
# INSTRUCTIONS:
#
# 1. Execute this script to install the application from scratch
#

readonly PROJECT="brogrammers"

readonly START_TIME=$(date +%s)
printf "\n[$PROJECT] Application installation started at %s\n\n" "$(date)"

composer install
npm install
# bower install --force --allow-root --config.interactive=false
gulp
php artisan migrate --seed

readonly END_TIME=$(date +%s);
printf "\n[$PROJECT] Application installation completed at %s\n" "$(date)"
printf "[$PROJECT] Time elapsed: %d seconds\n\n" "$(($END_TIME - $START_TIME))"
