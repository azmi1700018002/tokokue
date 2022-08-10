heroku config:add BUILDPACK_URL=https://github.com/heroku/heroku-buildpack-php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Roti & Snack Kyky</title>
	<link rel="icon" href="img/kyky.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/Magnific-Popup/magnific-popup.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ HEADER=================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="home.php"><img src="img/logo1.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="about.php">Hubungi Kami</a></li> 
              <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================ BANNER =================-->
  <section class="hero-banner">
    <div class="hero-wrapper">
      <div class="hero-left">
      <!-- <font size="40"> -->
        <h2>Roti & Snack Kyky</h2>
      <!-- </font> -->
        <div class="d-sm-flex flex-wrap">
          <a class="button button-hero button-shadow" href="about.php">Pesan Sekarang!</a>
        </div>
        <ul class="hero-info d-none d-lg-block">
          <li>
            <img src="img/banner/fas-service-icon.png" alt="">
            <h6>Pelayanan Cepat</h6>
          </li>
          <li>
            <img src="img/banner/fresh-food-icon.png" alt="">
            <h6>Langsung dari Oven</h6>
          </li>
          <li>
            <img src="img/banner/support-icon.png" alt="">
            <h6>Siap Melayani</h6>
          </li>
        </ul>
      </div>
      <div class="hero-right">
        <div class="owl-carousel owl-theme hero-carousel"> <!-- untuk slide gambar -->
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/black_forest.jpeg" alt="">
          </div>
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/onde_onde1.jpg" alt="">
          </div>
        </div>
    </div>
  </section>

  <!--================TENTANG KAMI =================-->
  <section class="about section-margin pb-xl-70">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xl-6 mb-5 mb-md-0 pb-5 pb-md-0">
          <div class="img-styleBox">
            <div class="styleBox-border">
              <img class="styleBox-img1 img-fluid" src="img/buat_kue1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6 pl-md-5 pl-xl-0 offset-xl-1 col-xl-5">
          <div class="section-intro mb-lg-4">
            <h4 class="intro-title">Tentang Kami</h4>
            <h5>"Cake, like real love, took time, strong loving hands and patience. it lived, rising and growing to fruition only under the most perfect circumstances."</h5>
          </div>
          <div class="quote-wrapper">
            <div class="quotes">
                <p>"Kue, seperti cinta sejati, membutuhkan waktu, tangan yang penuh kasih dan kesabaran. ia hidup, tumbuh dan membuahkan hasil hanya di bawah keadaan yang paling sempurna."</p>
              <p><b><h5> Toko kue Roti & Snack Kyky adalah toko kue dan snack dari home industri yang didirikan oleh Prita Anisa pada 2020. Toko Kue Roti & Snack Kyky menjual beberapa macam kue dan snack,
                 mulai dari kue tradisional berupa Onde-Onde, Klepon, Kue Pisang dan lain-lain. Untuk kue modern berupa Kue Tart, Cheese Cake, Black Forest dan lain-lain.
               </b></h5></p>
               <h4><p> <font color="#e22104">Alamat Kami</p></font></h4>
               <h5><p>Jl. Puri Sewon Asri Blok B10 Glondong, Panggungharjo , Sewon Bantul, Yogyakarta</p>
               <br>Kontak : 089668951790</h5>
            </div>
      </div>
    </div>
  </section>

  <!--================PRODUK TERBAIK =================-->
  <section class="section-margin mb-lg-100">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Produk Pilihan Kami</h4>
        <h2>Terbaik dari yang terbaik</h2>
      </div>


      <div class="owl-carousel owl-theme featured-carousel"> <!-- agar gambar sejajar-->
        <div class="featured-item">
          <img class="card-img rounded-0" src="img/klepon1.jpg" alt="">
          <div class="item-body">
            
              <h3>Klepon</h3>
            </a>
            <p>Kue klepon yang ditaburi oleh kelapa dan dengan kualitas premium siap menemani hari harimu</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">Rp. 50.000/toples</h3>
            </div>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="img/bika_ambon2.jpg" alt="">
          <div class="item-body">
            
              <h3>Bika Ambon</h3>
            </a>
            <p>Bika Ambon yang dibuat dengan menggunakan resep spesial yang dijamin kenikmatan rasa yang sangat enak dan tekstur yan lembut menjadikan kue ini pasti bikin nagih</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">Rp. 110.000</h3>
            </div>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="img/black_forest3.jpg" alt="">
          <div class="item-body">
           
              <h3>Black Forest</h3>
            </a>
            <p>Lempengan Coklat yang menghiasi di lingkaran kue ini memperkaya rasa coklatnya. Bahan bahan yang kami pakaipun tidak memakai bahan pengawet</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">Rp. 195.000</h3>
            </div>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="img/cup_cake1.jpg" alt="">
          <div class="item-body">
            
              <h3>Cup cake</h3>
            </a>
            <p>Bentuknya yang imut ditambah dengan cita rasa yang manis membuat siapa saja yang memakan nya merasakan kenikmatan yang begitu nikmat</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">Rp. 80.0000</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
        </div>
      </div>
    </div>
  </section>
  <!--================DIRUMAH AJA =================-->  
  <section class="cta-area text-center">  
  <div class="container">
      <p>Biarkan Kami Yang Mengantar Pesanan Anda</p>
      <p>Tetap Jaga Kesehatan, Tetap Ikuti Peraturan Pemerintah Dan Tetap</p>
      <h2>#DIRUMAHAJA</h2>
    </div>
  </section>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
