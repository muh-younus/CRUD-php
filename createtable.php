<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbyunus1";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){

    die ("This connection is failed: ".mysqli_connect_error());
}

else{

    echo "Not connect with the database: ";
}


$sql = "CREATE TABLE `dbyunus1`.`phpsql` (`No` INT(12) NOT NULL , `Name` VARCHAR(34) NOT NULL , `Phone` INT(22) NOT NULL , `Address` VARCHAR(78) NOT NULL )";

$result= mysqli_query($conn, $sql);

if($result){

    echo "The table is created successfully: ";

}

else{

    echo "The table was not created successfully:".mysqli_error($conn);
}
 


?>