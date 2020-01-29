<?php

$id = $_POST["student_ID"];

$names = $_POST["names"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$intake = $_POST["intake"];

include "connection.php";

$update_data = " UPDATE students SET names='$names',gender='$gender',dob='$dob',email='$email',intake='$intake' WHERE id = '$id' ";

if ( mysqli_query($connect, $update_data) ) {
    echo "<h3>Student updated</h3>";
    echo "<meta http-equiv='refresh' content='0;URL= read.php' />";
}
else{
    echo "Error Occurred: ".mysqli_error($connect);
}

?>