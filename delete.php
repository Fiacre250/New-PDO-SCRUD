<?php

$id = $_GET["thisID"]; 

include "connection.php";

if( mysqli_query($connect, "DELETE FROM students WHERE id = '$id' ")
){
    echo "<h3>Student Deleted</h3>";
    echo "<meta http-equiv='refresh' content='0;URL= read.php' />";
}
else{
    echo "<meta http-equiv='refresh' content='3;URL= read.php' />";
}

?>