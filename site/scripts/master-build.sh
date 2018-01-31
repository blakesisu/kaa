#!/bin/bash

# Backup check
read -r -p "Build from backup database? [y/N] (Default: no)" BACKUP_RESP
BACKUP_RESP=${BACKUP_RESP:-no}

if [[ "$BACKUP_RESP" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  source ./scripts/build-from-backup.sh
  exit 0
fi

# Sync check
read -r -p "Sync from another database? [y/N] (Default: no)" SYNC_RESP
SYNC_RESP=${SYNC_RESP:-no}

if [[ "$SYNC_RESP" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  source ./scripts/sync-machines.sh
  exit 0
fi

# Upload check
read -r -p "Sync from another database? [y/N] (Default: no)" UPLOAD_RESP
UPLOAD_RESP=${UPLOAD_RESP:-no}

if [[ "$UPLOAD_RESP" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  echo "use rsync command!"
  # source ./scripts/sync-machines.sh
  exit 0
fi

# Database check
read -r -p "Backup database? [y/N]" DATA_RESP
DATA_RESP=${DATA_RESP:-no}

if [[ "$DATA_RESP" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  source ./scripts/backup-db.sh
  exit 0
fi
