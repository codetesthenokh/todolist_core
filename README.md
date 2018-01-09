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
