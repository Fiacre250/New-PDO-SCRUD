<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Read</title>
</head>
<body>
    <div class="main">
    <?php
        include "connection.php";

        $select_data = mysqli_query($connect, "SELECT * FROM students");
        
        echo"
        <table>
            <tr>
                <th>Names</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Intake</th>
                <th colspan='2'>Action</th>
            </tr>
        ";    
        while ($rows = mysqli_fetch_assoc($select_data)) {
          
          echo"
            <tr>
                <td>".$rows["names"]."</td>
                <td>".$rows["gender"]."</td>
                <td>".$rows["dob"]."</td>
                <td>".$rows["email"]."</td>
                <td>".$rows["intake"]."</td>
                <td><a href='edit-form.php?thisID=".$rows["id"]."&names=".$rows["names"]."&gender=".$rows["gender"].
                "&dob=".$rows["dob"]."&email=".$rows["email"]."&intake=".$rows["intake"]."' class='update'>Update</a></td>
                <td><a href='delete.php?thisID=".$rows["id"]."' class='delete'>Delete</a></td>
            </tr>
          ";  
        }
        
        echo "</table>";
        echo "<div class='add-more'>";
        echo "<a href='form.php'>Register other Students</a>";
        echo "</div>";
        
    ?>
    </div>
</body>
</html>
