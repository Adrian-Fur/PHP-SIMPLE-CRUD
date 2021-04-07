<?php
include "db.php";


//CREATE
function createRows(){
    global $connection;
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password=  $_POST['password'];
    
    //SQL Injection
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
    
    //Password Encryption
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt= $hashFormat . $salt;
    $password= crypt($password,$hashF_and_salt);

    $query= "INSERT INTO login(username,password) VALUES ('$username', '$password')";
    $result= mysqli_query($connection,$query);
    
    if(!$result){
        die('Query FAILED'. mysqli_error($connection));
    } else {
        echo "User created!";
    }
 }
}
//READ
function readRows(){
    global $connection;
$query= "SELECT * FROM login";
$result= mysqli_query($connection,$query);

if(!$result){
die('Query FAILED'. mysqli_error($connection));
}
while ($row = mysqli_fetch_assoc($result)){       
   print_r($row);
}
}
//UPDATE
function updateTable(){
    if(isset($_POST['submit'])){
    global $connection;
     $username = $_POST['username'];
     $password = $_POST['password'];
     $id = $_POST['id'];

    $query = "UPDATE login SET username = '$username', password = '$password' WHERE id = $id";

    $result = mysqli_query($connection, $query);
    if (!$result){
        die ("Query Failed!". mysqli_error($connection));      
    } else {
        echo "Record Updated!";
    }
}
}

//SHOW ALL DATA FOR UPDATE
function showAllData() {
    global $connection;   
    $query= "SELECT * FROM login";
    $result= mysqli_query($connection, $query);
    
    if(!$result){
    die('Query FAILED'. mysqli_error($connection));
    }
    
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
    
        echo "<option value='$id'> $id</option>";
    }
    } 
    
//DELETE
function deleteRows(){
    if(isset($_POST['submit'])){
    global $connection;
  
     $id = $_POST['id'];

    $query = "DELETE FROM login WHERE id = $id";

    $result = mysqli_query($connection, $query);
    if (!$result){
        die ("Query Failed!". mysqli_error($connection));
    } else {
        echo "Record Deleted!";
    }
}
}
?>
