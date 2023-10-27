<?php
include "db_connect.php";
$id=$_GET['id'];
$sql="DELETE FROM `crud` WHERE id=$id";
$result = mysqli_query($conn,$sql);
    if($result)
    {
        header("Location:index.php?msg= record has been update");
    }else{
        echo "Failed". mysqli_error($conn);
    }

?>