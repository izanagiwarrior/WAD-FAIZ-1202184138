<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
     <title>Create</title>
     <style>
          .card {
               height: 65vh;
          }

          textarea {
               resize: none;
          }
     </style>
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

     <div class="container mt-3 d-flex justify-content-center">
          <form action="createEvent.php" method="post" enctype="multipart/form-data">
               <div class="row">
                    <div class="col">
                         <div class="card">
                              <div class="card-body">
                                   <h1 class="mt-4 text-center">Registrasi</h1><br>
                                   <div class="form-group mt-4">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required size="43px">
                                   </div>
                                   <div class="form-group">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required size="43px">
                                   </div>
                                   <div class="form-group">
                                        <label for="exampleInputEmail1">No. Handphone</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" required size="43px">
                                   </div>
                                   <div class="form-group">
                                        <label for="exampleInputPassword1">Kata Sandi</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required size="43px">
                                   </div>
                                   <div class="form-group">
                                        <label for="exampleInputPassword1">Konfirmasi Kata Sandi</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="k-pass" required size="43px">
                                   </div>
                                   <button type="submit" class="btn btn-primary">Daftar</button>
                                   <p>Sudah punya akun?<a href="#">Login</a></p>
                              </div>
                         </div>
                    </div>
               </div>
          </form>
     </div>

</body>
<script type="application/javascript">
     $('input[type="file"]').change(function(e) {
          var fileName = e.target.files[0].name;
          if (fileName.length > 50) {
               $('.custom-file-label').html(fileName.slice(0, 50) + ".........");
          } else {
               $('.custom-file-label').html(fileName);
          }
     });
</script>

</html>