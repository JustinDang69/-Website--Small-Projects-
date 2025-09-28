<?php
session_start();

//array of valid users (username => password)
$valid_users = [
    "student" => "vic123",
    "John Cena" => "youcantseeme",
    "Ironman" => "iamironman"
];

$error ="";

#get username and password from form
if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    #check if username exists and password matches
    if (isset($valid_users[$username])  && $valid_users[$username] === $password){
        $_SESSION['loggedin']= true;
        header("Location: enrolment.html");
        exit;
    }
    else {
        $error ="invalid username or password.";
    }


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Victoria Student Login</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <h2>Victoria University Student Login</h2>
    <div class="login-box">
        <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?> 

        <form method="post" action="">
            <label>Username:</label><br>
            <input type="text" name="username" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>


