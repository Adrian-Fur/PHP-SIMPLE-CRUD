<?php
//DATEBASE CONNECTION
$connection = mysqli_connect('localhost','root','','loginapp');

if (!$connection){
    
    die("Database connection failed");
}

?>