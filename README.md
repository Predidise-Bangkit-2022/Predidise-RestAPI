# Predidise Rest API

## Requirements
- Deployed predidise flask api
- Use ready mysql database server

## Step to deploy

### Configure .env file
change this section according to your settings
```bash
APP_URL=http://localhost:8000
FLASK_URL=http://127.0.0.1:5000

DB_DATABASE=new
DB_USERNAME=root
DB_PASSWORD=
```
### Install vendor file use composer
```bash
composer install
```
### Generate laravel key
```bash
php artisan key:generate
```

### Migrate table to database
```bash
php artisan migrate
```

### Run seeder
```bash
php artisan db:seed
```

### Symlink storage
```bash
php artisan storage:link
```

### Run

```bash
php artisan serve
```