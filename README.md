<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://neon.com/brand/neon-logo-dark-color.svg">
  <source media="(prefers-color-scheme: light)" srcset="https://neon.com/brand/neon-logo-light-color.svg">
  <img width="250px" alt="Neon Logo fallback" src="https://neon.com/brand/neon-logo-dark-color.svg">
</picture>

# Running Neon database migrations in a Laravel project

This application is a simple PHP application built using the Laravel framework and Neon database. It returns a list of authors and books written by them. This project uses the built-in Eloquent ORM to interact with the database and generate/run migrations. 

To build this project from scratch, check out the [guide in Neon's documentation](https://neon.tech/docs/guides/laravel-migrations). 

## Set up Locally

You will need the following:
- A [Neon](https://neon.tech) account and a project
- PHP and Composer installed on your local machine

1. Run the following command to clone the project repository:

```bash
git clone https://github.com/neondatabase/guide-neon-laravel.git
```

2. Navigate to the project directory and install the project dependencies using Composer:

```bash
cd guide-neon-laravel
composer install
```

3. Create a `.env` file in the root of the project (you can start with the `.env.example` file) and update the following variables:
```bash
DB_CONNECTION=pgsql
DB_PORT=5432
DATABASE_URL=[YOUR_NEON_POSTGRES_CONNECTION_STRING]
```

4. Run the database migrations and seed the database with sample data:

```bash
php artisan migrate
php artisan db:seed
```

5. Start the Laravel development server:

```bash
php artisan serve
```

6. Open your web browser and visit `http://localhost:8000` to see the Laravel application running.
