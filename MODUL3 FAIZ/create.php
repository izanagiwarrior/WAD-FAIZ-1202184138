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

     <div class="container mt-3">
          <h3 class="text-info py-2">Buat Event</h3>
          <form action="createEvent.php" method="post" enctype="multipart/form-data">
               <div class="row">
                    <div class="col px-3">
                         <div class="card pb-5">
                              <div class="card-header bg-danger"></div>
                              <div class="card-body">
                                   <div class="form-group">
                                        <label><b>Name</b></label>
                                        <input type="text" class="form-control" placeholder="Masukkan Nama" name="name">
                                   </div>
                                   <div class="form-group my-2">
                                        <label><b>Deskripsi</b></label>
                                        <textarea class="form-control" rows="3" cols="30" name="deskripsi"></textarea>
                                   </div>
                                   <label><b>Upload Gambar</b></label>
                                   <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar">
                                        <label class="custom-file-label">Pilih File</label>
                                   </div>

                                   <div class="form-group mb-1">
                                        <label><b>Kategori</b></label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kategori" value="Online">
                                        <label class="form-check-label"><b>Online</b></label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kategori" id="inlineRadio2" value="Offline">
                                        <label class="form-check-label" for="inlineRadio2"><b>Offline</b></label>
                                   </div>



                              </div>
                         </div>
                    </div>
                    <div class="col px-3">
                         <div class="card">
                              <div class="card-header bg-primary"></div>
                              <div class="card-body">
                                   <div class="form-group mb-2">
                                        <label><b>Tanggal</b></label>
                                        <input type="date" class="form-control" name="tanggal">
                                   </div>
                                   <div class="form-row">

                                        <div class="form-group col-md-6 my-1">
                                             <label><b>Jam Mulai</b></label>
                                             <select class="form-control" name="mulai">
                                                  <option>00:00</option>
                                                  <option>01:00</option>
                                                  <option>02:00</option>
                                                  <option>03:00</option>
                                                  <option>04:00</option>
                                                  <option>05:00</option>
                                                  <option>06:00</option>
                                                  <option>07:00</option>
                                                  <option>08:00</option>
                                                  <option>09:00</option>
                                                  <option>11:00</option>
                                                  <option>12:00</option>
                                                  <option>13:00</option>
                                                  <option>14:00</option>
                                                  <option>15:00</option>
                                                  <option>16:00</option>
                                                  <option>17:00</option>
                                                  <option>18:00</option>
                                                  <option>19:00</option>
                                                  <option>20:00</option>
                                                  <option>21:00</option>
                                                  <option>22:00</option>
                                                  <option>23:00</option>
                                                  <option>24:00</option>
                                             </select>
                                        </div>

                                        <div class="form-group col-md-6 my-1">
                                             <label><b>Jam Berakhir</b></label>
                                             <select class="form-control" name="berakhir">
                                                  <option>00:00</option>
                                                  <option>01:00</option>
                                                  <option>02:00</option>
                                                  <option>03:00</option>
                                                  <option>04:00</option>
                                                  <option>05:00</option>
                                                  <option>06:00</option>
                                                  <option>07:00</option>
                                                  <option>08:00</option>
                                                  <option>09:00</option>
                                                  <option>11:00</option>
                                                  <option>12:00</option>
                                                  <option>13:00</option>
                                                  <option>14:00</option>
                                                  <option>15:00</option>
                                                  <option>16:00</option>
                                                  <option>17:00</option>
                                                  <option>18:00</option>
                                                  <option>19:00</option>
                                                  <option>20:00</option>
                                                  <option>21:00</option>
                                                  <option>22:00</option>
                                                  <option>23:00</option>
                                                  <option>24:00</option>
                                             </select>
                                        </div>
                                   </div>

                                   <div class="form-group my-1">
                                        <label><b>Tempat</b></label>
                                        <input type="text" class="form-control" placeholder="Masukkan Tempat" name="tempat">
                                   </div>
                                   <div class="form-group my-1">
                                        <label><b>Harga</b></label>
                                        <input type="text" class="form-control" placeholder="Masukkan Harga" name="harga">
                                   </div>

                                   <div class="form-group my-1">
                                        <label><b>Benefit</b></label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="benefit[]" value="Snacks">
                                        <label class="form-check-label"><b>Snacks</b></label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="benefit[]" value="Sertifikat">
                                        <label class="form-check-label"><b>Sertifikat</b></label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="benefit[]" id="inlineRadio2" value="Souvenir">
                                        <label class="form-check-label"><b>Souvenir</b></label>
                                   </div>

                                   <div class="form-group d-flex justify-content-end my-1">
                                        <button type="submit" class="btn btn-primary mx-3">Submit</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                   </div>


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