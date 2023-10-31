# Queries Manager

## Overview

The "Queries Manager" is a tool that allows users to efficiently manage queries. Users can view, add, edit, and delete queries, as well as easily copy them.

## Key Features

- Login system with security rules:

![Captura de ecrã 2023-10-31 161259](https://github.com/AfonsoPaula/Queries-Manager/assets/67978137/6368db4c-1ee2-48b6-ba41-8c67f7a4c66a)

- View all queries in a table on the home page:

![Captura de ecrã 2023-10-31 155959](https://github.com/AfonsoPaula/Queries-Manager/assets/67978137/48b815b2-7bd9-46d2-bb6c-ae0e32ed2a72)

- Add new queries:

![Captura de ecrã 2023-10-31 160144](https://github.com/AfonsoPaula/Queries-Manager/assets/67978137/40c9aa18-2197-4ce1-8c2d-513bcd769868)
  
- Edit existing queries:

![Captura de ecrã 2023-10-31 160316](https://github.com/AfonsoPaula/Queries-Manager/assets/67978137/375ff16d-bffa-4b67-8bc1-e7c558c53001)

- Delete queries when necessary:

![Captura de ecrã 2023-10-31 160752](https://github.com/AfonsoPaula/Queries-Manager/assets/67978137/a916c6ea-d3e9-4bb6-8685-89096ca5e5e6)

- View each query individually and copy it with a simple click:
  
![Captura de ecrã 2023-10-31 160856](https://github.com/AfonsoPaula/Queries-Manager/assets/67978137/e747d49a-b0e2-47b8-906e-58e5d08a6db5)

- Filter the table by project name, query name, or tags for easy query search and organization:

![Captura de ecrã 2023-10-31 163559](https://github.com/AfonsoPaula/Queries-Manager/assets/67978137/597ead9e-3fbb-4999-b6dc-9cbdabbab781)

## Requirements and Dependencies:

- Web development environment, such as [Laragon 6.0](https://laragon.org/download/index.html);
- PHP 8.1.10;
- MySQL for the database;
- [CodeIgniter 4](https://codeigniter.com/download);

Below are the links and scripts used in the project, all of which have been stored locally and can be found in the 'public/assets' directory.

- Bootstrap:
```html
<link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
```

```html
<script src="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>"></script>
```

- Font Awesome:
```html
<link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">
```

- DataTable:
```html
<link rel="stylesheet" href="<?= base_url('assets/datatables/datatables.min.css') ?>">
```

```html
<script src="<?= base_url('assets/datatables/datatables.min.js') ?>"></script>
```

- JQuery:
```html
<script src="<?= base_url('assets/datatables/jquery-3.7.1.min.js') ?>"></script>
```

## Installation

### Database Configuration

- Create your own database. Laragon comes with an integrated MySQL server, making the database creation process straightforward. By default, Laragon opens the HeidiSQL interface, which greatly simplifies this task;
- Create a user with the necessary rights for database operations;
- Insert the database specifications into the .env file:

```php
#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------

database.default.hostname = localhost
database.default.database = query_manager
database.default.username = user_query_manager
database.default.password = ******************************
database.default.DBDriver = MySQLi
database.default.DBPrefix = 
database.default.port = 3306
```

- Run Migrations and Seeders. To apply the necessary data to your database, open a terminal, navigate to your project's directory, and run the following commands:

  - **Migrations** are used to execute migrations that create tables in the database according to the structure definied in project's code:
```shell
php spark migrate
```

  - **Seeders** are used to run seeders, which populate tables with initial or test data:
```shell
php spark db:seed
```

If you only want to view the project:
