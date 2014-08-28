#!/bin/bash
# My example bash script
#git pull https://github.com/jackcommon/vnaka.git
git pull
mysql -u nonborongreu -pnonborongreuvnaka nonborongreu < db_sync.sql
mysql -u nonborongreu -pnonborongreuvnaka nonborongreu < db_update_remote.sql
