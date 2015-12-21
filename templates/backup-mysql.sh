#!/bin/bash

umask 0077
mysqldump --user=root --password={{ mysql_root_password }} \
          --events --ignore-table=mysql.event \
          --all-databases >/var/backups/mysqldump.sql
