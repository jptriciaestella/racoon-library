# Racoon Library
##### Made by Tricia Estella
using Laravel version 7.x

Racoon Library is a library website made by PT Musang, which was done in less than a month by their one employee.

## Features
- View all book data
- Add new book
- Edit existing book
- Delete existing book
- Have all validation needed for the book information (Title, Author, Pages, YearPublished)
- Added Features (Add a photo to book data, view a book details)


## Installation

Racoon Library requires PHP, composer, and XAMPP to run.

Download the code and create .env file using the data from .env.example to use configured database and other settings.

Turn on XAMPP Apache and MySQL and run these commands on your file terminal:

```sh
composer install
php artisan key:generate
php artisan migrate
```

For additional storage configuration (to access book photo), please do:

```sh
php artisan storage:link
```

And all features should work normally, type:

```sh
php artisan serve
```

