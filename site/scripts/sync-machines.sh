#!/bin/bash

# current timestamp
NOW=`date +"%m_%d_%Y_%H_%M_%S"`

DEVDIR="web/app/"
DEVSITE="dev.kaadesigngroup.com"

REDEVSITE="107.170.244.77"
REDEVDIR="web@107.170.244.77:/srv/www/kaa/current/web/app/"

PRODSITE="104.236.139.224"
PRODDIR="web@104.236.139.224:/srv/www/kaa/current/web/app/"

STAGESITE="165.227.56.50"
STAGEDIR="web@165.227.56.50:/srv/www/kaa/current/web/app/"

if [ $# -eq 0 ]; then
  read -r -p "Which database do you want to reset? [dev/stage/prod/redev] " DB_RESP
  read -r -p "Which database do you want to sync from? [dev/stage/prod/redev] " SYNC_RESP
  TO=$DB_RESP
  FROM=$SYNC_RESP
else
  TO=$2
  FROM=$1
fi

case "$TO-$FROM" in
  dev-prod) DIR="up";  FROMSITE=$DEVSITE;  FROMDIR=$DEVDIR;  TOSITE=$PRODSITE; TODIR=$PRODDIR; ;;
  dev-stage)    DIR="up"   FROMSITE=$DEVSITE;  FROMDIR=$DEVDIR;  TOSITE=$STAGESITE; TODIR=$STAGEDIR; ;;
  prod-dev) DIR="down" FROMSITE=$PRODSITE; FROMDIR=$PRODDIR; TOSITE=$DEVSITE;  TODIR=$DEVDIR; ;;
  stage-dev)    DIR="down" FROMSITE=$STAGESITE; FROMDIR=$STAGEDIR; TOSITE=$DEVSITE;  TODIR=$DEVDIR; ;;

  # New to try to work with remote dev
  redev-dev)    DIR="down" FROMSITE=$REDEVSITE; FROMDIR=$REDEVDIR; TOSITE=$DEVSITE;  TODIR=$DEVDIR; ;;
  dev-redev)    DIR="down" FROMSITE=$DEVSITE; FROMDIR=$DEVDIR; TOSITE=$REDEVSITE;  TODIR=$REDEVDIR; ;;

  redev-prod)    DIR="down" FROMSITE=$REDEVSITE; FROMDIR=$REDEVDIR; TOSITE=$PRODSITE;  TODIR=$PRODDIR; ;;
  prod-redev)    DIR="down" FROMSITE=$PRODSITE; FROMDIR=$PRODDIR; TOSITE=$REDEVSITE;  TODIR=$REDEVDIR; ;;

  *) echo "usage: $0 dev prod | dev stage | prod dev | prod stage | dev redev | redev dev | redev prod | prod redev" && exit 1 ;;
esac

read -r -p "Reset the $TO database and sync from $FROM? [y/N] " response
read -r -p "Sync the uploads folder? [y/N] " uploads

# cd ../ &&
if [[ "$response" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  wp "@$TO" db export $TO-backup_$NOW.sql &&
  wp "@$TO" db reset --yes &&
  wp "@$FROM" db export - > $FROM-backup_$NOW.sql
  wp "@$TO" core install --url=$TOSITE --title=kaa --admin_user=admin --admin_email=blake@sisumedia.com --admin_password=guts02 &&
  wp "@$TO" theme install dist --activate
  wp "@$TO" plugin activate --all

  # if $(wp "@$FROM" core is-installed --network); then
  #   wp "@$FROM" search-replace --url=$FROMSITE $FROMSITE $TOSITE --skip-columns=guid --network --export | wp "@$TO" db import -
  # else
  #   wp "@$FROM" search-replace --url=$FROMSITE $FROMSITE $TOSITE --skip-columns=guid --export | wp "@$TO" db import -
  # fi
  if [ $FROM != "dev" ] && [ $TO != "dev" ]; then
    cat $FROM-backup_$NOW.sql | wp "@$TO" db import -
  else
    wp "@$TO" db import -
  fi

fi

if [[ "$uploads" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  if [ $FROM != "dev" ] && [ $TO != "dev" ]; then
    mkdir "./temp-uploads"
    rsync -az --progress "$FROMDIR/uploads" "./temp-uploads"
    rsync -az --progress "./temp-uploads" "$TODIR"
    rm -rf "./temp-uploads"
  else
    rsync -az --progress "$FROMDIR/uploads" "$TODIR"
  fi
fi
