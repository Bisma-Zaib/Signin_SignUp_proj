# User Authentication System

A secure PHP-based login and registration system with MySQL database integration.

## Features

- User registration with form validation
- Secure password hashing using PHP's `password_hash()`
- Login authentication with session management
- Responsive design with CSS transitions
- Form toggling between login/register views
- Protected homepage displaying user details
- Proper logout functionality

## Technologies Used

- PHP 8+
- MySQL/MariaDB
- HTML5
- CSS3 (with animations)
- JavaScript (for form toggling)
- Prepared statements for SQL security

## Database Schema
sql
CREATE TABLE `users` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL UNIQUE,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`Id`)
);
