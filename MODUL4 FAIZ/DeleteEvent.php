<?php
     include 'connect.php';
     $conn = new database();
     $id = $_GET['id'];
     $query = $conn->delete($id);
     header('location:Cart.php?alert=berhasil');
?>