#!/bin/sh
set -e

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.

readonly PROJECT="brogrammers"
readonly PROJECT_PATH="/home/vagrant/${PROJECT}"

readonly XDEBUG_CONFIG_CHECK="/opt/.xdebug_configured"
readonly GITHUB_CONFIG_CHECK="/opt/.github_configured"

readonly PHP_FPM_INI_FILE="/etc/php5/fpm/conf.d/20-xdebug.ini"
readonly XDEBUG_CONFIG="xdebug.scream=0\nxdebug.cli_color=1\nxdebug.show_local_vars=1\nxdebug.remote_handler=dbgp\nxdebug.idekey=phpstorm"

# Setup Xdebug
if [ ! -f ${XDEBUG_CONFIG_CHECK} ]; then
    echo "Configuring Xdebug for Phpstorm..."
    echo "$XDEBUG_CONFIG" >> ${PHP_FPM_INI_FILE}
    sudo service php5-fpm restart

    touch ${XDEBUG_CONFIG_CHECK}
    echo "Xdebug for Phpstorm successfully configured. Continuing..."
else
    echo "Xdebug for Phpstorm already configured. Continuing..."
fi

# Setup Github repo key for Composer
if [ ! -f ${GITHUB_CONFIG_CHECK} ]; then
    echo "Configuring Github authentication for Composer..."
    cd /home/vagrant/${PROJECT}

    touch ${GITHUB_CONFIG_CHECK}
    echo "Github authentication for Composer successfully configured. Continuing..."
else
    echo "Github authentication for Composer configured. Continuing..."
fi

# Total duration
readonly TOTAL_TIME=$(date +%s)
printf "Total installation time elapsed: %d seconds\n\n" "$(($TOTAL_TIME - $START_TIME))"
