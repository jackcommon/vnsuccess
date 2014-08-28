#!/bin/bash
cd $(dirname "$0")
mysqldump -u root vnsuccess > db_sync.sql
#git add db_sync.sql
#git commit -m "commit new file db_sync.sql"
#git push https://github.com/jackcommon/vnusaservices.git
