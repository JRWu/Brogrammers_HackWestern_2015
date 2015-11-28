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

readonly PROJECT="xchanger"

readonly START_TIME=$(date +%s)
printf "\n[$PROJECT] Application cleaning started at %s\n" "$(date)"

# Path to the application root directory
readonly APP_ROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/..

rm -rf ${APP_ROOT}/documentation/app-src/
rm -rf ${APP_ROOT}/vendor/
rm -rf ${APP_ROOT}/node_modules/
rm -rf ${APP_ROOT}/bower_components/

rm -rf ${APP_ROOT}/public/views/

rm -rf ${APP_ROOT}/public/js/app.js
rm -rf ${APP_ROOT}/public/js/vendor.js
rm -rf ${APP_ROOT}/public/js/vendor.js.map

rm -rf ${APP_ROOT}/public/css/app.css
rm -rf ${APP_ROOT}/public/css/app.css.map
rm -rf ${APP_ROOT}/public/css/vendor.css
rm -rf ${APP_ROOT}/public/css/vendor.css.map

readonly END_TIME=$(date +%s)
printf "[$PROJECT] Application cleaning completed at %s\n" "$(date)"
printf "[$PROJECT] Time elapsed: %d seconds\n\n" "$(($END_TIME - $START_TIME))"