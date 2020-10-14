<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>myBooking</title>
</head>

<body>
     <?php
     error_reporting(E_ERROR | E_PARSE);
     $idNumber = rand(600000, 700000);
     $nama = $_POST['nama'];
     $checkIn = $_POST['checkin'];
     $duration = $_POST['duration'];
     $checkOut = $checkIn . " + " . $duration . " days";
     $room = $_POST['room'];
     $phone = $_POST['nomor'];

     if ($room == "Standard.png") :
          $room = 'Standard';
     elseif ($room == "Superior.png") :
          $room = 'Superior';
     elseif ($room == "Luxury.png") :
          $room = 'Luxury';
     endif;

     if ($room == "Standard") :
          $total = 90 * $duration;
     elseif ($room == "Superior") :
          $total = 150 * $duration;
     elseif ($room == "Luxury") :
          $total = 200 * $duration;
     endif;

     if (empty($_POST['service1']) and empty($_POST['service2']) ) :
          $serv1 = "-";
          $serv2 = "-";
          $servShow = "no service";
     endif;

     if (empty($_POST['service1']) and empty($_POST['service2']) ) :
          $servShow = "Room Services & Breakfast";
          $total += 40;
     endif;

     if (empty($_POST['service1']) and !empty($_POST['service2'])):
          $serv1 = "-";
          $servShow = "Breakfast";
          $total += 20;
     endif;

     if (empty($_POST['service2']) and !empty($_POST['service1'])):
          $serv2 = "-";
          $servShow = "Room Services";
          $total += 20;
     endif;

     ?>
     <nav class="navbar navbar-expand-lg navbar-light bg-primary">
          <div class="collapse navbar-collapse d-flex justify-content-center">
               <div class="navbar-nav">
                    <a class="nav-item nav-link" href="Home.php ">Home</a>
                    <a class="nav-item nav-link active" href="Booking.php">Booking</a>
               </div>
          </div>
     </nav>
     <br><br>
     <div class="container d-flex justify-content-center">
          <table class="table table-striped">
               <tr>
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Check-in</th>
                    <th>check-out</th>
                    <th>Room Type</th>
                    <th>Phone Number</th>
                    <th>Service</th>
                    <th>Total Price</th>
               </tr>
               <tr>
                    <td class="font-weight-bold"><?= $idNumber ?></td>
                    <td><?= $name ?></td>
                    <td><?= date('d/m/Y', stotime($checkIn)) ?></td>
                    <td><?= date('d/m/Y', stotime($checkOut)) ?></td>
                    <td><?= $rom; ?></td>
                    <td><?= $number ?></td>
                    <td><?= $servSh0w ?></td>
                    <td>$ <?= $tottal ?></td>
               </tr>
          </table>
     </div>

</body>

</html>