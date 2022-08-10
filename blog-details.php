<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Whole Cake - Detail</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/Magnific-Popup/magnific-popup.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$koneksi=mysql_connect("localhost","username","root","password","root") or die(mysql_error());
mysql_select_db("db_kue");
$tampil="SELECT * from tentang order by id_tentang";
$query=mysql_query($tampil) or die ("gagal".mysql_error());
?>

<?php
while ($row=mysql_fetch_array($query))
{
    $b=$row['tentang'];}
    ?>

<!--================ Header Menu Area start =================-->
   <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="home.php"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="Home.php">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="about.php">Hubungi Kami</a></li> 
              <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
  <!--================Blog Area =================-->
	<section class="blog_area single-post-area section-margin">
			<div class="container">
							<div class="col-lg-8 posts-list">
									<div class="single-post">
													<div class="feature-img">
															<img class="img-fluid" src="img/buat_kue1.jpg" alt="">
													</div>
											<div class="blog_details">
													<h2>Tentang kami.</h2>
                            </ul>
                            <?php echo $b;

                            ?>
											</div>
                  </div>
              </div>
      </div>
	</section>
                  <section class="cta-area text-center">  
  <div class="container">
      <p>Biarkan kami yang mengantar pesanan anda</p>
      <p>Tetap jaga kesehatan, Tetap ikuti peraturan pemerintah dan Tetap</p>
      <h2>#DIRUMAHAJA</h2>
    </div>
  </section>
  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>