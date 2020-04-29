

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
 
<div class="whole-wrap">
    <div class="container">
	    <h3 class="mb-30 title_color text-center">Kelas Ilmu Pengetahuan Sosial</h3>
        <div class="card-body table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Kelas</th>
                        <th>Nama Kelas</th>
                        <th>Guru</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    include "./konfig/koneksi.php";
                
                    
                    $no = 1;
                    $kelas = mysqli_query($koneksi, "select kode_kelas, nama_kelas, nama_guru, tingkat_kelas from kelas where nama_kelas = 'Ilmu Pengetahuan Sosial'") or die(mysqli_error($koneksi));

                    if(mysqli_num_rows($kelas) > 0){
                    while($data = mysqli_fetch_array($kelas)){
                     ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['kode_kelas']?></td>
                            <td><?php echo $data['nama_kelas']?></td>
                            <td><?php echo $data['nama_guru']?></td>
                            <td><?php echo $data['tingkat_kelas']?></td>
                            <td><input type="button" name="siswa" value="siswa" id="<?php echo $data['kode_kelas']?>" class="btn btn-primary siswa_data"></td>
                        </tr>
                    <?php 
                    }
                }else{
                    echo "<tr>
                    <td>
                    Data Tidak Ditemukan
                    </td>
                    </tr>
                    ";
                }
                    ?>
                </tbody>
            </table>
        </div>			
    </div>
</div>

                  
                    
                     
      <div id="modal-primary" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-center">Kelompok Kelas IPS</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="detail_siswa" class="modal-body"></div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog --> 
      </div>
      <!-- /.modal -->
      
 <div class="whole-wrap">
		<div class="container">
      <div class="section-top-border">
						<h3 class="mb-30 title_color">Ilmu Pengetahun Sosial (IPS)</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									"Ilmu Pengetahuan Sosial adalah lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ducimus corporis, exercitationem deleniti quia vitae nostrum nobis temporibus, laudantium ut neque quidem animi odit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sed cum rem pariatur atque culpa, aperiam temporibus tenetur, cupiditate magnam, voluptas facilis cumque libero consectetur debitis quis repellat qui harum. - Albert Enstein"
								</blockquote>
							</div>
						</div>
					</div>
    </div>
</div> 

        <?php include "./template/about.php"; ?>

        <!-- footerr -->
        <?php
            include "./template/footer.php";
        ?>
        <!-- akhiir foooterer -->


    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./js/jquery-3.4.1.min.js"></script>
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
        <script>
    $(document).ready(function(){
        $('.siswa_data').click(function(){
            var kode = $(this).attr('id');
            console.log (kode);
            $.ajax({
                url: "./template/modal-ips.php",
                method: "post",
                data: {kode:kode},
                success: function(data){
                    $('#detail_siswa').html(data);
                    $('#modal-primary').modal('show');
                }
            });
        })
    })
</script>
</body>
</html>