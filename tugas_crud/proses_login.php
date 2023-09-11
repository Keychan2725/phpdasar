<?php
session_start();
include('connect.php');


$email = $_POST['email'];
$pass = $_POST['pass'];

if ($conn->connect_error) {
    die("Koneksi gagal :" . $conn->connect_error);
} else {

    $stmt = $conn->prepare("select * from  admin where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === md5($pass)) {

            $_SESSION['login'] = true;
            $_SESSION['email'] = $email;
            echo "<script>
    window.location = `daftar.php`;
    alert(welcome);
    </script>";
        } else {
            Header("location:alert.php");
        }
    } else {
        header("location:alert.php");
    }
}
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>

</style>

<body>
    <form action="">

    </form>
</body>

</html>