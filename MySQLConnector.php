<?php
session_start();
 
$dbhost = "localhost";  // this will ususally be 'localhost', but can sometimes differ
$dbname = "test";       // the name of the database that you are going to use for this project
$dbuser = "root";       // the username that you created, or were given, to access your database
$dbpass = "";           // the password that you created, or were given, to access your database

//check connection using mysqli
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
