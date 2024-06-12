<?php

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Load environment variables from .env file in the root directory
// $dotenv = Dotenv::createUnImmutable(__DIR__ . '/../');
$dotenv = Dotenv::createUnSafeImmutable(__DIR__ . '/../');
$dotenv->load();

/* Database credentials from environment variables */
define('DB_SERVER', getenv('DB_SERVER'));
define('DB_USERNAME', getenv('DB_USERNAME'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_NAME', getenv('DB_NAME'));

//define('Greetings', "K xa");
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'test_user');
//define('DB_PASSWORD', 'test_0000');
//define('DB_NAME', 'test_db');


//print_r("Hello");
//print_r(Greetings);
// print_r(DB_SERVER);

// print_r(getenv('DB_SERVER'));
// print_r(getenv('DB_USERNAME'));
// print_r(getenv('DB_PASSWORD'));
// print_r(getenv('DB_NAME'));

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
