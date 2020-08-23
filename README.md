# RestQL Example

An example application for the RestQL package 📦

## Get started

All you need is PHP ^7.1 and SQLite extension for PHP.

- Create your environment file.
```bash
cp .env.example .env
```

- Migrate and seed fake data.

```bash
test -f database/database.sqlite || touch database/database.sqlite
php artisan migrate:fresh --seed
```

- Run test

```bash
php artisan test
```
