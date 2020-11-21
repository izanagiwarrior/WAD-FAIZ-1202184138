<?php
     // include 'connect.php';

     // $nama = $_POST['nama'];
     // $email = $_POST['email'];
     // $phone = $_POST['phone'];
     // $pass = $_POST['pass'];
     // $kpass = $_POST['k-pass'];

     // $postEvent = mysqli_query($connect, "INSERT INTO user VALUES ('', '$nama', '$email', '$phone')");
     // header("location:Register.php");

    include_once('connect.php');
    $database = new database();
    if (isset($_POST['email'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        if ($database->register($nama,$email,$phone,$pass)) {
            header('location:Register.php?alert=berhasil');
        }
    }
?>