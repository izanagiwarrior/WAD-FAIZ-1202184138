<?php
include 'connect.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$background_color = $_POST['background_color'];
setcookie("nav", $background_color, $background_color); 
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$conn = new database();
$query = $conn->editProfile($nama, $email, $phone, $pass);
header('location:Profile.php?alert=berhasil');
