<?php

$server        = "localhost";
$user          = "root";
$password      = "";
$nama_database = "owl";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db){
    die ("Failed to connect to the database :" . mysqli_connect_error());
}


?>