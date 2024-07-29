<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> الحجوزات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body style="font-family:'Times New Roman', Times, serif ;">
<section class="header">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark n1 fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="images/logo-2024.png" width="250" height="30" alt="website logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d1" id="navbarNav">
            <ul class="navbar-nav a3 m-auto mb-2 mb-lg-0">
              <li class="nav-item a1">
                <a class="nav-link a2" aria-current="page" href="index25.php">الصفحةالرئيسية</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1">
                <a class="nav-link a2" href="index26.php">الخدمات </a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1">
                <a class="nav-link a2" href="index27.php">الرحلات</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item dropdown a1">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">الحجوزات</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db" style="margin-left:5px;text-align:center;">
                  <li><a class="dropdown-item di" href="index28.php">حجز أماكن سياحية</a></li>
                  <li><a class="dropdown-item di" href="index51.php#Room">حجز فنادق</a></li>
                  <li><a class="dropdown-item di" href="index51.php#Order">حجز مطاعم</a></li>
                  <li><a class="dropdown-item di" href="index72.php#Room">حجز وتأجير قاعات اجتماعات</a></li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown a1">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">اللغة</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db" style="margin-left: -18px;">
                  <li><a class="dropdown-item di" href="index.php">الانجليزية</a></li>
                  <li><a class="dropdown-item di" href="index5.php">الألمانية</a></li>
                  <li><a class="dropdown-item di" href="index9.php">الفرنسية</a></li>
                  <li><a class="dropdown-item di" href="index13.php">الروسية</a></li>
                  <li><a class="dropdown-item di" href="index17.php">الاسبانية</a></li>
                  <li><a class="dropdown-item di" href="index21.php">الايطالية</a></li>
                  <li><a class="dropdown-item di" href="index25.php">العربية</a></li>
                  <li><a class="dropdown-item di" href="index73.php">الهندية</a></li>
                  <li><a class="dropdown-item di" href="index83.php">الصينية</a></li>
                  <li><a class="dropdown-item di" href="index93.php">اليابانية</a></li>
                  <li><a class="dropdown-item di" href="index102.php">الكورية</a></li>
                  <li><a class="dropdown-item di" href="index111.php">البرتغالية</a></li>
                  <li><a class="dropdown-item di" href="index123.php">الكيتشوا</a></li>
                  <li><a class="dropdown-item di" href="index133.php">التركية</a></li>
                  <li><a class="dropdown-item di" href="index143.php">اليونانية</a></li>
                </ul>
              </li>
      
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="بحث عن" aria-label="Search">
              <button class="btn btnsearch" type="submit">بحث</button>
              <!-- <div id="menu-btn" class="fa fa-bars"></div> -->
            </form>
        
          </div>
        </div>
        
      </nav>
      
</section>
    <!-- <div class="heading3">
      <h1>تواصل معنا</h1>
     </div> -->
     <section class="contact" style="margin-top: -7rem;margin-bottom:-2rem;">
       <h1 class="heading-title">إحجز رحلتك معنا الآن!</h1>
       <form action="index4.php" method="post" class="contact-form">
        <div class="flex">
          <div class="inputBox" style="width:48%">
            <span>الاسم الكامل : </span>
            <input type="text" size="30" placeholder="أدخل اسمك الثلاثي هنا" name="name">
          </div>
          <div class="inputBox" style="width:48%">
            <span>البريد الالكتروني : </span>
            <input type="email" size="30" placeholder="أدخل بريدك الالكتروني هنا:" name="email">
          </div>
        
          <div class="inputBox" style="width:48%">
            <span>رقم جوالك : </span>
            <input type="number" size="30" placeholder="أدخل رقم جوالك هنا:" name="phone">
          </div>
          <div class="inputBox" style="width:48%">
            <span>العنوان : </span>
            <input type="text" size="28" placeholder="أدخل عنوانك هنا:" name="address">
          </div>
          <div class="inputBox" style="width:48%">
            <span>إلى أين وجهتك : </span>
            <input type="text" size="27" placeholder="المكان الذي ترغب بزيارته: " name="location">
          </div>
          <div class="inputBox" style="width:48%">
            <span>كم عدد الضيوف: </span>
            <input type="number" size="26" placeholder="عدد الضيوف" name="guests">
          </div>
          <div class="inputBox" style="width:48%">
            <span >الوصول : </span>
            <input type="datetime-local"  name="arrivals">
          </div>
          <div class="inputBox" style="width:48%">
            <span>المغادرة : </span>
            <input type="datetime-local" name="leaving">
          </div>
        </div>
        <input type="submit" value="احجز الآن"  class="btn b111" name="send">
       </form>
     </section>
    <section class="footer">
<div class="footer-overlay">
  <div class="box-container">
    
    <div class="box">
      <h3>القائمة</h3>
      <a href="index25.php"><i class="fa fa-angle-right"></i> الصفحة الرئيسية</a>
      <a href="index26.php"><i class="fa fa-angle-right"></i>  الخدمات</a>
      <a href="index27.php"><i class="fa fa-angle-right"></i> الرحلات</a>
      <a href="index28.php"><i class="fa fa-angle-right"></i>  الحجوزات</a>
    </div>
    <div class="box">
    <h3>أسئلة؟</h3>
      <a href="#"><i class="fa fa-angle-right"></i> اسال اسئلة</a>
      <a href="#"><i class="fa fa-angle-right"></i> معلومات عنا</a>
      <a href="#"><i class="fa fa-angle-right"></i> سياسة الخصوصية</a>
      <a href="#"><i class="fa fa-angle-right"></i> شروط الاستخدام</a>
    </div>
    <div class="box">
    <h3>تواصل معنا</h3>
      <a href="#"><i class="fa fa-phone"></i> +963-985-517031</a>
      <a href="#"><i class="fa fa-phone"></i> +963-998-353175</a>
      <a href="#"><i class="fa fa-envelope"></i> aousyounes78@gmail.com</a>
      <a href="#"><i class="fa fa-map"></i> الغدير، طرطوس، سوريا</a>
    </div>
    <div class="box">
      <h3>تابعنا</h3>
      <a href="#"><i class="fab fa-facebook"></i> فيسبوك</a>
      <a href="#"><i class="fab fa-twitter"></i> تويتر</a>
      <a href="#"><i class="fab fa-instagram"></i> انستاغرام</a>
      <a href="#"><i class="fab fa-linkedin"></i> لينكدان</a>
    </div>
    </div>
    <div class="credit">صمم من قبل <span>المهندس أوس محمد يونس</span> | كل الحقوق محفوظة! </div>
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