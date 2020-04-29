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
										<li class="nav-item"><a class="nav-link" href="pembayaran">Pembayaran</a></li>
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


    <section class="contact_area p_120">
        <div class="container">
        <h1 class="text-center ">Google Maps</h1>
            <div id="mapBox" class="mapBox mt-5" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.4224254221521!2d110.84982582917632!3d-6.8075486680424415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDgnMjcuMiJTIDExMMKwNTEnMDEuMyJF!5e0!3m2!1sid!2sid!4v1585736522259!5m2!1sid!2sid" width="1120" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="contact_info">
                                <div class="info_item">
                                    <i class="lnr lnr-home"></i>
                                    <h6>California, United States</h6>
                                    <p>Santa monica bullevard</p>
                                </div>
                                <div class="info_item">
                                    <i class="lnr lnr-phone-handset"></i>
                                    <h6><a href="#">00 (440) 9865 562</a></h6>
                                    <p>Mon to Fri 9am to 6 pm</p>
                                </div>
                                <div class="info_item">
                                    <i class="lnr lnr-envelope"></i>
                                    <h6><a href="#">support@colorlib.com</a></h6>
                                    <p>Send us your query anytime!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>  
            <!--================Contact Area =================-->

            <?php include "./template/about.php"; ?>

            <?php
            include "./template/footer.php";
        ?>

            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./js/jquery-3.3.1.min.js"></script>
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