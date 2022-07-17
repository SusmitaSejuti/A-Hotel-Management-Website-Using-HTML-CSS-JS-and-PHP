<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <title>Hotel Management Project-Home</title>
  <?php require('inc/links.php') ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="css2/common.css">
  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 0px;
        padding: 0 35px;
      }
    }
  </style>
</head>

<body class="bg-light">

  <!-- -----Header------ -->
  <?php require('inc/header.php') ?>


 <!-- ----------------Carousel & JS Swiper-------------------------- -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="Images\pic1600.1080\1checkin_checkout_1920x850.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="Images\pic1600.1080\2pool_1920x850.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="Images\pic1600.1080\3cafeview_1920x850.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="Images\pic1600.1080\4cafeview_day_1920x850.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="Images\pic1600.1080\5HOTEL_DINNING_1920x850.png" class="w-100 d-block">
        </div>
      </div>
    </div>
  </div>

  <!-- ----------------------Welcome Speech-------------------------- -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Welcome to HOTEL DS PALACE</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, optio ipsam assumenda saepe fuga labore, recusandae nobis necessitatibus corrupti quaerat, cum fugiat molestias! Ipsa, nesciunt! Illum consequatur esse atque mollitiaLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, optio ipsam assumenda saepe fuga labore, recusandae nobis necessitatibus corrupti quaerat, cum fugiat molestias! Ipsa, nesciunt! Illum consequatur esse atque mollitia.</p>
      
      </div>
    </div>
  </div> 

  <!-- ---------------------------Rooms------------------------------ -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Rooms</h2>
  <div class="container">
    <div class="row">

    

      <div class="col-lg-4 col-md-6 my-3">
        <!-- lg=largeDevice & md=mediumDevice-->
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="Images\rooms\bedroom1_450x300.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Superior Room</h5>
            <h6 class="mb-4">2000 BDT</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
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
            </div>

            <div class="facilities mb-4">
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

            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>

            <div class="display-flex justify-content-evenly mb-2">
              <a href="reservation.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
             <!-- <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <!-- lg=largeDevice & md=mediumDevice-->
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="Images\rooms\bedroom6_450x300.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Deluxe Room</h5>
            <h6 class="mb-4">3000 BDT</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
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
            </div>

            <div class="facilities mb-4">
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

            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>

            <div class="display-flex justify-content-evenly mb-2">
              <a href="reservation.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
             <!-- <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <!-- lg=largeDevice & md=mediumDevice-->
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="Images\rooms\bedroom5_450x300.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Guest House</h5>
            <h6 class="mb-4">5500 BDT </h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
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
            </div>

            <div class="facilities mb-4">
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

            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>

            <div class="display-flex justify-content-evenly mb-2">
              <a href="reservation.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <!--  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>-->
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fe-bold shadow-none"> More Rooms</a>
      </div>
    </div>
  </div>

  <!-- --------------------------Facilities------------------------------ -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Facilities</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src=" Images\facility\icon\wifi_100x100.jpg">
        <br><br>
        <h5 class="mt-3"> Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src="Images\facility\icon\heater_100x100.jpg">
        <br><br>
        <h5 class="mt-3"> Room Heater</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src="Images\facility\icon\geyser_100x100.jpg">
        <br><br>
        <h5 class="mt-3"> Geyser</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src="Images\facility\icon\tv_100x100.jpg">
        <br><br>
        <h5 class="mt-3"> Television</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src="Images\facility\icon\ac5_100x100.png">
        <br><br>
        <h5 class="mt-3"> AC</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fe-bold shadow-none"> More Facilities</a>

      </div>

    </div>
  </div>

  <!-- ---------Footer--------- -->
  <?php require('inc/footer.php') ?>

  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    function popup()
    {
      
    }
  </script>


</body>

</html>