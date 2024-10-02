
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 05</title>

    <style>

        *{

            margin: 0;
            padding: 0;
        }

        .title{

            background-color: gray;
            margin: 0;
        }

        .title h1{

            padding: 20px;

           
    }

    .menu{

        background-color: black;
        
    }

    .menu a{

        color: white;
    }

    .main h1{
        
        text-align: center;
        align-items: center;
        
    }

    .table{

        border-radius: 3px solid black;
    }
    .table  th{

        padding: 10px;
        background-color: black;
        color: white;
    }

        
    </style>
</head>
<body>
    

<header>

<div class="title">

<h1>Student Records</h1>
</div>

<div class="menu">

<a href="">Home</a>
<a href="">add</a>

</div>


</header>

<div class="main">

<h1>Student Record</h1>


<button   role="button"  ><a  href="create.php">Add New Record</a></button>
<hr>

<table class="table table-bordered">


<thead>

<tr>
<th scope="col">ID</th>
<th scope="col">NAME</th>
<th scope="col">EMAIL</th>
<th scope="col">ADDRESS</th>
<th scope="col">CREATE_AT</th>
<th scope="col">Action</th>

</tr>
</thead>

<tbody>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database ="myshop";

//create connection
$connection = new mysqli($servername, $username, $password, $database);

//check connection

if($connection -> connect_error){

    die ("connection failed" .$connection -> connect_error);
}

//read all row from database table

$sql = "SELECT * FROM clients";
$result = $connection -> query ($sql);

if(!$result){

    die("Invalid query: ". $connection -> error);
}

while($row =  $result -> fetch_assoc()){

    echo"
    <tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[email]</td>
    <td>$row[phone]</td>
    <td>$row[address]</td>
    <td>$row[created_at]</td>

    <td>
    <a class='btn btn-primary btn-sm' href ='/myshop/edit.php?id=$row[id]'>Edit</a>
    <a class='btn btn-primary btn-sm' href ='/myshop/delete.php?id=$row[id]'>Delete</a>
    </td>
    
    </tr>
    ";
}

?>
</tbody>


</table>


</div>


</body>
</html>
