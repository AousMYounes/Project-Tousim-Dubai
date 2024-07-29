<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
<section class="header">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark n1 fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index29.php"><img src="images/logo-2024.png" width="250" height="30" alt="website logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d1" id="navbarNav">
            <ul class="navbar-nav a3 m-auto mb-2 mb-lg-0">
              <li class="nav-item a1">
                <a class="nav-link a2" aria-current="page" href="index.php">Home</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1">
                <a class="nav-link a2" href="index1.php">Services</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1">
                <a class="nav-link a2" href="index2.php">Tours</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item dropdown a1">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reservations</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db" style="margin-left:5px;text-align:center;">
                  <li><a class="dropdown-item di" href="index30.php">Visit to tourist places</a></li>
                  <li><a class="dropdown-item di" href="index153.php">Hotel reservation</a></li>
                  <li><a class="dropdown-item di" href="index154.php">Restaurant reservations</a></li>
                  <li><a class="dropdown-item di" href="index155.php">Renting meeting rooms</a></li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown a1">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Language</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db">
                  <li><a class="dropdown-item di" href="index.php">English</a></li>
                  <li><a class="dropdown-item di" href="index5.php">Duetch</a></li>
                  <li><a class="dropdown-item di" href="index9.php">frensh</a></li>
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
              <!-- <div id="menu-btn" class="fa fa-bars"></div> -->
            </form>
        
          </div>
        </div>
        
      </nav>
      
</section>
    <!-- //end navbar -->
    
       <div class="picture3">
          <div class="pic-overlay3">
             <div class="pic-container3">
             <h1 class="heading">List of people's names and times of meeting room reservations</h1>
<table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Meeting Room Name</th>
            <th scope="col">arrivals</th>
            <th scope="col">leaving</th>
            <th scope="col">Chairs Number</th>
            <th scope="col">Adults Number</th>
            <th scope="col">Drinks & Meals Number</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
          </tr>
        </thead>
        <tbody>
        <?php
         include('connection.php');
         try{
    $sql = "SELECT * FROM meeting_form ORDER BY arrivals,leaving";   
    $result = $conn->query($sql);
    if($result->rowCount() > 0){

        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['User'] . "</td>";
                echo "<td>" . $row['Meeting'] . "</td>";
                echo "<td>" . $row['arrivals'] . "</td>";
                echo "<td>" . $row['leaving'] . "</td>";
                echo "<td>" . $row['Chairs'] . "</td>";
                echo "<td>" . $row['Adults'] . "</td>";
                echo "<td>" . $row['Drinks'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
            echo "</tr>";
        }
        // Free result set
        unset($result);
        } else{
        echo "No records matching your query were found.";
        }
        } catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
// Close connection
        ?>
        </tbody>
        
   </table>

             </div>
          </div>
       </div>
       <section></section>



   
     

    



    
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
    <h3>Contact</h3>
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
    <script src="js/login.js"></script>
    <script src="js/register.js"></script>
    <script src="js/script.js"></script>
</body>
</html>