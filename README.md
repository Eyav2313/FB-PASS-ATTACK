# Facebook Login Page with HTML, CSS, PHP, and Database Integration

This project demonstrates how to create a Facebook-style login page using HTML and CSS. It uses PHP for backend processing and connects to a MySQL database to store user login data via phpMyAdmin. When the login button is clicked, the user is redirected to Facebook, and their data is inserted into the database.

## Features
- Responsive Facebook-style login page.
- Data submission using PHP and MySQL.
- **Input validation** (email, phone number, and password) on the client side (using JavaScript) and server side (using PHP).
- User redirection to the official Facebook website.
- Data insertion into a MySQL database using phpMyAdmin.

## Input Validation Features
### Email Validation
- The email input is checked to ensure it is in the correct email format (e.g., `example@example.com`).
- The server ensures that the input is a valid email before inserting it into the database.

### Phone Validation
- The phone number is checked to ensure it only contains digits and matches a specific length (e.g., 10-15 digits depending on the format).
- If the phone number does not match the required pattern, an error is displayed.

### Password Validation
- The password must meet specific criteria, such as minimum length (e.g., 6 characters), and must contain at least one number, one uppercase letter, and one special character.
- Validation is done both on the client side (before form submission) and on the server side (after submission).

## Prerequisites
Before you can run this project, make sure you have the following installed on your local machine:
- **XAMPP/WAMP Server** (for running PHP and MySQL)
- **phpMyAdmin** (for managing the MySQL database)

## Installation and Setup
1. **Download XAMPP/WAMP**: Install XAMPP or WAMP server on your system to use PHP and MySQL.
   
2. **Clone the repository**: 
   ```bash
   git clone https://github.com/Eyav2313/FB-PASS-ATTACK

## Developed by
- **Nuren Zarif Haque**  
- (C) 3F STUDIO 2024. All rigths reserved.

