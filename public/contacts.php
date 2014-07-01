<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=Address_Book', 'amanda', 'mysecretpassword');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'CREATE TABLE contacts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    phone_number VARCHAR(50) NOT NULL,
    birth_date VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
)'; 

$query = 'CREATE TABLE addresses (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	address VARCHAR(255) NOT NULL,
	city VARCHAR(100) NOT NULL,
	state VARCHAR(2) NOT NULL,
    PRIMARY KEY (id)
)'; 

$query = 'CREATE TABLE cont_address (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	address_id VARCHAR(255) NOT NULL,
	contact_id VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
)'; 
	
?>