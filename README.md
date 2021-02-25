# LARAVEL NOTES:

## Controller:

-   php artisan make:controller

## Model:

-   make:model + make:migration = php artisan make:model Element -m, php artisan make:model Comments -m;
-   for OneToMany etc edit migration with BigInteger + add to Element model function with hasMany(Comment::class) and belongsTo(Element::class)

## Seed:

-   php artisan make:seeder ElementSeeder
-   add a class to Database seeder and use: php artisan db:seed
-   or php artisan db:seed --class=ElementSeeder
-   use faker to check data
-   use migrate like: php artisan migrate:fresh --seed to get rewrited db with new id starting from 1;
