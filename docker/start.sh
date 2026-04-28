#!/bin/sh
set -eu

mkdir -p \
    bootstrap/cache \
    database \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs

touch database/database.sqlite
chmod -R ug+rwX bootstrap/cache storage database || true

if [ -z "${APP_KEY:-}" ]; then
    export APP_KEY="$(php artisan key:generate --show --no-interaction)"
    echo "APP_KEY is not set; generated a temporary key for this container. Set APP_KEY in Railway variables for a stable production key."
fi

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8080}"
