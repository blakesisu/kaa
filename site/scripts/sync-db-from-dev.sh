#!/bin/bash
# sync-db-from-dev.sh

read -r -p "Do you solemnly swear that you have had fewer than 2 alcoholic beverages in the last hour and that you would really like to reset your production database and pull the latest from development? [y/N] " response
if [[ $response =~ ^([yY][eE][sS]|[yY])$ ]]
then
    wp @prod db reset --yes
    wp @dev db export -> sql-dump-development.sql
    wp @prod db import sql-dump-development.sql

    wp @prod core install --url=138.197.199.171 --title=kaa --admin_user=admin --admin_email=blake@sisumedia.com
    wp @prod theme install dist --activate
    # wp @prod search-replace https://example.com http://138.197.199.171 --skip-columns=guid

    # wp @prod search-replace --url=kaa.local kaa.local 138.197.199.171 --skip-columns=guid --export
else
    exit 0
fi
