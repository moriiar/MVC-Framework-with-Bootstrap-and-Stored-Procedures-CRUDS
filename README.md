
# MVC Framework with Bootstrap and Stored Procedures (CRUD)

A simple PHP MVC project that demonstrates how to create a lightweight framework using **Bootstrap**, **MySQL stored procedures**, and **CRUD operations** (Create, Read, Update, Delete) for basic user data.

## 📦 Features

- 🔄 **CRUD operations** using stored procedures
- 🎨 UI powered by **Bootstrap 5**
- 🗂️ MVC folder structure: `Model`, `View`, `Controller`
- 🧩 MySQL + PDO for secure DB operations
- 🚀 Ready for local or free web hosting

---

## 🛠️ Technologies Used

- PHP (Plain PHP + PDO)
- MySQL (with stored procedures)
- Bootstrap 5
- XAMPP (for local development)

---

## ⚙️ Database Setup

1. Create a MySQL database (e.g. `registration`)
2. Run the SQL below to create the `users` table and stored procedures:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  lastname VARCHAR(100),
  firstname VARCHAR(100)
);

DELIMITER //

CREATE PROCEDURE InsertUser(IN lname VARCHAR(100), IN fname VARCHAR(100))
BEGIN
  INSERT INTO users(lastname, firstname) VALUES (lname, fname);
END //

CREATE PROCEDURE GetUsers()
BEGIN
  SELECT * FROM users;
END //

CREATE PROCEDURE UpdateUser(IN uid INT, IN lname VARCHAR(100), IN fname VARCHAR(100))
BEGIN
  UPDATE users SET lastname = lname, firstname = fname WHERE id = uid;
END //

CREATE PROCEDURE DeleteUser(IN uid INT)
BEGIN
  DELETE FROM users WHERE id = uid;
END //

DELIMITER ;
```

---

## 🧪 How to Run Locally (with XAMPP)

1. Clone this repo or download the ZIP:
   ```bash
   git clone https://github.com/your-username/MVC-Framework-with-Bootstrap-and-Stored-Procedures-CRUDS.git
   ```

2. Move the folder to your XAMPP `htdocs`:
   ```
   C:\xampp\htdocs\MVC-Framework-with-Bootstrap-and-Stored-Procedures-CRUDS-
   ```

3. Import the database (`registration`) via phpMyAdmin

4. Update DB credentials in `config/database.php`:
   ```php
   private $username = "root";
   private $password = "";
   private $db_name = "registration";
   ```

5. Start **Apache** and **MySQL** in XAMPP

6. Visit:  
   ```
   http://localhost/MVC-Framework-with-Bootstrap-and-Stored-Procedures-CRUDS/view/index.php
   ```

---

## 📁 Project Structure

```
/config        → Database connection (PDO)
/controller    → Handles form logic (add/update/delete)
/model         → Handles DB operations using stored procedures
/view          → UI files (HTML + Bootstrap)
/assets        → CSS or JS assets
```

---

## 🙌 Credits

Created as a learning project for PHP MVC architecture, Bootstrap integration, and using MySQL stored procedures for secure and clean CRUD functionality.

---

## 📄 License

This project is open-source and free to use.
