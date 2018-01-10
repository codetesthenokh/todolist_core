# Simple To Do List (Back End)
This application is developed using these technologies with Windows Platform:
- Lumens (PHP Framework)
- MySQL

## How to run this application localy
### Pre-requisite
- XAMPP (will include PHP, MySQL, and apache web server)
- CLI, e.g. Git Bash
- Composer
- Lumens
- Visual Studio Code
- Add new database on MySQL called `todolist` and grant all access to user `codetesthenokh` with password `password`

### Steps
1. Clone git repository
Run `git clone https://github.com/codetesthenokh/todolist_core.git`
2. Install all dependencies
In Git Bash, go to project directory and run `composer install`
3. Migrate Database
In Git Bash, go to project directory and run `php artisan migrate`
4. Run server for this application
In Git Bash, go to project directory and run `php -S localhost:4000 -t public`
Note: It commands API to run on http://localhost:4000/api

## Features
### User 
1. Get user by ID (`GET http://localhost:4000/api/user/{id}`)
2. Register new user (`POST http://localhost:4000/api/user`)
3. Update user profile (`PUT http://localhost:4000/api/user/{id}`)
4. Login to system (`POST http://localhost:4000/api/login`)

### To Do List
1. Get to do list by user ID (`GET http://localhost:4000/api/todolistbyuserid/{user_id}`) 
2. Get to do list details (`GET http://localhost:4000/api/todolist/{user_id}/{id}`)
3. Create a new to do list item (`POST http://localhost:4000/api/todolist`)
4. Edit to do list item details (`PUT http://localhost:4000/api/todolist/{id}`)
5. Mark to do list item as complete (`PUT http://localhost:4000/api/todolistcomplete/{id}`)
6. Get incomplete to do list count by user ID (`GET http://localhost:4000/api/incompletecount/{user_id}`)
