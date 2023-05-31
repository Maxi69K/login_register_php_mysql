# login & register create with php & mysql

## Create database
CREATE DATABASE usersdb;

## Create table
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(40) NOT NULL,
password VARCHAR(20) NOT NULL
);
