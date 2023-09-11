<?php 


$servername = "localhost:3306";
$username_db = "root";
$password_db = "";
$database_db= "db_sekolah";


$conn = new mysqli($servername, $username_db, $password_db,$database_db);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
