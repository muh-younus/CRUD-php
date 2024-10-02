<?php
$name ="";
$email ="";
$phone = "";
$address = "";

if($_server['REQUEST_METHOD']=='POST'){


    $name = $_POST["name"];
    $name = $_POST["email"];
    $name = $_POST["phone"];
    $name = $_POST["address"];

    do{

        if(empty($name) || empty($email) || empty($phone) || empty($address)){

            $errorMessage = "All the fields are required";
            break;
        }

        //add new client to database

        $phone ="";
        $email ="";
        $phone ="";
        $address ="";

    }while(false);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data in myshop</title>
</head>
<body>

    <div class="container my-5">

    <h2>New Client</h2>
    
    <form method="post">
    
    <div class="row col-mb-3">

       <label class="col-sm-3 col-form-label">Name</label>

       <div class="col-sm-6">

       <input type="text" class="form control" name= "name" value="<?php echo $name; ?>">
       </div>
    </div>


    <div class="row col-mb-3">

       <label class="col-sm-3 col-form-label">Email</label>

       <div class="col-sm-6">

       <input type="text" class="form control" name= "email" value="<?php echo $email; ?>">
       </div>
    </div>



    <div class="row col-mb-3">

       <label class="col-sm-3 col-form-label">Phone</label>

       <div class="col-sm-6">

       <input type="text" class="form control" name= "phone" value="<?php echo $phone; ?>">
       </div>
    </div>

    <div class="row col-mb-3">

       <label class="col-sm-3 col-form-label">Adress</label>

       <div class="col-sm-6">

       <input type="text" class="form control" name= "address" value="<?php echo  $address; ?>">
       </div>
    </div>y


    <div class="row mb-3">

    <div class="offset-sm-3 col-sm-3 d-grid">
        <button type="submit" class="btn btn-primary">submit</button>

    </div>
    <div class="col-sm-3 d-grid">

    <a class="btn btn-outline-primary" href="/myshop/index.php" role="button">cancel</a>
    </div>



    </div>




    

    </form>

    </div>
</body>
</html>