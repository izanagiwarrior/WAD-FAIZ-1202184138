<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php
    session_start();
    if (!isset($_SESSION['is_login'])) {
        header('location:Login.php');
    }

    include 'connect.php';
    $conn = new database();
    $id = $_SESSION['id'];
    $detail = $conn->showProfile($id);
    ?>
    <style>
        .navbar-custom {
            background-color: <?php echo $_COOKIE["nav"]?>
        }
    </style>
    <title>Profile</title>
</head>

<body style="background-color: rgb(213, 245, 241);">
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <a class="navbar-brand" href="Index.php">WAD Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="Cart.php"><img src="data:image/png;base64,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" width="30px" alt=""></a>
                &nbsp;&nbsp&nbsp<p>Selamat Datang,&nbsp<a class="text-primary"><?php echo $_SESSION['nama']; ?></a>&nbsp&nbsp&nbsp
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a href="Profile.php" class="dropdown-item" type="button">Profile</a>
                            <a href="Logout.php" class="dropdown-item" type="button">Logout</a>
                        </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    </div>
                </p>
            </div>
        </div>
    </nav>
    <?php
    if (isset($_GET['alert'])) {
    ?>
        <div class="alert alert-warning" role="alert"> Berhasil di update! </div>

    <?php } ?>
    <div class="container mt-3 justify-content-center">
        <form action="EditEvent.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="mt-4 text-center">Profile</h1><br>
                            <?php foreach ($detail as $data) { ?>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">E-mail</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $data['email'] ?>" name="email" required size="43px">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required size="43px" value="<?= $data['nama'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">No. Handphone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" required size="43px" value="<?= $data['no_hp'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required size="43px">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Password Confirm</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="k-pass" required size="43px">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Warna Navbar</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="background_color" >
                                            <option value="#FFFFFF"<?= $_COOKIE["nav"] == '#FFFFFF' ? 'selected="selected"' : ""; ?>>Light</option>
                                            <option value='#000000'<?= $_COOKIE["nav"] == '#000000' ? 'selected="selected"' : ""; ?>>Dark</option>
                                            <option value='#FFCD00'<?= $_COOKIE["nav"] == '#FFCD00' ? 'selected="selected"' : ""; ?>>Gold</option>
                                            <option value='#0023FF'<?= $_COOKIE["nav"] == '#0023FF' ? 'selected="selected"' : ""; ?>>Blue</option>
                                            <option value='#00FF04'<?= $_COOKIE["nav"] == '#00FF04' ? 'selected="selected"' : ""; ?>>Green</option>
                                            <option value='#FF0000'<?= $_COOKIE["nav"] == '#FF0000' ? 'selected="selected"' : ""; ?>>Red</option>
                                            <option value='#00FFF0'<?= $_COOKIE["nav"] == '#00FFF0' ? 'selected="selected"' : ""; ?>>Cyan</option>
                                            <option value='#F7FF00'<?= $_COOKIE["nav"] == '#F7FF00' ? 'selected="selected"' : ""; ?>>Yellow</option>
                                            <option value='#FF00F7'<?= $_COOKIE["nav"] == '#FF00F7' ? 'selected="selected"' : ""; ?>>Pink</option>
                                            <option value='#C900FF'<?= $_COOKIE["nav"] == '#C900FF' ? 'selected="selected"' : ""; ?>>Purple</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Sumbit</button>
                                    <a href="#" class="btn light">Cancel</a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br><br>
        <p class="text-center">© 2020 Copyright: <a href="Index.php">WAD Beauty</a></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>