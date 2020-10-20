<?php

/*
This file contains database configuration . you are running mysql using username 'root' password ''
*/

define('DB_SERVER', 'localhost:3308');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// try connecting to the database

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
?>