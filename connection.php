<?php
  $servername="localhost";
  $username="root";
  $password="";
  $db_name="demo";
  $conn = new mysqli($servername, $username, $password,  $db_name);
  if($conn->connect_error)
  {
    die("connection Failed".$conn->connect_error);
  }
  echo "connection succesfully";
?>