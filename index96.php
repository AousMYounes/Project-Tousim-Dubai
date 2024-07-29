<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
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
                <a class="nav-link a2" aria-current="page" href="index93.php">家</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1">
                <a class="nav-link a2" href="index94.php">サービス</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item a1">
                <a class="nav-link a2" href="index95.php">ツアー</a>
                <span class="sp1"></span>
              </li>
              <li class="nav-item dropdown a1">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">予約</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db" style="margin-left:5px;text-align:center;">
                  <li><a class="dropdown-item di" href="index96.php">観光地への訪問</a></li>
                  <li><a class="dropdown-item di" href="index100.php#Room">ホテルの予約</a></li>
                  <li><a class="dropdown-item di" href="index100.php#Order">レストランの予約</a></li>
                  <li><a class="dropdown-item di" href="index101.php#Room">会議室のレンタル</a></li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown a1">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">言語</a>
                <span class="sp1"></span>
                <ul class="dropdown-menu db">
                  <li><a class="dropdown-item di" href="index.php">英語</a></li>
                  <li><a class="dropdown-item di" href="index5.php">ドイツ人</a></li>
                  <li><a class="dropdown-item di" href="index9.php">フランス語</a></li>
                  <li><a class="dropdown-item di" href="index13.php">ロシア</a></li>
                  <li><a class="dropdown-item di" href="index17.php">スペイン語</a></li>
                  <li><a class="dropdown-item di" href="index21.php">イタリアの</a></li>
                  <li><a class="dropdown-item di" href="index25.php">アラビア語</a></li>
                  <li><a class="dropdown-item di" href="index73.php">ヒンディー語</a></li>
                  <li><a class="dropdown-item di" href="index83.php">中国語</a></li>
                  <li><a class="dropdown-item di" href="index93.php">日本語</a></li>
                  <li><a class="dropdown-item di" href="index102.php">韓国語</a></li>
                  <li><a class="dropdown-item di" href="index111.php">ポルトガル</a></li>
                  <li><a class="dropdown-item di" href="index123.php">ケチュア語</a></li>
                  <li><a class="dropdown-item di" href="index133.php">トルコ語</a></li>
                  <li><a class="dropdown-item di" href="index143.php">ギリシャ語</a></li>
                </ul>
              </li>
      
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="検索" aria-label="Search">
              <button class="btn btnsearch" type="submit">検</button>
              <!-- <div id="menu-btn" class="fa fa-bars"></div> -->
            </form>
        
          </div>
        </div>
        
      </nav>
      
</section>
    <!-- //end navbar -->

    <section class="contact" style="margin-top: -7rem;margin-bottom:-2rem;">
       <h1 class="heading-title">ご旅行のご連絡を！</h1>
       <form action="index4.php" method="post" class="contact-form">
        <div class="flex">
          <div class="inputBox" style="width:48%">
            <span>名前 : </span>
            <input type="text" size="30" placeholder="ここにあなたの名前を入力してください:" name="name">
          </div>
          <div class="inputBox" style="width:48%">
            <span>Eメール : </span>
            <input type="email" size="30" placeholder="あなたのメールアドレスをここに入力してください：" name="email">
          </div>
        
          <div class="inputBox" style="width:48%">
            <span>電話 : </span>
            <input type="number" size="30" placeholder="ここに電話番号を入力してください:" name="phone">
          </div>
          <div class="inputBox" style="width:48%">
            <span>住所 : </span>
            <input type="text" size="28" placeholder="ここに住所を入力してください:" name="address">
          </div>
          <div class="inputBox" style="width:48%">
            <span>どこへ : </span>
            <input type="text" size="27" placeholder="訪れたい場所: " name="location">
          </div>
          <div class="inputBox" style="width:48%">
            <span>幾つか : </span>
            <input type="number" size="26" placeholder="客数" name="guests">
          </div>
          <div class="inputBox" style="width:48%">
            <span >到着 : </span>
            <input type="datetime-local"  name="arrivals">
          </div>
          <div class="inputBox" style="width:48%">
            <span>出発 : </span>
            <input type="datetime-local" name="leaving">
          </div>
        </div>
        <input type="submit" value="今コンタクトしてください"  class="btn b111" name="send">
       </form>
     </section>















    <section class="footer">
<div class="footer-overlay">
  <div class="box-container">
    
    <div class="box">
      <h3>メニュー</h3>
      <a href="index93.php"><i class="fa fa-angle-right"></i> 家</a>
      <a href="index94.php"><i class="fa fa-angle-right"></i> サービス</a>
      <a href="index95.php"><i class="fa fa-angle-right"></i> ツアー</a>
      <a href="index96.php"><i class="fa fa-angle-right"></i> 予約</a>
    </div>
    <div class="box">
    <h3>ご質問はございますか？</h3>
      <a href="#"><i class="fa fa-angle-right"></i> 質問をする</a>
      <a href="#"><i class="fa fa-angle-right"></i> 私たちについて</a>
      <a href="#"><i class="fa fa-angle-right"></i> プライバシーポリシー</a>
      <a href="#"><i class="fa fa-angle-right"></i> 利用規約</a>
    </div>
    <div class="box">
    <h3>接触</h3>
      <a href="#"><i class="fa fa-phone"></i> +963-985-517031</a>
      <a href="#"><i class="fa fa-phone"></i> +963-998-353175</a>
      <a href="#"><i class="fa fa-envelope"></i> aousyounes78@gmail.com</a>
      <a href="#"><i class="fa fa-map"></i> アル・ガディール、タルトゥース、シリア</a>
    </div>
    <div class="box">
      <h3>私たちに従ってください</h3>
      <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
      <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
      <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
    </div>
    </div>
    <div class="credit">によって作成された <span>エンガウス・モハメド・ユネス</span> @2024 | 無断転載を禁じます！ </div>
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