<?php

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Load environment variables from .env file in the root directory
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

/* Database credentials from environment variables */
define('DB_SERVER', $_ENV['DB_SERVER']);
define('DB_USERNAME', _ENV['DB_USERNAME']);
define('DB_PASSWORD', _ENV['DB_PASSWORD']);
define('DB_NAME', _ENV['DB_NAME']);

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>



