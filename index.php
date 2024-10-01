
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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


<button role="button">Add New Record</button>
<hr>

<table class="table table-bordered">


<thead>

<tr>

<th scope="col">Name</th>
<th scope="col">Father Name</th>
<th scope="col">Registration</th>
<th scope="col">Age</th>
<th scope="col">class</th>
<th scope="col">Action</th>

</tr>
</thead>


<?php

$servername="localhost";
$username="root";
$password="";
$dbname="week5";

//create connection

$conn=mysqli_connect($servername,$username,$password,$dbname);

//check connection

if(!$conn){

    die("connection failed: ".mysqli_connect_error());
}


$sql="SELECT `id`, `Name`, `Father_Name`,`Registration_NO`, `Age`,`Class`,`Gender` FROM ";
$result = mysqli_query($conn,$sql);




?>
</table>


</div>


</body>
</html>
