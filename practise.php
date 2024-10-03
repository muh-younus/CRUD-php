<?php

$servername ="localhost";
$username ="root";
$password ="";


$connection = mysqli_connect($servername, $username, $password);

if(!$connection){

    die("Sorry not connected with database". mysqli_connect_error());


}

else{

    echo "Connection successfully!"."<br>";
}

//create database

$sql = "CREATE DATABASE dbyunus1";
$result=mysqli_query($connection, $sql);


if($result){

    echo "The database was created successfully!";
}
else{

    echo "No database is created";
}
?>