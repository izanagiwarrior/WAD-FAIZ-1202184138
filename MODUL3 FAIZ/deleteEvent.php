<?php
     $id = $_GET['id'];

     $query = "DELETE FROM event_table WHERE id='$id'";

     $deleteQuery = mysqli_query($connect);

     header('location:home.php');
?>