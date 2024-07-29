<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark n1 fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="images/logo-2024.png" width="250" height="30" alt="website logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d1" id="navbarNav">
            <ul class="navbar-nav a3 m-auto mb-2 mb-lg-0">
              <li class="nav-item a1" style="font-size: 1.2rem; padding-left:3rem;">
                <a class="nav-link a2" aria-current="page" href="index.php">Home</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1" style="font-size: 1.2rem; padding-left:3rem;">
                <a class="nav-link a2" href="index1.php">Services</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1" style="font-size: 1.2rem; padding-left:3rem;">
                <a class="nav-link a2" href="index2.php">Tours</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item dropdown a1" style="font-size: 1.2rem; padding-left:3rem;">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reservations</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db" style="margin-left:5px;text-align:center;">
                  <li><a class="dropdown-item di" href="index3.php">Visit to tourist places</a></li>
                  <li><a class="dropdown-item di" href="index45.php#Room">Hotel reservation</a></li>
                  <li><a class="dropdown-item di" href="index45.php#Order">Restaurant reservations</a></li>
                  <li><a class="dropdown-item di" href="index66.php#Room">Renting meeting rooms</a></li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown a1" style="font-size: 1.2rem; padding-left:3rem;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Language</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db">
                  <li><a class="dropdown-item di" href="index.php">English</a></li>
                  <li><a class="dropdown-item di" href="index5.php">Duetch</a></li>
                  <li><a class="dropdown-item di" href="index9.php">french</a></li>
                  <li><a class="dropdown-item di" href="index13.php">Russian</a></li>
                  <li><a class="dropdown-item di" href="index17.php">Espaniol</a></li>
                  <li><a class="dropdown-item di" href="index21.php">Italian</a></li>
                  <li><a class="dropdown-item di" href="index25.php">Arabic</a></li>
                  <li><a class="dropdown-item di" href="index73.php">Hindi</a></li>
                  <li><a class="dropdown-item di" href="index83.php">Chinese</a></li>
                  <li><a class="dropdown-item di" href="index93.php">Japanese</a></li>
                  <li><a class="dropdown-item di" href="index102.php">Korean</a></li>
                  <li><a class="dropdown-item di" href="index111.php">Portugal</a></li>
                  <li><a class="dropdown-item di" href="index123.php">Quechua</a></li>
                  <li><a class="dropdown-item di" href="index133.php">Turkish</a></li>
                  <li><a class="dropdown-item di" href="index143.php">Greek</a></li>
                </ul>
              </li>
      
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btnsearch" type="submit">Search</button>
            </form>
        
          </div>
        </div>
      </nav>
    <!-- //end navbar -->
    <div class="heading3">
      <h1>Contact Us</h1>
     </div>
     <section class="contact">
       <h1 class="heading-title">contact your trip!</h1>
       <form action="index4.php" method="post" class="contact-form">
        <div class="flex">
          <div class="inputBox" style="width:48%">
            <span>Name : </span>
            <input type="text" size="30" placeholder="Enter Your Name Here:" name="name" required>
          </div>
          <div class="inputBox" style="width:48%">
            <span>Email : </span>
            <input type="email" size="30" placeholder="Enter Your Email Here:" name="email" required>
          </div>
        
          <div class="inputBox" style="width:48%">
            <span>Phone : </span>
            <input type="number" size="30" placeholder="Enter Your Phone Here:" name="phone" required>
          </div>
          <div class="inputBox" style="width:48%">
            <span>Address : </span>
            <input type="text" size="28" placeholder="Enter Your Address Here:" name="address" required>
          </div>
          <div class="inputBox" style="width:48%">
            <span>Where To : </span>
            <input type="text" size="27" placeholder="Place You Want To Visit: " name="location" required>
          </div>
          <div class="inputBox" style="width:48%">
            <span>How Many : </span>
            <input type="number" size="26" placeholder="Number Of Guests" name="guests" required>
          </div>
          <div class="inputBox" style="width:48%">
            <span >Arrivals : </span>
            <input type="datetime-local"  name="arrivals" required>
          </div>
          <div class="inputBox" style="width:48%">
            <span>Leaving : </span>
            <input type="datetime-local" name="leaving" required>
          </div>
        </div>
        <input type="submit" value="Contact Now"  class="btn b111" name="send">
       </form>
     </section>








    <section class="footer">
<div class="footer-overlay">
  <div class="box-container">
    
    <div class="box">
      <h3>Menu</h3>
      <a href="index.php"><i class="fa fa-angle-right"></i> Home</a>
      <a href="index1.php"><i class="fa fa-angle-right"></i> Services</a>
      <a href="index2.php"><i class="fa fa-angle-right"></i> Tours</a>
      <a href="index3.php"><i class="fa fa-angle-right"></i> Reservations</a>
    </div>
    <div class="box">
    <h3>Questions?</h3>
      <a href="#"><i class="fa fa-angle-right"></i> Ask Questions</a>
      <a href="#"><i class="fa fa-angle-right"></i> About Us</a>
      <a href="#"><i class="fa fa-angle-right"></i> Privacy Policy</a>
      <a href="#"><i class="fa fa-angle-right"></i> Terms Of Use</a>
    </div>
    <div class="box">
    <h3>Contact Info</h3>
      <a href="#"><i class="fa fa-phone"></i> +963-985-517031</a>
      <a href="#"><i class="fa fa-phone"></i> +963-998-353175</a>
      <a href="#"><i class="fa fa-envelope"></i> aousyounes78@gmail.com</a>
      <a href="#"><i class="fa fa-map"></i> AL-Ghadeer, Tartous, Syria</a>
    </div>
    <div class="box">
      <h3>Follow Us</h3>
      <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
      <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
      <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
    </div>
    </div>
    <div class="credit">created by <span>Eng-Aous Mohammad Younes</span> @2024 | all rights reserved! </div>
  </div>
</section>
<!-- //FOOTER -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="//code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>