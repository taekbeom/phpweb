<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lebedeva M.D.</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3 mb-4">
                    <h1>Registration</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="registration.php">
                        <div class="row form-reg mt-2">
                            <input class="form" type="email" name="email" placeholder="email">
                        </div>
                        <div class="row form-reg mt-2">
                            <input class="form" type="login" name="login" placeholder="login">
                        </div>
                        <div class="row form-reg mt-2">
                            <input class="form" type="password" name="password" placeholder="password">
                        </div>
                        <button type="submit" class="btn-reg mt-4" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    require_once('db.php');
    
    $link = mysqli_connect('127.0.0.1', 'root', 'eve@123', 'sqldb');

    if (isset($_COOKIE['User'])) {
        header("Location: login.php");
    }
    
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $username = $_POST['login'];
        $password = $_POST['password'];
    }
    
    if (!$email || !$username || !$password) die ('Some fields are empty, think again');
    
    $sql = "INSERT INTO user (username, email, pswd) VALUES ('$username', '$email', '$password')";
    
    if(!mysqli_query($link, $sql)) {
        echo "User cannot be added";
    }
?>