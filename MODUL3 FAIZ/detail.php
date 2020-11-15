<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <title>Detail</title>
     <style>
          .modal-content .modal-body .card {
               height: 50vh;
          }
     </style>
</head>

<body>
     <?php
     include 'connect.php';
     $id = $_GET['id'];
     $query = "SELECT * FROM event_table WHERE id = '$id'";

     $detail = mysqli_query($connect, $query);
     ?>
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

     <div class="container p-3" style="width:50rem">
          <h3 class="text-center text-info">Detail Event!</h3>
          <br><br>
          <div class="card shadow">
               <?php foreach ($detail as $data) { ?>
                    <img src="asset/<?php echo $data['gambar'] ?>" alt="gambar" class="card-img-top">
                    <div class="card-body">
                         <h4 class="card-title"><?= $data['name'] ?></h4>
                         <br>
                         <b>Deskripsi</b>
                         <p class="card-text"><?= $data['deskripsi'] ?></p>
                         <div class="row">
                              <div class="col">
                                   <b>Informasi Event</b>
                                   <p class="card-text"><img src="https://as1.ftcdn.net/jpg/01/44/85/80/500_F_144858067_WIv2QXeEFDPXhIigh6nqMDLDAUBiTynq.jpg" width="20px" alt="">&nbsp;<?= $data['tanggal'] ?></p>
                                   <p class="card-text"><img src="https://as2.ftcdn.net/jpg/02/80/61/35/500_F_280613543_BqOIU5ziqbrFwiiMAGDc9Z2Fei6j7Ut9.jpg" width="20px" alt="">&nbsp;<?= $data['tempat'] ?></p>
                                   <p class="card-text"><img src="https://www.flaticon.com/svg/static/icons/svg/2972/2972531.svg" width="20px" alt="">&nbsp;<?= $data['mulai'] ?>-<?= $data['berakhir'] ?></p>

                                   <p class="card-text">
                                        <b>Kategori:</b>&nbsp;&nbsp;
                                        <?= $data['kategori'] ?>
                                   </p>
                                   <p class="card-text">
                                        <b>HTM Rp. <?= $data['harga'] ?></b>
                                   </p>
                              </div>
                              <div class="col">
                                   <b>Benefit</b>
                                   <ul>
                                        <li>
                                             <p class="card-text"><?= $data['benefit'] ?></p>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="card-footer text-center">
                         <!-- modal untuk edit data -->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width:8rem;">Edit</button>
                         <!-- Modal -->
                         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl" role="document">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Edit Content Event</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                             </button>
                                        </div>
                                        <div class="modal-body">
                                             <form action="detailEvent.php" method="post" enctype="multipart/form-data">
                                                  <div class="row">
                                                       <div class="col px-3">
                                                            <div class="card pb-5">
                                                                 <div class="card-header bg-danger"></div>
                                                                 <div class="card-body">

                                                                      <div class="form-group text-left">
                                                                           <label>Name</label>
                                                                           <input type="text" class="form-control" value="<?= $data['name'] ?>" name="name">
                                                                      </div>
                                                                      <div class="form-group my-2 text-left">
                                                                           <label>Deskripsi</label>
                                                                           <textarea class="form-control" rows="3" cols="30" name="deskripsi"><?= $data['deskripsi'] ?></textarea>
                                                                      </div>
                                                                      <br>
                                                                      <div class="text-left">
                                                                           <label>Upload Gambar</label>
                                                                      </div>
                                                                      <div class="custom-file">
                                                                           <input type="file" class="custom-file-input" name="gambar">
                                                                           <label class="custom-file-label"></label>
                                                                      </div>
                                                                      <br><br>
                                                                      <div class="form-group mb-1 text-left">
                                                                           <label>Kategori</label>
                                                                      </div>
                                                                      <div class="text-left">
                                                                           <div class="form-check form-check-inline text-left">
                                                                                <input class="form-check-input" type="radio" name="kategori" value="Online" <?php echo ($data['kategori'] == 'Online' ? 'checked' : ''); ?>>
                                                                                <label class="form-check-label">Online</label>
                                                                           </div>
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;
                                                                           <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="kategori" id="inlineRadio2" value="Offline" <?php echo ($data['kategori'] == 'offline' ? 'checked' : ''); ?>>
                                                                                <label class="form-check-label" for="inlineRadio2">Offline</label>
                                                                           </div>
                                                                      </div>



                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col px-3">
                                                            <div class="card">
                                                                 <div class="card-header bg-primary"></div>
                                                                 <div class="card-body">
                                                                      <div class="form-group mb-2 text-left">
                                                                           <label>Tanggal</label>
                                                                           <input type="date" class="form-control" name="tanggal" value="<?= $data['tanggal'] ?>">
                                                                      </div>
                                                                      <div class="form-row">

                                                                           <div class="form-group col-md-6 my-1 text-left">
                                                                                <label>Jam Mulai</label>
                                                                                <select class="form-control" name="mulai">
                                                                                     <option <?= $data['mulai'] == '00:00:00' ? 'selected="selected"' : ""; ?>>00:00</option>
                                                                                     <option <?= $data['mulai'] == '01:00:00' ? 'selected="selected"' : ""; ?>>01:00</option>
                                                                                     <option <?= $data['mulai'] == '02:00:00' ? 'selected="selected"' : ""; ?>>02:00</option>
                                                                                     <option <?= $data['mulai'] == '03:00:00' ? 'selected="selected"' : ""; ?>>03:00</option>
                                                                                     <option <?= $data['mulai'] == '04:00:00' ? 'selected="selected"' : ""; ?>>04:00</option>
                                                                                     <option <?= $data['mulai'] == '05:00:00' ? 'selected="selected"' : ""; ?>>05:00</option>
                                                                                     <option <?= $data['mulai'] == '06:00:00' ? 'selected="selected"' : ""; ?>>06:00</option>
                                                                                     <option <?= $data['mulai'] == '07:00:00' ? 'selected="selected"' : ""; ?>>07:00</option>
                                                                                     <option <?= $data['mulai'] == '08:00:00' ? 'selected="selected"' : ""; ?>>08:00</option>
                                                                                     <option <?= $data['mulai'] == '09:00:00' ? 'selected="selected"' : ""; ?>>09:00</option>
                                                                                     <option <?= $data['mulai'] == '10:00:00' ? 'selected="selected"' : ""; ?>>10:00</option>
                                                                                     <option <?= $data['mulai'] == '11:00:00' ? 'selected="selected"' : ""; ?>>11:00</option>
                                                                                     <option <?= $data['mulai'] == '12:00:00' ? 'selected="selected"' : ""; ?>>12:00</option>
                                                                                     <option <?= $data['mulai'] == '13:00:00' ? 'selected="selected"' : ""; ?>>13:00</option>
                                                                                     <option <?= $data['mulai'] == '14:00:00' ? 'selected="selected"' : ""; ?>>14:00</option>
                                                                                     <option <?= $data['mulai'] == '15:00:00' ? 'selected="selected"' : ""; ?>>15:00</option>
                                                                                     <option <?= $data['mulai'] == '16:00:00' ? 'selected="selected"' : ""; ?>>16:00</option>
                                                                                     <option <?= $data['mulai'] == '17:00:00' ? 'selected="selected"' : ""; ?>>17:00</option>
                                                                                     <option <?= $data['mulai'] == '18:00:00' ? 'selected="selected"' : ""; ?>>18:00</option>
                                                                                     <option <?= $data['mulai'] == '19:00:00' ? 'selected="selected"' : ""; ?>>19:00</option>
                                                                                     <option <?= $data['mulai'] == '20:00:00' ? 'selected="selected"' : ""; ?>>20:00</option>
                                                                                     <option <?= $data['mulai'] == '21:00:00' ? 'selected="selected"' : ""; ?>>21:00</option>
                                                                                     <option <?= $data['mulai'] == '22:00:00' ? 'selected="selected"' : ""; ?>>22:00</option>
                                                                                     <option <?= $data['mulai'] == '23:00:00' ? 'selected="selected"' : ""; ?>>23:00</option>
                                                                                     <option <?= $data['mulai'] == '24:00:00' ? 'selected="selected"' : ""; ?>>24:00</option>
                                                                                </select>
                                                                           </div>

                                                                           <div class="form-group col-md-6 my-1 text-left">
                                                                                <label>Jam Berakhir</label>
                                                                                <select class="form-control" name="berakhir">
                                                                                     <option <?= $data['berakhir'] == '00:00:00' ? 'selected="selected"' : ""; ?>>00:00</option>
                                                                                     <option <?= $data['berakhir'] == '01:00:00' ? 'selected="selected"' : ""; ?>>01:00</option>
                                                                                     <option <?= $data['berakhir'] == '02:00:00' ? 'selected="selected"' : ""; ?>>02:00</option>
                                                                                     <option <?= $data['berakhir'] == '03:00:00' ? 'selected="selected"' : ""; ?>>03:00</option>
                                                                                     <option <?= $data['berakhir'] == '04:00:00' ? 'selected="selected"' : ""; ?>>04:00</option>
                                                                                     <option <?= $data['berakhir'] == '05:00:00' ? 'selected="selected"' : ""; ?>>05:00</option>
                                                                                     <option <?= $data['berakhir'] == '06:00:00' ? 'selected="selected"' : ""; ?>>06:00</option>
                                                                                     <option <?= $data['berakhir'] == '07:00:00' ? 'selected="selected"' : ""; ?>>07:00</option>
                                                                                     <option <?= $data['berakhir'] == '08:00:00' ? 'selected="selected"' : ""; ?>>08:00</option>
                                                                                     <option <?= $data['berakhir'] == '09:00:00' ? 'selected="selected"' : ""; ?>>09:00</option>
                                                                                     <option <?= $data['berakhir'] == '10:00:00' ? 'selected="selected"' : ""; ?>>10:00</option>
                                                                                     <option <?= $data['berakhir'] == '11:00:00' ? 'selected="selected"' : ""; ?>>11:00</option>
                                                                                     <option <?= $data['berakhir'] == '12:00:00' ? 'selected="selected"' : ""; ?>>12:00</option>
                                                                                     <option <?= $data['berakhir'] == '13:00:00' ? 'selected="selected"' : ""; ?>>13:00</option>
                                                                                     <option <?= $data['berakhir'] == '14:00:00' ? 'selected="selected"' : ""; ?>>14:00</option>
                                                                                     <option <?= $data['berakhir'] == '15:00:00' ? 'selected="selected"' : ""; ?>>15:00</option>
                                                                                     <option <?= $data['berakhir'] == '16:00:00' ? 'selected="selected"' : ""; ?>>16:00</option>
                                                                                     <option <?= $data['berakhir'] == '17:00:00' ? 'selected="selected"' : ""; ?>>17:00</option>
                                                                                     <option <?= $data['berakhir'] == '18:00:00' ? 'selected="selected"' : ""; ?>>18:00</option>
                                                                                     <option <?= $data['berakhir'] == '19:00:00' ? 'selected="selected"' : ""; ?>>19:00</option>
                                                                                     <option <?= $data['berakhir'] == '20:00:00' ? 'selected="selected"' : ""; ?>>20:00</option>
                                                                                     <option <?= $data['berakhir'] == '21:00:00' ? 'selected="selected"' : ""; ?>>21:00</option>
                                                                                     <option <?= $data['berakhir'] == '22:00:00' ? 'selected="selected"' : ""; ?>>22:00</option>
                                                                                     <option <?= $data['berakhir'] == '23:00:00' ? 'selected="selected"' : ""; ?>>23:00</option>
                                                                                     <option <?= $data['berakhir'] == '24:00:00' ? 'selected="selected"' : ""; ?>>24:00</option>
                                                                                </select>
                                                                           </div>
                                                                      </div>

                                                                      <div class="form-group my-1 text-left">
                                                                           <label>Tempat</label>
                                                                           <input type="text" class="form-control" placeholder="name" name="tempat" value="<?= $data['tempat'] ?>">
                                                                      </div>
                                                                      <div class="form-group my-1 text-left">
                                                                           <label>Harga</label>
                                                                           <input type="text" class="form-control" placeholder="name" name="harga" value="<?= $data['harga'] ?>">
                                                                      </div>
                                                                      <br>
                                                                      <div class="form-group my-1 text-left">
                                                                           <label>Benefit</label>
                                                                      </div>
                                                                      <?php
                                                                      $benefit = explode(',', $data['benefit']);
                                                                      ?>

                                                                      <div class="text-left">
                                                                           <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="checkbox" name="benefit[]" value="Snacks" <?php echo in_array('Ssnacks', $benefit) ? 'checked' : '' ?>>
                                                                                <label class="form-check-label">Snacks</label>
                                                                           </div>
                                                                           <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="checkbox" name="benefit[]" value="Sertifikat" <?php echo in_array('Sertifikat', $benefit) ? 'checked' : '' ?>>
                                                                                <label class="form-check-label">Sertifikat</label>
                                                                           </div>
                                                                           <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="checkbox" name="benefit[]" id="inlineRadio2" value="Souvenir" <?php echo in_array('Souvenir', $benefit) ? 'checked' : '' ?>>
                                                                                <label class="form-check-label">Souvenir</label>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                        </div>
                                        <div class="modal-footer">
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                   </div>
                              </div>
                         </div>
                         <a href="deleteEvent.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" style="width:8rem;">Delete</a>
                    </div>
          </div>
     </div>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
</body>

</html>