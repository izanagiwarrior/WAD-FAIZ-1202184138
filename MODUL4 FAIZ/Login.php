<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php
    session_start();
    include_once('connect.php');
    $database = new database();

    if (isset($_SESSION['is_login'])) {
        header('location:Index.php');
    }

    if (isset($_COOKIE['email'])) {
        $database->relogin($_COOKIE['email']);
        header('location:Index.php');
    }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if (isset($_POST['remember'])) {
            $remember = TRUE;
        } else {
            $remember = FALSE;
        }

        if ($database->login($email, $pass, $remember)) {
            header('location:Index.php?alert=berhasil');
        }
    }
    ?>

    <title>Login</title>
</head>

<body style="background-color: rgb(213, 245, 241);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">WAD Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">Login<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="Register.php">Register</a>
            </div>
        </div>
    </nav>
    <?php
    if (isset($_GET['alert'])) {
    ?>
        <div class="alert alert-warning" role="alert"> Berhasil Logout! </div>

    <?php } ?>
    <div class="container mt-3 d-flex justify-content-center">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="mt-4 text-center">Login</h1><br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required size="43px">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kata Sandi</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required size="43px">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="login">Login</button>
                                <p>belum punya akun?<a href="Register.php">Registrasi</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>