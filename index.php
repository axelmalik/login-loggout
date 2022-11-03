<?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:login.php?belum_login");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>one two three four</p>
    <a href="logout.php">logout</a>
</body>
</html>