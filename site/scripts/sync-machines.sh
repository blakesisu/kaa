#!/bin/bash

# current timestamp
NOW=`date +"%m_%d_%Y_%H_%M_%S"`

DEVDIR="web/app/uploads/"
DEVSITE="dev.kaadesigngroup.com"

PRODSITE="104.236.139.224"
PRODDIR="web@104.236.139.224:/srv/www/kaa/current/web/app/uploads/"

STAGESITE="165.227.56.50"
STAGEDIR="web@165.227.56.50:/srv/www/kaa/current/web/app/uploads/"

if [ $# -eq 0 ]; then
  read -r -p "Which database do you want to reset? [dev/stage/prod] " PULLER
  read -r -p "Which database do you want to sync from? [dev/stage/prod] " PUSHER
  TO=$PULLER
  FROM=$PUSHER
else
  TO=$2
  FROM=$1
fi

case "$TO-$FROM" in
  dev-prod) DIR="up";  FROMSITE=$PRODSITE;  FROMDIR=$PRODDIR;  TOSITE=$DEVSITE; TODIR=$DEVDIR; ;;
  dev-stage)    DIR="up"   FROMSITE=$STAGESITE;  FROMDIR=$STAGEDIR;  TOSITE=$DEVSITE; TODIR=$DEVDIR; ;;
  prod-dev)  DIR="down" FROMSITE=$DEVSITE; FROMDIR=$DEVDIR; TOSITE=$PRODSITE;  TODIR=$PRODDIR; ;;
  stage-dev)    DIR="down" FROMSITE=$DEVSITE; FROMDIR=$DEVDIR; TOSITE=$STAGESITE;  TODIR=$STAGEDIR; ;;
  stage-prod)    DIR="down" FROMSITE=$PRODSITE; FROMDIR=$PRODDIR; TOSITE=$STAGESITE;  TODIR=$STAGEDIR; ;;
  prod-stage)    DIR="down" FROMSITE=$STAGESITE; FROMDIR=$STAGEDIR; TOSITE=$PRODSITE;  TODIR=$PRODDIR; ;;
  *) echo "usage: $0 dev prod | dev stage | prod dev | prod stage | stage prod" && exit 1 ;;
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

  cat $FROM-backup_$NOW.sql | wp "@$TO" db import -
fi

if [[ "$uploads" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  ssh -tt web@$TOSITE 'rm -rf /srv/www/kaa/current/web/app/uploads/*'
  if [ $FROM != "dev" ] && [ $TO != "dev" ]; then
    mkdir "./temp-uploads"
    rsync -avz --progress "$FROMDIR" "./temp-uploads/"
    rsync -avz --progress "./temp-uploads/" "$TODIR"
    rm -rf "./temp-uploads"
  else
    rsync -avz --progress "$FROMDIR" "$TODIR"
  fi
fi
