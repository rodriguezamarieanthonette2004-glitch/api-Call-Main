## API-CALL


## Short description
-----------------

API-CALL is a small example Laravel project that demonstrates making and handling API requests for student records (create, read, update, delete). It includes a simple API, database migrations, and example scripts to exercise the endpoints.

## Setup

Prerequisites:
- PHP 8.0+ and Composer
- Node.js 16+ and npm (for frontend assets)
- SQLite (default) or another database supported by Laravel

Quick start (local):

1. Install PHP dependencies

```bash
composer install
```

2. Install JS dependencies and build assets (optional for API-only use)

```bash
npm install
npm run dev
```

3. Copy environment file and set values

```bash
cp .env.example .env
# Edit .env: set DB connection, VITE_API_URL, and any API keys
```

4. Generate application key

```bash
php artisan key:generate
```

5. Run migrations (and seeders if needed)

```bash
php artisan migrate --seed
```

6. Serve the application

```bash
php artisan serve --host=127.0.0.1 --port=8000
```

The API will be available at:

```
http://127.0.0.1:8000/api/students
```

#  Project Files

The full project source code is available for download via the link below:

Google Drive: [Download Project Files](https://drive.google.com/file/d/1oT3RVTwdz4GmT45JKrT9w9F8TwiSvsYH/view?usp=sharing)




