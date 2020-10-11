<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>Home</title>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-primary">
          <div class="collapse navbar-collapse d-flex justify-content-center">
               <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="Home.php">Home</a>
                    <a class="nav-item nav-link" href="Booking.php">Booking</a>
               </div>
          </div>
     </nav>

     <div class="title text-center">
          <h4 class="text-info ">EAD HOTEL</h4>
          <h5 class="text-info ">Welcome to 5 Star Hotel</h5>
     </div>

     <div class="container d-flex justify-content-center p-2 mt-5">

          <div class="card mx-5">
               <img class="card-img-top"
                    src="Standard.png">
               <div class="card-body">
                    <h4 class="card-title text-center">Standard <br><span class="text-info">$ 90/Day</span></h4>
                    <p class="card-text">
                         <table class="table text-center">
                              <tr>
                                   <td class = "bg-light">Facilities</td>
                              </tr>
                              <tr>
                                   <td>1 Single Bed</td>
                              </tr>
                              <tr>
                                   <td>1 Bathroom</td>
                              </tr>
                         </table>
                    </p>
               </div>
                    <div class="card-footer d-flex justify-content-center">
                         <a class="btn btn-primary" href="Booking.php?room=Standard">Book now</a>
                    </div>
          </div>

          <div class="card mx-5">
               <img class="card-img-top"
                    src="Superior.png">
               <div class="card-body">
                    <h4 class="card-title text-center">Superior<br><span class="text-info">$ 150/Day</span></h4>
                    <p class="card-text">
                         <table class="table text-center">
                              <tr>
                                   <td class = "bg-light">Facilities</td>
                              </tr>
                              <tr>
                                   <td>1 Double Bed</td>
                              </tr>
                              <tr>
                                   <td>1 Television and Wi-Fi</td>
                              </tr>
                              <tr>
                                   <td>1 Bathroom with hot water</td>
                              </tr>
                         </table>
                    </p>
               </div>
               <div class="card-footer d-flex justify-content-center">
                    <a class="btn btn-primary" href="Booking.php?room=Superior">Book now</a>
               </div>
          </div>

          <div class="card  mx-5">
               <img class="card-img-top"
                    src="Luxury.png">
               <div class="card-body">
                    <h4 class="card-title text-center">Luxury<br><span class="text-info">$ 200/Day</span></h4>
                    <p class="card-text">
                         <table class="table text-center">
                              <tr>
                                   <td class = "bg-light">Facilities</td>
                              </tr>
                              <tr>
                                   <td>2 Double Bed</td>
                              </tr>
                              <tr>
                                   <td>2 Bathroom with hot water</td>
                              </tr>
                              <tr>
                                   <td>1 Kitchen</td>
                              </tr>
                              <tr>
                                   <td>1 Television and Wi-Fi</td>
                              </tr>
                              <tr>
                                   <td>1 Workroom</td>
                              </tr>
                         </table>
                    </p>
               </div>
               <div class="card-footer d-flex justify-content-center">
                    <a class="btn btn-primary" href="Booking.php?room=Luxury">Book now</a>
               </div>
          </div>
     </div>

</body>

</html>