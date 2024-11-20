-- Create the database
CREATE DATABASE event_management;

-- Use the event_management database
USE event_management;

-- Create a table to store event registrations
CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    event VARCHAR(255) NOT NULL
);
