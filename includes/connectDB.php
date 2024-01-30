<?php

$server = '127.0.0.1:3307';
$user = 'root';
$password = '';
$database = 'shopnow';

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    die("DB connectin failed : "+mysqli_error($conn));
}

?>