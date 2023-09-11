<?php
include('connect.php');
$id = $_GET['id'];
$get_data = "SELECT * from kartu_elektronik where id = $id";
$result_data = mysqli_query($conn, $get_data);
$row = mysqli_fetch_assoc($result_data);
$nama = $row['nama_lengkap'];
$nisn = $row['NISN'];
$gender = $row['Gender'];
$status = $row['Status'];
$TTL = $row['TTL'];
if (isset($_POST['submit'])) {
    $nama = $_POST['nama_lengkap'];
    $nisn = $_POST['NISN'];
    $gender = $_POST['Gender'];
    $status = $_POST['Status'];
    $TTL = $_POST['TTL'];
    $sql = "update kartu_elektronik set id = $id, nama_lengkap = '$nama', NISN = '$nisn', Gender = '$gender', Status ='$status', TTL = '$TTL ' where id = $id";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>


</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Update Data </h3>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value=" <?php echo $nama ?>">
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="nama" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="NISN" name="NISN" value=" <?php echo $nisn ?>">
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="Gender" name="Gender" value=" <?php echo $gender ?>">
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Status</label>
                            <input type="text" class="form-control" id="Status" name="Status" value=" <?php echo $status ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">TTL</label>
                            <input type="text" class="form-control" id="TTL" name="TTL" value="<?php echo $TTL ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
        </form>
    </div>

</body>
<script>

</script>

</html>