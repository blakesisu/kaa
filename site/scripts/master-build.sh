#!/bin/bash

# Backup check
read -r -p "Build from backup database? [y/N] " BACKUP_RESP

if [[ "$BACKUP_RESP" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  source ./scripts/build-from-backup.sh
  exit 0
fi

read -r -p "Sync from another database? [y/N] " SYNC_RESP

if [[ "$SYNC_RESP" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  source ./scripts/sync-machines.sh
  exit 0
fi
