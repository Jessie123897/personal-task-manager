# Personal Task Manager

A simple web-based Personal Task Manager developed using Laravel and MySQL. The system allows users to create, view, edit, delete, and update the status of their tasks.

## Project Information

* **Project Code:** WST21-PM-2026-SF
* **Student Name:** [Jessie A. Vibas]
* **Course & Year:** [BSIT 2, 2nd Year]
* **Database Used:** MySQL
* **Framework:** Laravel
* **Frontend:** Blade Templates and CSS

## Features

* Add Task
* View Tasks
* Edit Task
* Delete Task
* Update Task Status

  * Pending
  * Completed

## Task Information

Each task contains:

* Task Name
* Description
* Status
* Due Date

## Technologies Used

* Laravel
* PHP
* MySQL
* Blade
* HTML
* CSS
* Laragon
* VS Code

## System Structure

The project follows the Laravel structure:

**Routes → Controller → Model → Database → Blade Views**

### Routes

The routes are defined in:

`routes/web.php`

The project uses Laravel resource routing:

`Route::resource('tasks', TaskController::class);`

### Controller

The main controller is:

`TaskController.php`

It handles creating, displaying, updating, and deleting tasks.

### Model

The main model is:

`Task.php`

It connects the application to the `tasks` database table using Laravel Eloquent.

### Database

The system uses a MySQL database with a `tasks` table containing:

* id
* task_name
* description
* status
* due_date
* created_at
* updated_at

### Blade Views

The task pages are located in:

`resources/views/tasks/`

The main views are:

* `index.blade.php`
* `create.blade.php`
* `edit.blade.php`

## How to Run the Project

1. Install Laragon and make sure Apache and MySQL are running.
2. Place the project inside the Laragon `www` folder.
3. Open the project folder in VS Code.
4. Configure the database in the `.env` file.
5. Run:

```bash
php artisan migrate
```

6. Start the Laravel development server:

```bash
php artisan serve
```

7. Open the application in your browser:

`http://127.0.0.1:8000/tasks`

## Purpose

This project was created as a Laravel Mini Project to demonstrate the basic connection between routes, controllers, models, databases, and Blade views while implementing a simple CRUD-based task management system.

