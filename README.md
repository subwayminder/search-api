# Installation
1. ``composer install``
2. ``cp .env.example .env``
3. ``php artisan sail:install`` (you only need an app and mysql services)
4. ``./vendor/bin/sail up -d``

This API contains only two routes - GET api/houses and GET api/houses/{houseUuid}. Run this app and then run frontend app.
