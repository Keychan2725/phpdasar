<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- Font Awesome 4-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="registrasi.css">
</head>
<style>
.header {
    padding: 30px;
    text-align: center;


}

.header h1 {
    font-size: 50px;

}

.topnav {
    overflow: hidden;

}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
</style>

<body>
    <div class="background">
        <div class="header">
            <h1>Registrasi</h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3OY4Ehnv61GiOiBy2annGYJfCafWJ_BbiTA&usqp=CAU"
                alt="" width="100px">
            <br><br>
            <div class="topnav bg-dark">
                <a href="registrasi.php">HOME</a>
                <a href="login.php">Login</a>


            </div>

            <br>

            <form action="connect_register.php" method="post">

                <div class="card" style="width: 18rem;margin-left:auto;margin-right:auto;">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">A</span>
                            <input type="text" class="form-control" name="username" placeholder="Username"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" name="email" placeholder="Gmail" aria-label="Gmail"
                                aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">#</span>
                            <input type="text" class="form-control" name="password" placeholder="Password"
                                aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <br>
                        <br>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-dark" type="submit" name="daftar">Daftar</button>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col social-buttons">

                        <a class="btn btn-social text-gray btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                        <a class="btn btn-social text-gray btn-google-plus"><i class="fa fa-google-plus"></i> Google</a>
                        <a class="btn btn-social text-gray btn-instagram"><i class="fa fa-instagram"></i> Instagram</a>
                        <a class="btn btn-social text-gray btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                </div>


            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
</body>

</html>