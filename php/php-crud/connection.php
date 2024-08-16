<?php
$SERVER= "127.0. 0.1."; 
$DB_USER="root";
$DB_PASSWORD="";
$DB_NAME="registration";
// Database connection
$connection= mysqli_connect($SERVER,$DB_USER,$DB_PASSWORD, $DB_NAME);

if(!$connection){
    echo "Error connecting to database".mysqli_connect_error();
}

?>