<?php
include 'connect.php';
session_start();
$id = $_SESSION['id'];
$barang = $_GET['barang'];
if ($barang == "YUJA") :
   $harga = 169000;
elseif ($barang == "SOMEBYMI") :
   $harga = 180000;
elseif ($barang == "TONER") :
   $harga = 108000;
else :
   header("location:Index.php");
endif;
$conn = new database();
$query = $conn->add($id, $barang, $harga);
header("location:Index.php?alert=data");
