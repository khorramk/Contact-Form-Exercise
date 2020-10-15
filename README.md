# Laravel Contact Form Exercise

## Build 
This project uses the following:
1. Laravel 8
2. php 7
3. Bootstrap css 4
4. Axios
5. Vue.js
6. sass,
7. laravel mix

## Local testing

1. clone the repo
2. navigate to the project directory in terminal
3. find the `install-local.sh` file
4. either click or run it on terminal by `./install-local.sh`. This will install the dependencies and node files.
6. change .env.example file to .env and use the following for your sqlite database:

    `DB_CONNECTION=sqlite
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=/path/database.sqlite
    DB_USERNAME=root
    DB_PASSWORD=
    `

### Note: the database.sqlite should be in './database/database.sqlite' inside the project.
7. run `php artisan migrate`. this will migrate and setup database table in your database.sqlite file.

Then go to the corresponding localhost in your environment to see the changes after running yarn dev and php artisan serve.

## Deployment

 run `yarn prod` for assets. For deploying go to: [Laravel docs](https://laravel.com/docs/8.x/deployment)



