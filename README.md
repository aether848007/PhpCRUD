🗂 PHP + MySQL CRUD App

A simple CRUD (Create, Read, Update, Delete) web application built with **PHP** and **MySQL**.  
It supports creating and managing **products** and their **comments**.  
The application follows a modular structure and uses `connect.php` to manage the database connection.

---

## 📁 Project Structure

crud.local/
├── .osp/ # OSPanel project files (optional)
├── config/
│ └── connect.php # Database connection script
├── vendor/ # Core application logic
│ ├── create.php # Handles product creation
│ ├── create_comment.php # Handles comment creation
│ ├── delete.php # Deletes product or comment
│ ├── update.php # Product update form and logic
│ ├── index.php # Homepage, displays all records
│ └── product.php # Displays a single product

---

## ⚙ Requirements

- PHP 7.0 or higher  
- MySQL Server  
- OSPanel / XAMPP / Local Apache environment  
- PhpMyAdmin (for managing the database easily)

---

## 🚀 Getting Started

1. Clone the Repository

```bash
git clone https://github.com/<your-username>/<repo-name>.git
Replace <your-username> and <repo-name> with your actual GitHub details.

2. Set Up the Database

Using PhpMyAdmin or MySQL CLI, run the following SQL:
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

3. Configure Database Connection

Open config/connect.php and set your DB credentials:
$conn = new mysqli('localhost', 'your_username', 'your_password', 'your_database');

4. Run the Project Locally

    Place the project inside your local server’s directory (e.g., /domains/crud.local/ in OSPanel).

    Add a local domain in hosts file (e.g., crud.local).

    Visit in your browser:
http://crud.local/vendor/index.php

🧩 Features

    ✅ View all products

    ➕ Add new products

    📝 Edit existing products

    💬 Add comments to products

    ❌ Delete products and comments

| Action | Files                              |
| ------ | ---------------------------------- |
| Create | `create.php`, `create_comment.php` |
| Read   | `index.php`, `product.php`         |
| Update | `update.php`                       |
| Delete | `delete.php`                       |


🔧 Future Improvements

Add form validation

Use prepared statements (MySQLi/PDO) to prevent SQL injection

Refactor codebase into MVC or OOP structure

Improve UI using CSS or Bootstrap




