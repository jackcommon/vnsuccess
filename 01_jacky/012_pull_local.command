#!/bin/bash
# My example bash script
git pull https://github.com/jackcommon/vnsuccess.git
mysql -u root vnsuccess < db_sync.sql
mysql -u root vnsuccess < db_update_local.sql
