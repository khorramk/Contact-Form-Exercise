# Laravel Contact Form Exercise

## Build 

## Local testing

1. clone the repo
2. navigate to the project directory in terminal
3. find the `install.sh` file
4. either click or run it on terminal by './install.sh'. This will install the dependencies and node files.
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
8. run `./run.sh` after installation is complete. This will run `yarn dev` and run a local server with `php artisan serve` in the terminal. `yarn dev` will compile all the assets and be put in ./public/ folder. So /js and css/ or image will be in ./public/js and /public/css/. 

Then go to the corresponding localhost in your environment to see the changes

## Deployment



