<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>预订</title>
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
                <a class="nav-link a2" aria-current="page" href="index83.php">家</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1">
                <a class="nav-link a2" href="index88.php">服务</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1">
                <a class="nav-link a2" href="index89.php">旅程</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item dropdown a1">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">预订</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db" style="margin-left:5px;text-align:center;">
                  <li><a class="dropdown-item di" href="index90.php">参观旅游景点</a></li>
                  <li><a class="dropdown-item di" href="index91.php#Room">旅馆预订</a></li>
                  <li><a class="dropdown-item di" href="index91.php#Order">餐厅预订</a></li>
                  <li><a class="dropdown-item di" href="index92.php#Room">租用会议室</a></li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown a1">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">语言</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db">
                  <li><a class="dropdown-item di" href="index.php">英国化</a></li>
                  <li><a class="dropdown-item di" href="index5.php">德国的</a></li>
                  <li><a class="dropdown-item di" href="index9.php">法语</a></li>
                  <li><a class="dropdown-item di" href="index13.php">俄语</a></li>
                  <li><a class="dropdown-item di" href="index17.php">西班牙语</a></li>
                  <li><a class="dropdown-item di" href="index21.php">意大利的</a></li>
                  <li><a class="dropdown-item di" href="index25.php">阿拉伯人的</a></li>
                  <li><a class="dropdown-item di" href="index73.php">印地语</a></li>
                  <li><a class="dropdown-item di" href="index83.php">中国的</a></li>
                  <li><a class="dropdown-item di" href="index93.php">日本人</a></li>
                  <li><a class="dropdown-item di" href="index102.php">韩国人</a></li>
                  <li><a class="dropdown-item di" href="index111.php">葡萄牙</a></li>
                  <li><a class="dropdown-item di" href="index123.php">克丘亚语</a></li>
                  <li><a class="dropdown-item di" href="index133.php">土耳其</a></li>
                  <li><a class="dropdown-item di" href="index143.php">希腊语</a></li>
                </ul>
              </li>
      
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="搜索" aria-label="Search">
              <button class="btn btnsearch" type="submit">搜</button>
              <!-- <div id="menu-btn" class="fa fa-bars"></div> -->
            </form>
        
          </div>
        </div>
        
      </nav>
      
</section>
    <!-- //end navbar -->
    <section class="contact" style="margin-top: -7rem;margin-bottom:-2rem;">
       <h1 class="heading-title">联系你的行程！</h1>
       <form action="index4.php" method="post" class="contact-form">
        <div class="flex">
          <div class="inputBox" style="width:48%">
            <span>姓名 : </span>
            <input type="text" size="30" placeholder="在此输入您的姓名：" name="name">
          </div>
          <div class="inputBox" style="width:48%">
            <span>电子邮件 : </span>
            <input type="email" size="30" placeholder="在此输入您的电子邮件：" name="email">
          </div>
        
          <div class="inputBox" style="width:48%">
            <span>电话 : </span>
            <input type="number" size="30" placeholder="在此输入您的电话：" name="phone">
          </div>
          <div class="inputBox" style="width:48%">
            <span>地址 : </span>
            <input type="text" size="28" placeholder="在此输入您的地址：" name="address">
          </div>
          <div class="inputBox" style="width:48%">
            <span>去哪儿 : </span>
            <input type="text" size="27" placeholder="您想参观的地方： " name="location">
          </div>
          <div class="inputBox" style="width:48%">
            <span>多少 : </span>
            <input type="number" size="26" placeholder="客人数量" name="guests">
          </div>
          <div class="inputBox" style="width:48%">
            <span >到达 : </span>
            <input type="datetime-local"  name="arrivals">
          </div>
          <div class="inputBox" style="width:48%">
            <span>离开 : </span>
            <input type="datetime-local" name="leaving">
          </div>
        </div>
        <input type="submit" value="现在联系"  class="btn b111" name="send">
       </form>
     </section>














    <section class="footer">
<div class="footer-overlay">
  <div class="box-container">
    
    <div class="box">
      <h3>菜单</h3>
      <a href="index83.php"><i class="fa fa-angle-right"></i> 家</a>
      <a href="index88.php"><i class="fa fa-angle-right"></i> 服务</a>
      <a href="index89.php"><i class="fa fa-angle-right"></i> 旅程</a>
      <a href="index90.php"><i class="fa fa-angle-right"></i> 预订</a>
    </div>
    <div class="box">
    <h3>问题?</h3>
      <a href="#"><i class="fa fa-angle-right"></i> 问问题</a>
      <a href="#"><i class="fa fa-angle-right"></i> 关于我们</a>
      <a href="#"><i class="fa fa-angle-right"></i> 隐私政策</a>
      <a href="#"><i class="fa fa-angle-right"></i> 使用条款</a>
    </div>
    <div class="box">
    <h3>接触</h3>
      <a href="#"><i class="fa fa-phone"></i> +963-985-517031</a>
      <a href="#"><i class="fa fa-phone"></i> +963-998-353175</a>
      <a href="#"><i class="fa fa-envelope"></i> aousyounes78@gmail.com</a>
      <a href="#"><i class="fa fa-map"></i> 叙利亚塔尔图斯</a>
    </div>
    <div class="box">
      <h3>跟着我们</h3>
      <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
      <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
      <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
    </div>
    </div>
    <div class="credit">由...制作 <span>英格奥·穆罕默德·尤尼斯</span> @2024 | 版权所有！ </div>
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