<?php
include("connect.php");

if(isset($_POST['register'])){

    $nama               = $_POST['nama'];
    $username           = $_POST['username'];
    $password           = $_POST['password'];

    $sql ="INSERT INTO login (nama, username, password) VALUE ('$nama', '$username','$password')";
    $query = mysqli_query($db, $sql);

    if ($query){
        header('Location: login.php?status=sukses');
    }else{
        header('Location: register.php?gagal=register');
    }
    }else{
        die ("Access Denied...");
    }

?>