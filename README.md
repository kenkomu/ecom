# Ecommerce Fashion Shop

<p>This is my first Laravel ecommerce project, with integrated PayPal payment system.</p>

## Installation

### I assume you already have Laravel installed <p>[Official Documentation](https://laravel.com/docs/8.x/installation#installation)</p>


### Clone the repository 

   <p> git clone https://github.com/kenkomu/ecom.git </p>

   ### Switch to the repository cloned folder

   <p> example path:  PS C:\Users> cd ecom  </p>

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

### HOMEPAGE
![Screenshot from 2023-03-28 16-14-18](https://user-images.githubusercontent.com/95502725/228250249-2045a0c4-3061-46df-8f81-47ce1acefd02.png)
### PRODUCTS PAGE
    ![Screenshot from 2023-03-28 16-22-33](https://user-images.githubusercontent.com/95502725/228250670-959af9ca-492f-4e58-b34c-370b75eb4334.png)

![Screenshot from 2023-03-28 16-23-26](https://user-images.githubusercontent.com/95502725/228250904-a8a9a9c1-3979-4bf0-ad3b-6536216f1c9e.png)

![Screenshot from 2023-03-28 16-24-08](https://user-images.githubusercontent.com/95502725/228251088-9f506420-e609-4d85-b0a2-1b07a8a3e970.png)
![Screenshot from 2023-03-28 16-24-42](https://user-images.githubusercontent.com/95502725/228251253-fbd328fd-e382-4f39-b9f2-a95946810764.png)
![Screenshot from 2023-03-28 16-26-07](https://user-images.githubusercontent.com/95502725/228251820-ec6bc71d-b5cd-41e6-8aa8-85ff6a70b120.png)
