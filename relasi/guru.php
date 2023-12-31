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
            <h3 class="text-center">Guru Wali Kelas
                <hr>
            </h3>
            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th scope="col">No </th>
                        <th scope="col">Nama Guru </th>
                        <th scope="col"> NiSN </th>
                        <th scope="col">Gender </th>
                        <th scope="col">Wali Kelas</th>
                        <th scope="col">Guru Mapel</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM guru INNER JOIN mapel   ON  guru.id_mapel = mapel.id INNER JOIN kelas ON kelas.id_guru_walikelas = guru.id";
                    $result = mysqli_query($conn, $sql);
                    $no = 1;
                    foreach ($result as $row) :


                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama_guru']; ?></td>
                        <td><?= $row['nik']; ?></td>
                        <td><?= $row['gender']; ?></td>
                        <td><?= $row['tingkat_kelas'] . ' ' . $row['jurusan_kelas']; ?></td>
                        <td><?= $row['nama_mapel']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- <button class="btn btn-sm btn-warning"><a href="create.php" class="btn text-dark">Tambah</a></button> -->
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