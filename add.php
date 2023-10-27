<?php
include "db_connect.php";
if(isset($_POST['submit']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];

    $sql ="INSERT INTO `crud`(`first_name`, `last_name`, `email`, `gender`) 
    VALUES ('$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header("Location:index.php?msg= New record has been add");
    }else{
        echo "Failed". mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Crud </title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:pink">
        Crud System
    </nav>
    <div class="container">
        <div class="text-center mb-4">
           <h3>Add user</h3>
           <p class="text-muted">test add</p> 
        </div>
    

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vm; min-width:300px;">
        <div class="row">
            <div class="col">
            <label class="form-label">First Name:</label> 
            <input type="text" class="form-control" name="first_name" placeholder="ss0">
            </div>

            <div class="col">
            <label class="form-label">Last Name:</label> 
            <input type="text" class="form-control" name="last_name" placeholder="setec">
            </div>

            <div class="md-3">
            <label class="form-label">Email:</label> 
            <input type="email" class="form-control" name="email" placeholder="ss20@gmail.com">
            </div>

            <div class="form-group md-3">
            <label>Gender:</label> &nbsp;
            <input type="radio" class="form-check-input" name="gender" id="male" value="male">
            <label for="male" class="class-input-label">Male:</label> &nbsp;

            <input type="radio" class="form-check-input" name="gender" id="female" value="female">
            <label for="female" class="class-input-label">Female:</label>
            <div>
            <button type="submit" class="btn btn-success" name="submit">Save</button>
            <a href="index.php" class="btn btn-danger" name="reset">Cancle</a>
        </div>
     </form>
   </div>
</div>
     <!-- boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>