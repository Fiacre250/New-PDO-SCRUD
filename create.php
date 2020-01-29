<?php

# Fetching data from the form

$names = $_POST["names"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$intake = $_POST["intake"];

include "connection.php";

$insert_data = " INSERT INTO students (names,gender,dob,email,intake) VALUES ('$names','$gender','$dob','$email','$intake') ";

if ( mysqli_query($connect, $insert_data) ) {
    echo "<h3>Student Registered</h3>";
    echo "<meta http-equiv='refresh' content='0;URL= read.php' />";
}
else{
    echo "Error Occurred: ".mysqli_error($connect);
    echo "<meta http-equiv='refresh' content='3;URL= read.php' />";
}
?>