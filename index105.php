<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문의하기</title>
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
                <a class="nav-link a2" aria-current="page" href="index102.php">집</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1">
                <a class="nav-link a2" href="index103.php">서비스</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1">
                <a class="nav-link a2" href="index104.php">투어</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item dropdown a1">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">전세</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db" style="margin-left:5px;text-align:center;">
                  <li><a class="dropdown-item di" href="index105.php">관광지 방문</a></li>
                  <li><a class="dropdown-item di" href="index109.php#Room">호텔 예약</a></li>
                  <li><a class="dropdown-item di" href="index109.php#Order">레스토랑 예약</a></li>
                  <li><a class="dropdown-item di" href="index110.php#Room">회의실 임대</a></li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown a1">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">언어</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db">
                  <li><a class="dropdown-item di" href="index.php">영어</a></li>
                  <li><a class="dropdown-item di" href="index5.php">독일 사람</a></li>
                  <li><a class="dropdown-item di" href="index9.php">프랑스 국민</a></li>
                  <li><a class="dropdown-item di" href="index13.php">러시아인</a></li>
                  <li><a class="dropdown-item di" href="index17.php">에스파뇰</a></li>
                  <li><a class="dropdown-item di" href="index21.php">이탈리아 사람</a></li>
                  <li><a class="dropdown-item di" href="index25.php">아라비아 말</a></li>
                  <li><a class="dropdown-item di" href="index73.php">힌디 어</a></li>
                  <li><a class="dropdown-item di" href="index83.php">중국인</a></li>
                  <li><a class="dropdown-item di" href="index93.php">일본어</a></li>
                  <li><a class="dropdown-item di" href="index102.php">한국인</a></li>
                  <li><a class="dropdown-item di" href="index111.php">포르투갈</a></li>
                  <li><a class="dropdown-item di" href="index123.php">케추아어</a></li>
                  <li><a class="dropdown-item di" href="index133.php">터키어</a></li>
                  <li><a class="dropdown-item di" href="index143.php">그리스 어</a></li>
                </ul>
              </li>
      
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="찾다" aria-label="Search">
              <button class="btn btnsearch" type="submit">찾</button>
              <!-- <div id="menu-btn" class="fa fa-bars"></div> -->
            </form>
        
          </div>
        </div>
        
      </nav>
      
</section>
    <!-- //end navbar -->
    <section class="contact" style="margin-top: -7rem;margin-bottom:-2rem;">
       <h1 class="heading-title">여행에 문의하세요!</h1>
       <form action="index4.php" method="post" class="contact-form">
        <div class="flex">
          <div class="inputBox" style="width:48%">
            <span>이름 : </span>
            <input type="text" size="30" placeholder="여기에 귀하의 이름을 입력하세요:" name="name">
          </div>
          <div class="inputBox" style="width:48%">
            <span>이메일 : </span>
            <input type="email" size="30" placeholder="여기에 이메일을 입력하세요:" name="email">
          </div>
        
          <div class="inputBox" style="width:48%">
            <span>핸드폰 : </span>
            <input type="number" size="30" placeholder="여기에 전화번호를 입력하세요:" name="phone">
          </div>
          <div class="inputBox" style="width:48%">
            <span>주소 : </span>
            <input type="text" size="28" placeholder="여기에 주소를 입력하세요:" name="address">
          </div>
          <div class="inputBox" style="width:48%">
            <span>어디로 : </span>
            <input type="text" size="27" placeholder="방문하고 싶은 장소: " name="location">
          </div>
          <div class="inputBox" style="width:48%">
            <span>얼마나 : </span>
            <input type="number" size="26" placeholder="손님 수" name="guests">
          </div>
          <div class="inputBox" style="width:48%">
            <span >도착 : </span>
            <input type="datetime-local"  name="arrivals">
          </div>
          <div class="inputBox" style="width:48%">
            <span>퇴거 : </span>
            <input type="datetime-local" name="leaving">
          </div>
        </div>
        <input type="submit" value="지금 연락하세요"  class="btn b111" name="send">
       </form>
     </section>












    <section class="footer">
<div class="footer-overlay">
  <div class="box-container">
    
    <div class="box">
      <h3>메뉴</h3>
      <a href="index102.php"><i class="fa fa-angle-right"></i> 집</a>
      <a href="index103.php"><i class="fa fa-angle-right"></i> 서비스</a>
      <a href="index104.php"><i class="fa fa-angle-right"></i> 투어</a>
      <a href="index105.php"><i class="fa fa-angle-right"></i> 전세</a>
    </div>
    <div class="box">
    <h3>질문?</h3>
      <a href="#"><i class="fa fa-angle-right"></i> 질문</a>
      <a href="#"><i class="fa fa-angle-right"></i> 회사 소개</a>
      <a href="#"><i class="fa fa-angle-right"></i> 개인 정보 정책</a>
      <a href="#"><i class="fa fa-angle-right"></i> 이용약관</a>
    </div>
    <div class="box">
    <h3>연락하다</h3>
      <a href="#"><i class="fa fa-phone"></i> +963-985-517031</a>
      <a href="#"><i class="fa fa-phone"></i> +963-998-353175</a>
      <a href="#"><i class="fa fa-envelope"></i> aousyounes78@gmail.com</a>
      <a href="#"><i class="fa fa-map"></i> 알가디르, 시리아 타르투스</a>
    </div>
    <div class="box">
      <h3>따르다</h3>
      <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
      <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
      <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
    </div>
    </div>
    <div class="credit">에 의해 생성됨 <span>엥-오우스 모하마드 유네스</span> @2024 | 판권 소유! </div>
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