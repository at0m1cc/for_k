<?php
    $con = new PDO("mysql:host=127.0.0.1;dbname=SomeDB","root","");
    if(isset($_POST["submit"])){
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <button onclick="window.location = 'register.php'">Sing in</button>
    <form method="POST">
        <input type="text" name="login" placeholder="Login" require>
        <br>
        <input type="password" name="password" placeholder="Password" require>
        <br>
        <button name="submit">Log in</button>
    </form>
</body>
</html>