🗂 PHP + MySQL CRUD App

Description
A simple CRUD (Create, Read, Update, Delete) web application using PHP and MySQL. The project supports creating and managing products and comments. It uses connect.php to handle database connections and organizes logic inside a vendor/ directory.
📁 Project Structure

crud.local/
├── .osp/                    # OSPanel project files (optional)
├── config/
│   └── connect.php          # Database connection script
├── vendor/                  # Core application logic
│   ├── create.php           # Handles product creation
│   ├── create_comment.php   # Handles comment creation
│   ├── delete.php           # Deletes product/comment
│   ├── update.php           # Updates product data
│   ├── index.php            # Homepage, displays all records
│   ├── product.php          # Displays a single product
│   └── update.php           # Update form and logic

⚙ Requirements

    PHP 7.0+

    MySQL Server

    OSPanel / XAMPP / Local Apache environment

    PhpMyAdmin (for managing the database)

🚀 Getting Started

    Clone or download this project

git clone https://github.com/<your-username>/<repo-name>.git

Set up your database
Use PhpMyAdmin or MySQL CLI to create a database and a table:

CREATE TABLE `products` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `comments` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `product_id` INT NOT NULL,
  `comment` TEXT,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`product_id`) REFERENCES products(`id`) ON DELETE CASCADE
);

Configure your DB credentials
In config/connect.php, update the values:

$conn = new mysqli('localhost', 'your_username', 'your_password', 'your_database');

Run the project locally
Make sure it's located in your OSPanel directory (/domains/crud.local/) and visit:

    http://crud.local/vendor/index.php

🧩 Features

    ✅ View all products

    ➕ Add new products

    📝 Edit existing products

    ❌ Delete products

📐 CRUD Overview
Action	File
Create	create.php, create_comment.php
Read	index.php, product.php
Update	update.php
Delete	delete.php
🔧 To Improve

    Add form validation

    Use prepared statements (MySQLi or PDO) to prevent SQL injection

    Refactor into MVC or OOP structure

    Improve design with CSS/Bootstrap![изображение](https://github.com/user-attachments/assets/68d32859-8ac2-4839-9935-27e2f51a5d00)

![изображение](https://github.com/user-attachments/assets/6e4b6ffd-7d4d-4033-98b9-e316e742aad8)

