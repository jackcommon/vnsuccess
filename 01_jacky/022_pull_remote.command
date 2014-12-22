#!/bin/bash
# My example bash script
#git pull https://github.com/jackcommon/vnaka.git
git pull
mysql -u vnaka -pvnakavnaka vnaka_vnsuccess < db_sync.sql
mysql -u vnaka -pvnakavnaka vnaka_vnsuccess < db_update_remote.sql
