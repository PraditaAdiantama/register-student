<?php

define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', "register_student");
define('DB_PORT', 3306);

$con = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

if(!$con){
    die("Can't connect with database: ". mysqli_connect_error());
}