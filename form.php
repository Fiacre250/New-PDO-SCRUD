<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        
        <form action="create.php" method="POST">
            <h1>Students Registration</h1>
            <label>Student Names: </label>
            <input type="text" name="names" required><br>

            <label>Student Gender: </label>
            <select name="gender" required>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Something Else">Something Else</option>
            </select><br>

            <label>Student DOB: </label>
            <input type="date" name="dob" required><br>

            <label>Student Email: </label>
            <input type="email" name="email" required><br>
            
            <label>Intake: </label>
            <input type="number" name="intake" required><br>

            <hr>
            <a href="read.php">Show Registered</a>

            <button name="submit">Register</button>
        </form>

    </div>
</body>
</html>