<?php

$host = 'localhost';
$user = 'root'; 
$pass = ''; 

// Create connection
$conn = new mysqli($host, $user, $pass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create database
$sql = "CREATE DATABASE home";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db("home");

// SQL to create table
$sql = "CREATE TABLE contacts (
    id INT(6) UNSIGNED PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'contacts' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
