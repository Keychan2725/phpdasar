<?php

session_start();
include 'connect.php';
$id = $_GET['id'];
if (isset($_GET['id'])) {
    $sql = "DELETE FROM siswa WHERE id_siswa = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:siswa.php');
    } else {
        die($conn->connect_error);
    }
}
