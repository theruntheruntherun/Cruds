<?php
 $conn = mysqli_connect("localhost", "root", "", "db_ss20_news");
 if(!$conn)
 {
    die("connection failed". mysqli_connect_error());
 }
//  echo "Connect sucess";