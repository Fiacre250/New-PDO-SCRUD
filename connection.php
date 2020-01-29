<?php

/***** Connection to the database *****/

$DB_server = "localhost";
$DB_name = "crud-app";
$DB_user_name = "root";
$DB_user_password = "";

$connect = mysqli_connect($DB_server,$DB_user_name,$DB_user_password,$DB_name);
if(!$connect){
    echo mysqli_error($connect);
}

/*************************************/

?>