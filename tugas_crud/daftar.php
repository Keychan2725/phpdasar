<?php
include("connect.php")

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


<body class="min-vh-100  align-items-center">

    <form method="post">

        <div class="card w-100 m-auto p-2">
            <h3 class="text-center">Pengguna kartu
                <hr>
            </h3>
            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama </th>
                        <th scope="col">NISN </th>
                        <th scope="col"> Gender </th>
                        <th scope="col">Status </th>
                        <th scope="col">TTL</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM kartu_elektronik";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            $id = $data['id'];
                            $nama = $data['nama_lengkap'];
                            $nisn = $data['NISN'];
                            $gender = $data['Gender'];
                            $status = $data['Status'];
                            $TTL = $data['TTL'];
                            echo '<tr>
                          <td>' . $nama . '</td>
                          <td>' . $nisn . '</td>
                          <td>' . $gender . '</td>
                          <td>' . $status . '</td>
                          <td>' . $TTL . '</td>
                          <td class="text-center ">
                          <a href="update.php?id=' . $id . '"class="btn btn-sm btn-warning text-dark">Update</a>
                          </td>
                         <td class="text-center">
                         <button onClick="hapus(' . $id . ')"class="btn btn-sm btn-dark">Delete</button>
                         
                         </td>
                          </tr>';
                        }
                    }
                    ?>

                </tbody>
            </table>
            <button class="btn btn-sm btn-warning"><a href="create.php" class="btn text-dark">Tambah</a></button>
        </div>
    </form>
    <script>
    function hapus(id) {
        var yes = confirm("Yakin Ingin Menghapus Data Anda")
        if (yes === true) {
            window.location.href = "delete.php?id=" + id;
        }
    }
    </script>

</body>

</html>