
# Movie Listing API

This project provides a RESTful API for movie listings and details movie with comments along with relevant movies. It's built with Laravel and uses Laravel Passport for OAuth authentication, API Doc for scribe, generating pdf download link for movie using DOMPDF with queue, monitoring tool for local development env using telescope .

## Prerequisites

- Docker and Docker Compose installed on your machine.

## Setup Instructions

Follow these steps to set up the project:

### 1. Build Docker Containers

```bash
docker-compose build
```

### 2. Start Docker Containers
This will start the necessary containers in detached mode:

```bash
docker-compose up -d
```
### 3. Enter the PHP Container
To execute commands inside the PHP container:

```bash
docker exec -it movie_php bash
```

### 4. Install Composer Dependencies
Once inside the PHP container:

```bash
composer install
```
###  5. Generate Application Key
This will generate a unique application key:

```bash
php artisan key:generate
```

### 6. Run Migrations and Seeders
This will create the necessary database tables and seed them with sample data:

```bash
php artisan migrate:refresh --seed
```

### 7. Install Passport
This will install Laravel Passport and its encrypted keys:

```bash
php artisan passport:install --force
```

### 8. Create Storage Symlink
This will create a symbolic link from public/storage to storage/app/public:

```bash
php artisan storage:link
```
### 9. Start Queue Worker
This will start the Laravel queue worker:

```bash
php artisan queue:work
```

### 10. Accessing the API
Once the setup is complete, you can access the API endpoints as described in the generated documentation.

```bash
/docs
```