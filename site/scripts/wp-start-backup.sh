#!/bin/bash

read -r -p "Which machine [prod/stag/dev](default: dev): " MACHINE
read -r -p "Enter user name (default: admin): " USER
read -r -p "Enter email (default: unclesisu@sisumedia): " EMAIL
read -r -p "Enter password (default: guts02): " PASSWORD
read -r -p "Enter theme (default: dist): " THEME
read -r -p "Enter SQL backup file (default: ./dev-backup.sql): " SQL_BACKUP

MACHINE="dev"
USER="admin"
EMAIL="unclesisu@sisumedia.com"
PASSWORD="guts02"
THEME=dist
SQL_BACKUP=./dev-backup.sql

wp "@$MACHINE" db reset --yes && wp "@$MACHINE" core install --url=kaa.local --title=kaa --admin_user=$USER --admin_email=$EMAIL --admin_password=$PASSWORD && wp "@$MACHINE" theme install $THEME --activate

wp "@$MACHINE" db import $SQL_BACKUP
