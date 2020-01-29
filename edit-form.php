<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Edit Student</title>
</head>
<body>
    <div class="container">
        
        <form action="update.php" method="POST">
            <h1>Edit Student Info</h1>
            <input type="hidden" name="student_ID" value="<?php echo $_GET["thisID"] ?>">

            <label>Student Names: </label>
            <input type="text" name="names" value="<?php echo $_GET["names"] ?>"><br>

            <label>Student Gender: </label>
            <select name="gender" value="<?php echo $_GET["gender"] ?>">
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Something Else">Something Else</option>
            </select><br>

            <label>Student DOB: </label>
            <input type="date" name="dob" value="<?php echo $_GET["dob"] ?>"><br>

            <label>Student Email: </label>
            <input type="email" name="email" value="<?php echo $_GET["email"] ?>"><br>
            
            <label>Intake: </label>
            <input type="number" name="intake" value="<?php echo $_GET["intake"] ?>"><br>

            <hr>

            <button>Save Changes</button>
        </form>

    </div>
</body>
</html>
