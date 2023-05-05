<?php 
 
  $hostname = "localhost";
  $dbname = "justmma";
  $username = "root";          //...
  $password = "Pa23004263501"; //...
  $charset = "utf8mb4";
    
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
    
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }