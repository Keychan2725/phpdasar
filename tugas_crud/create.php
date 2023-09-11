<?php
include('connect.php');
if (isset($_POST['submit'])) {
    $nama = $_POST['nama_lengkap'];
    $nisn = $_POST['NISN'];
    $gender = $_POST['Gender'];
    $status = $_POST['Status'];
    $TTL = $_POST['TTL'];
    $sql = "insert into kartu_elektronik (nama_lengkap,NISN,Gender,Status,TTL) values ('$nama','$nisn','$gender','$status','$TTL')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:daftar.php');
    } else {
        die($conn->connect_error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>


</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Create Add </h3>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">NISN</label>
                <input type="text" class="form-control" id="NISN" name="NISN">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Gender</label>
                <input type="text" class="form-control" id="Gender" name="Gender">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Status</label>
                <input type="text" class="form-control" id="Status" name="Status">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">TTL</label>
                <input type="text" class="form-control" id="TTL" name="TTL">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
        </form>
    </div>

</body>
<script>

</script>

</html>