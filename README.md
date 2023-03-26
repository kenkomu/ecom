# Ecommerce Fashion Shop

<p>This is my first Laravel ecommerce project, with integrated PayPal payment system.</p>

## Installation

### I assume you already have Laravel installed <p>[Official Documentation](https://laravel.com/docs/8.x/installation#installation)</p>


### Clone the repository 

   <p> git clone https://github.com/Nenadsavkic/ecommerce.git </p>

   ### Switch to the repository cloned folder

   <p> example path:  PS C:\Users> cd ecommerce  </p>

### Install all the dependencies using composer

   ``` bash
   composer install
   ```

### Copy the '.env.example' file in the '.env' file
    
   ```bash
   cp .env.example .env
   ```

### Generate a new application key
    
   ```bash
   php artisan key:generate
   ```

### Create database 'ecommerce' in your local server (xamp), then run migration
### Check the database connection in .env before migrating

   ```bash
   php artisan migrate
``` 

### To seed products in database

   ```bash
   php artisan db:seed
```

### Start your server

   ```bash
   php artisan serve
   ```

<p> You can now access the server at http://localhost:8000</p>

    

