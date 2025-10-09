#!/bin/bash


# Wait for DB to be available (optional but important)
echo "Waiting for the database to be ready..."
until php artisan migrate --force; do
  echo "Migration failed. Retrying in 5 seconds..."
  sleep 5
done

php artisan storage:link

# Start Supervisor to manage processes
exec supervisord -c /var/www/supervisord.conf
