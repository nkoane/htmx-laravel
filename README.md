# htmx+laravel

Trying to see if htmx+laravel can work nicely, also, trying to figure out if I need, svelte for frontend UI when working with laravel.

## Running

The usual, clone then:

### Install and configure

```bash
composer install
```

Then copy the *env.example* to *.env* document, and set the following:

```env
DB_CONNECTION=sqlite
```

**nb**: make sure you remove the line: (*i do not know exactly why it works, lol.*):

```env
DB_DATABASE=htmx
```

And then we can generate-api-key and migrate the db:

```bash
php artisan key:generate
php artisan migrate
```

### pnpm

```bash
pnpm install
pnpm build
```

### run

```bash
php artisan serve
```

You should then be able to access the [tasks](http://127.0.0.1:8000/tasks?) — happy hunting.
