#!/bin/bash
mysqldump -u nonborongreu -pnonborongreuvnaka nonborongreu > db_sync.sql
git add db_sync.sql
git commit
git push https://github.com/jackcommon/vnsuccess.git
