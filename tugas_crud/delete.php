<?php

session_start();
include 'connect.php';
$id = $_GET['id'];
if (isset($_GET['id'])) {
    $sql = "DELETE FROM kartu_elektronik WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:daftar.php');
    } else {
        die($conn->connect_error);
    }
}
