#!/bin/bash
# sync-db-from-prod.sh

read -r -p "Do you solemnly swear that you have had fewer than 2 alcoholic beverages in the last hour and that you would really like to reset your development database and pull the latest from production? [y/N] " response
if [[ $response =~ ^([yY][eE][sS]|[yY])$ ]]
then
    wp @dev db reset --yes
    wp @prod db export -> sql-dump-production.sql
    wp @dev db import sql-dump-production.sql
    wp @dev core install --url=kaa.local --title=kaa --admin_user=admin --admin_email=blake@sisumedia.com
    # wp @development search-replace https://example.com https://kaa.local --skip-columns=guid
else
    exit 0
fi
