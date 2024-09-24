## Installation

### Clone the repository

    https://github.com/peyas4854/Shop-grocery.git

### Switch to the repo folder

    cd Shop-grocery

### Install all the dependencies using composer

    composer install

### Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

### Database configuration

    DB_DATABASE=your_database_name
    DB_USERNAME=your_user_name
    DB_PASSWORD=your_password

### Generate a new application key & storage link create

    php artisan key:generate
    php artisan storage:link

### Create table & dummy data from seeder

    php artisan migrate --seed

### Start the local development server

    php artisan serve

### Credentials

    Admin Panel 
    ======
    Email: admin@admin.com 
    password - 1234678

    Manager Panel
    ======
    Email: manager@manager.com
    password - 1234678




  
