<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <title>Hotel Management Project -Rooms</title>
  <?php require('inc/links.php'); ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

  <style>
    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>

<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark "> </div>

  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid flex-lg-column align-items-stretch">
                 <h4 class="mt-2">FILTERS</a>
                    <button class="navbar-toggler sahdow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="border bg-light p-3 rounded mb-3">
                           <h5 class="mb-3" style="font-size: 18px;"> CHECK AVAILABILITY</h5>
                           <label class="form-label">Check-in</label>
                           <input type="date" class="form-control shadow-none mb-3">
                           <label class="form-label">Check-out</label>
                           <input type="date" class="form-control shadow-none">

                    </div>
                       <div class="border bg-light p-3 rounded mb-3">
                           <h5 class="mb-3" style="font-size: 18px;"> FACILITIES</h5>
                           <div class="mb-2">
                           <input type="checkbox" id="f1" class="form-check-input shadow-none me-1"> 
                           <label class="form-label" for="f1">Facility one</label>
                           </div>
                           <div class="mb-2">
                           <input type="checkbox" id="f2" class="form-check-input shadow-none me-1"> 
                           <label class="form-label" for="f2">Facility two</label>
                           </div>
                           <div class="mb-2">
                           <input type="checkbox" id="f3" class="form-check-input shadow-none me-1"> 
                           <label class="form-label" for="f3">Facility three</label>
                           </div>  
                       </div>
                       <div class="border bg-light p-3 rounded mb-3">
                           <h5 class="mb-3" style="font-size: 18px;"> GUESTS</h5>
                           <div class="d-flex">
                             <div class="me-3">
                               <label class="form-label" for="f2">Adults</label>
                               <input type="number" class="form-control shadow-none me-1"> 
                             </div>
                             <div class="me-3">
                               <label class="form-label" for="f2">Children</label>
                               <input type="number" class="form-control shadow-none me-1"> 
                             </div>
                           </div>
                       </div>       
                </div>
               </nav> -->
      </div>



      <div class="col-lg-9 col-md-12 px-4">


      <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-cneter">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">

              <img src="Images\rooms\singleroom_450x300.jpg" class="img-fluid rounded ">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <br><br>
              <h5 class="mb-3">Single Room</h5>
              <div class="features mb-3">
                <h6 class="mb-1"> Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathrooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofa
                </span>
                <br><br>

                <div class="facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Televisions
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                  
                  
                </div>
              </div>
            </div>

            <div class="col-md-2 text-center">
              <br><br><br>
              <h6 class="mb-4">Bedding:</h6>
              <h6 class="mb-4">Single  : 2200 BDT</h6>
              <h6 class="mb-4">Double  : 2400 BDT</h6>
              <h6 class="mb-4">Triple  : 2600 BDT</h6>
              <h6 class="mb-4">Quad    : 2800 BDT</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
             <!-- <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>-->
            </div>
          </div>
        </div>


        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-cneter">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">

              <img src="Images\rooms\bedroom1_450x300.jpg" class="img-fluid rounded ">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <br><br>
              <h5 class="mb-3"> Guest House</h5>
              <div class="features mb-3">
                <h6 class="mb-1"> Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathrooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofa
                </span>
                <br><br>

                <div class="facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Televisions
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                </div>
              </div>
            </div>


            <div class="col-md-2 text-center">
              <br><br><br>
              <h6 class="mb-4">Bedding:</h6>
              <h6 class="mb-4">Single  : 3300 BDT</h6>
              <h6 class="mb-4">Double  : 3600 BDT</h6>
              <h6 class="mb-4">Triple  : 3900 BDT</h6>
              <h6 class="mb-4">Quad    : 4200 BDT</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
             <!-- <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>-->
            </div>
          </div>
        </div>
        

        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-cneter">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">

              <img src="Images\rooms\bedroom6_450x300.jpg" class="img-fluid rounded ">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <br><br>
              <h5 class="mb-3"> Deluxe Room</h5>
              <div class="features mb-3">
                <h6 class="mb-1"> Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathrooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
                <br><br>

                <div class="facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Televisions
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Geyser
                  </span>
                </div>
              </div>
            </div>

            <div class="col-md-2 text-center">
              <br><br><br>
              <h6 class="mb-4">Bedding:</h6>
              <h6 class="mb-4">Single  : 4400 BDT</h6>
              <h6 class="mb-4">Double  : 4800 BDT</h6>
              <h6 class="mb-4">Triple  : 5200 BDT</h6>
              <h6 class="mb-4">Quad    : 5600 BDT</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
             <!-- <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>-->
            </div>
          </div>
        </div>

        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-cneter">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">

              <img src="Images\rooms\bedroom5_450x300.jpg" class="img-fluid rounded ">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <br><br>
              <h5 class="mb-3"> Superior Room</h5>
              <div class="features mb-3">
                <h6 class="mb-1"> Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Bathrooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
                <br><br>

                <div class="facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Televisions
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Geyser
                  </span>
                </div>
              </div>
            </div>


            <div class="col-md-2 text-center">
              <br><br><br>
              <h6 class="mb-4">Bedding:</h6>
              <h6 class="mb-4">Single  : 5500 BDT</h6>
              <h6 class="mb-4">Double  : 6000 BDT</h6>
              <h6 class="mb-4">Triple  : 6500 BDT</h6>
              <h6 class="mb-4">Quad    : 7000 BDT</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
             <!-- <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>-->
            </div>
          </div>
        </div>


        <a href="custRoom.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">Reserve Your Room</a>

      </div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>


</body>

</html>