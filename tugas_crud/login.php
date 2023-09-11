<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- Font Awesome 4-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
    .background {
        background-image: url(https://st2.depositphotos.com/38892002/45708/v/600/depositphotos_457083200-stock-illustration-black-yellow-background-banner-template.jpg);
        background-size: cover;
    }

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
    <div class="background ">

        <div class="header">
            <h1>Login</h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3OY4Ehnv61GiOiBy2annGYJfCafWJ_BbiTA&usqp=CAU" alt="" width="100px">
            <br><br>

            <div class="topnav bg-dark">
                <a class="btn btn-dark" href="registrasi.php">HOME</a>
                <a class="btn btn-dark" href="registrasi.php">Registrasi</a>


            </div>
            <br>
            <br>
            <br>
            <form action="proses_login.php" method="post">

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" name="email" placeholder="Gmail" aria-label="Gmail" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 ">
                    <span class="input-group-text" id="basic-addon2"> #</span>
                    <input type="password" class="form-control" name="pass" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
                </div>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-dark" type="submit">Login</button>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col social-buttons">


                            <a class="btn btn-social text-gray btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                            <a class="btn btn-social text-gray btn-google-plus"><i class="fa fa-google-plus"></i>
                                Google</a>
                            <a class="btn btn-social text-gray btn-instagram"><i class="fa fa-instagram"></i>
                                Instagram</a>
                            <a class="btn btn-social text-gray btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                        </div>
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
        <br>
        <br>
        <br>
        <br>
</body>

</html>