<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <script src="https://use.fontawesome.com/079fb6c4f6.js"></script>
     <title>Home</title>
</head>

<body>
     <div class="navbar navbar-expand navbar-light bg-info d-flex justify-content-between">
          <div>
               <a class="navbar-brand text-light" href="home.php">EAD EVENTS</a>
          </div>


          <div class="navbar">
               <ul class="navbar-nav">
                    <li class="nav-item">
                         <a class="nav-link text-light" href="home.php">Home</a>
                    </li>
               </ul>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <a class="btn btn-outline-light" href="create.php">Buat Event</a>
          </div>
     </div>
     <div class="container mt-3 p-3">
          <h3 class="text-info text-center mb-5">WELCOME TO EAD EVENTS!</h3>
          <div class="row d-flex flex-row">
               <?php
          include "connect.php";
          $row = mysqli_num_rows($query);
          if($row == 0){
               echo 'No Events Found';
          }
          else{
          while($data = mysqli_fetch_array($query)){
               ?>

               <div class="card mx-1" style="width:18rem;">
                    <img src="asset/<?php echo $data['gambar']?>" alt="gambar" class="card-img-top">
                    <div class="card-body">
                         <h4 class="card-title"><?= $data['name']?></h4>
                         <i class="far fa-calendar-alt"></i>
                         <p class="card-text"><img src="https://as1.ftcdn.net/jpg/01/44/85/80/500_F_144858067_WIv2QXeEFDPXhIigh6nqMDLDAUBiTynq.jpg" width="20px" alt="">&nbsp;<?= $data['tanggal']?></p>
                         <p class="card-text"><img src="https://as2.ftcdn.net/jpg/02/80/61/35/500_F_280613543_BqOIU5ziqbrFwiiMAGDc9Z2Fei6j7Ut9.jpg" width="20px" alt="">&nbsp;<?= $data['tempat']?></p>
                         <p class="card-text">Kategori : Event <?= $data['kategori']?></p>
                    </div>
                    <div class="card-footer d-flex justify-content-end bg-light">
                         <a class="btn btn-primary" href="detail.php?id=<?=$data['id']?>">Detail</a>
                    </div>
               </div>
               <?php }?>
               <?php }?>
          </div>
     </div>


</body>

</html>