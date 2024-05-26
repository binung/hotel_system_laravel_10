# Git Clone my Project
```
1.Run `git clone 'link projer github'
2.Run composer update
3.Run cp .env.example .env or copy .env.example .env
4.Run php artisan key:generate
5.Run php artisan migrate
6.Run php artisan serve
7.Go to link localhost:8000
```
# Step 1: Git Clone Laravel 10
First, clone a new Laravel app just by running the below command in your terminal.
```
https://gitlab.com/SoengSouy/hotel_system_laravel_10.git
```

# Step 2: Composer Update
Type the command in your terminal.
```
composer update
```

# Step 3: Update Your Database Credentials
After that update your database credentials in your .env file which is located in your project root.
1. connection databases
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=#your database password
```

```
2. for send mail when fogot password
```

```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your email
MAIL_PASSWORD='your password email'
MAIL_ENCRYPTION=tls
```

# Step 4: Make Migration
After adding the migration file now run the migrate command.

```
php artisan migrate
```

# Step 5:Run
After adding the run file now run the migrate command.

```
php artisan serve
```
