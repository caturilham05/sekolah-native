<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="./plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="./plugins/toastr/toastr.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="./dist/css/adminlte.min.css"> -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body>

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Edit Data Siswa</h3>
                </div>
                <div class="mt-3 ml-4 mb-5">
            <a href="index?page=siswa">
              <button type="button" class="btn btn-primary">
              <i class="fas fa-arrow-left"></i>&nbsp;&nbsp; 
                    Kembali
                </button>
            </a>
            </div>

                <?php 
                include "./konfig/koneksi.php";
                    $id = $_GET['id'];
                    $siswa = mysqli_query($koneksi, "select * from siswa where id_siswa = '$id'") or die (mysqli_error($koneksi));

                    $data = mysqli_fetch_array($siswa);
                ?>
                <div>
                <form action="./komponen/proses.php" method="post" enctype="multipart/form-data">
                <div class="form-group pl-2 pr-2">
                                    <label for="nama" >Nama Siswa</label>
                                    <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa']?>">
                                    <input class="form-control" value="<?php echo $data['nama']?>" type="text" name="nama" placeholder="Nama Siswa" readonly/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="tempat_lahir" >Tempat Lahir</label>
                                    <input class="form-control" value="<?php echo $data['tempat_lahir']?>" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input class="form-control" value="<?php echo $data['tgl_lahir']?>" type="text" name="tgl_lahir" placeholder="Tanggal Lahir" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>

                <div class="form-group pl-2 pr-2">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" />
                                        <option value="">- Piliih Jenis Kelamin -</option>
                                        <option value="L"
                                        <?php 
                                            if($data["jenis_kelamin"] =='L' )

                                            echo "selected";
                                        ?>
                                        >-Laki-Laki-</option>
                                        <option value="P"
                                        <?php 
                                            if($data["jenis_kelamin"] =='P' )

                                            echo "selected";
                                        ?>
                                        >-Perempuan-</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="alamat" >Alamat</label>
                                    <input class="form-control" value="<?php echo $data['alamat']?>" type="text" name="alamat" placeholder="Alamat" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>

                <div class="form-group">
								<label for="agama">Agama</label>
								<select name="agama" class="form-control" required>
                                    <option value="">- Agama -</option>
                                    <option value="muslim"
                                    <?php 
                                            if($data["agama"] =='muslim' )

                                            echo "selected";
                                        ?>
                                    >-Islam-</option>
                                    <option value="kristen"
                                    <?php 
                                            if($data["agama"] =='kristen' )
    
                                            echo "selected";
                                        ?>
                                    >-Kristen-</option>
                                    <option value="katholik"
                                    <?php 
                                            if($data["agama"] =='katholik' )

                                            echo "selected";
                                        ?>
                                    >-Katolik-</option>
                                    <option value="hindu"
                                    <?php 
                                            if($data["agama"] =='hindu' )

                                            echo "selected";
                                        ?>
                                    >-Hindu-</option>
                                    <option value="budha"
                                    <?php 
                                            if($data["agama"] =='budha' )

                                            echo "selected";
                                        ?>
                                    >-Buddha-</option>
                                    <option value="kong hu cu"
                                    <?php 
                                            if($data["agama"] =='kong hu cu' )

                                            echo "selected";
                                        ?>
                                    >-Kong Hu Cu-</option>
                                </select>
								<div class="invalid-feedback">
								</div>
							</div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="telepon">Telepon</label>
                                    <input class="form-control" value="<?php echo $data['telepon']?>" type="text" name="telepon" placeholder="Telepon" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="email" >Email</label>
                                    <input class="form-control" value="<?php echo $data['email']?>" type="email" name="email" placeholder="Email" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="nama_ayah" >Nama Ayah</label>
                                    <input class="form-control" value="<?php echo $data['nama_ayah']?>" type="text" name="nama_ayah" placeholder="Nama Ayah" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="nama_ibu" >Nama Ibu</label>
                                    <input class="form-control" value="<?php echo $data['nama_ibu']?>" type="text" name="nama_ibu" placeholder="Nama Ibu" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="alamat_ortu" >Alamat Orang Tua</label>
                                    <input class="form-control" value="<?php echo $data['alamat_ortu']?>" type="text" name="alamat_ortu" placeholder="Alamat Orang Tua" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="telepon_ortu" >Telepon Orang Tua</label>
                                    <input class="form-control" value="<?php echo $data['telepon_ortu']?>" type="text" name="telepon_ortu" placeholder="Telepon Orang Tua" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="sekolah_asal" >Sekolah Asal</label>
                                    <input class="form-control" value="<?php echo $data['sekolah_asal']?>" type="text" name="sekolah_asal" placeholder="Sekolah Asal" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="foto" >Foto Siswa</label>
                                    <input class="form-control-file"
                                    type="file" name="foto" />
                                    <img src="./upload/<?php echo $data['foto'];?>" style="height: 100px;"/>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="status_siswa">Status Siswa</label>
                                    <select name="status_siswa"  class="form-control" required>
                                        <option>- Status Siswa -</option>
                                        <option value="aktif"
                                        <?php 
                                            if($data["status_siswa"] =='aktif' )

                                            echo "selected";
                                        ?>
                                        >-Aktif-</option>
                                        <option value="tidak aktif"
                                        <?php 
                                            if($data["status_siswa"] =='tidak aktif' )

                                            echo "selected";
                                        ?>
                                        >-Tidak Aktif-</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                
                <div class="modal-footer" style="float: right;">
                    <button type="submit" value="simpan" class="btn btn-primary" name="edit">Edit Data Siswa</button>
                </div>
            </form>
                </div>
 
            </div>
        </div>
    </div>

</section>
<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="./plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="./plugins/toastr/toastr.min.js"></script>
<!-- DataTables -->
<script src="./plugins/datatables/jquery.dataTables.js"></script>
<script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<!-- <script src="./dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
</body>
</body>


