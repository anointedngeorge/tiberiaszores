for file in \
  database/migrations/2025_07_12_195858_create_products_table.php \
  database/migrations/2025_07_12_195911_create_sales_table.php \
  database/migrations/2025_07_13_085036_create_media_table.php \
  database/migrations/2025_07_13_092032_create_date_trackers_table.php; \
do php artisan migrate --path=$file; done
