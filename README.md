# Product Management Laravel App

## Getting Started

### Prerequisites
You will need:
- PHP 8+
- Laravel
- Composer
- NPM
- mysql

### Installing
Install libraries with Composer:

`composer install`

Install packages with NPM:

`npm install`

### Creating your .env file

Please use the [template.env](./template.env) for your `.env` file. You will have to replace the database name, username, and password with your local mysql server's credentials and the mail from address. All required fields are prefixed with `!!REPLACE`

! Your migrations will fail if you do not set up your database information properly in the `.env`.

### Run migrations

`php artisan migrate`

## Starting up the App
### Serve
`php artisan serve`

## Troubleshooting

- If you are using mysql 8 and PHP 7+, when making a mysql user, make sure to use `IDENTIFIED WITH mysql_native_password BY 'password';` when setting the password.
- Something wrong with your tables? Try running `php artisan migrate:fresh`
- Something wrong with in general? Try running `php artisan cache:clear`