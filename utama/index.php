

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/wuri.png" type="image/png">
        <title>Sekolah Menengah Atas</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./css/bootstrap.css">
        <link rel="stylesheet" href="./vendors/linericon/style.css">
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <link rel="stylesheet" href="./vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="./vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="./vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="./vendors/animate-css/animate.css">
        <link rel="stylesheet" href="./vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/responsive.css">
    </head>
<body>
<header class="header_area">
    <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container">    
                        <img src="img/wuri.png" style="width: 40px; margin-right: 10px;" alt="">    
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="./">Sekolah Menengah Atas</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item "><a class="nav-link" href="./">Beranda</a></li> 
								<li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelas</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="kelas-IPA">Ipa</a>
										<li class="nav-item"><a class="nav-link" href="kelas-IPS">Ips</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info Sekolah</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="kegiatan-sekolah">Kegiatan Sekolah</a></li>
									</ul>
								</li> 
								<li class="nav-item">
                                    <a class="nav-link" href="contact">Contact</a>
                                </li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
</header>

           <?php 
            include "./template/banner.php";
           ?>

           
            
           
           <!--================Team Area =================-->
           <?php 
            include "./template/team.php";
            ?>
        <!--================End Team Area =================-->
            

        <!-- kepalaaa sekolah -->
         <?php include "./template/kepala.php"?>
        <!-- akhir kepala sekolah -->

        <!-- abboutttt -->
        <?php 
            include "./template/about.php";
        ?>
        <!-- akhir aboot -->


        <!-- footerr -->
        <?php
            include "./template/footer.php";
        ?>
        <!-- akhiir foooterer -->


    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="./js/popper.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/stellar.js"></script>
        <script src="./vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="./vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="./vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="./vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="./vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="./vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="./js/jquery.ajaxchimp.min.js"></script>
        <script src="./vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="./vendors/counter-up/jquery.counterup.js"></script>
        <script src="./js/mail-script.js"></script>
        <script src="./js/theme.js"></script>
        <script src="./js/jquery.easing.1.3.js"></script>
        <script language="javascript" src="./js/backtop.js"></script>
        <script language="javascript" src="./js/scroll.js"></script>
</body>
</html>