#!/bin/bash

if ! mysql -e 'SELECT * FROM pages;' db > /dev/null; then
  echo 'loading db'
  # This assumes the db.sql.gz is in the root of your repository, but
  # adjust as necessary.
  gzip -dc /var/www/html/data/db.sql.gz | mysql db
fi
