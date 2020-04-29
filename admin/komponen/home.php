<?php
  include "./konfig/koneksi.php";

  $query = mysqli_query($koneksi, "select * from siswa") or die(mysqli_error($koneksi));

  $guru = mysqli_query($koneksi, "select * from guru") or die(mysqli_error($koneksi));

  $karyawan = mysqli_query($koneksi, "select * from karyawan") or die(mysqli_error($koneksi));

  $query1 = mysqli_query($koneksi, "select jenis_kelamin from siswa where jenis_kelamin = 'L'") or die(mysqli_error($koneksi));

  $karyawan1 = mysqli_query($koneksi, "select jenis_kelamin from karyawan where jenis_kelamin = 'L'") or die(mysqli_error($koneksi));

  $karyawan2 = mysqli_query($koneksi, "select jenis_kelamin from karyawan where jenis_kelamin = 'P'") or die(mysqli_error($koneksi));

  $query2 = mysqli_query($koneksi, "select jenis_kelamin from siswa where jenis_kelamin = 'P'") or die(mysqli_error($koneksi));

  $guru1 = mysqli_query($koneksi, "select jenis_kelamin from guru where jenis_kelamin = 'L'") or die(mysqli_error($koneksi));
  
  $guru2 = mysqli_query($koneksi, "select jenis_kelamin from guru where jenis_kelamin = 'P'") or die(mysqli_error($koneksi));



   $query = mysqli_num_rows($query);
   $karyawan = mysqli_num_rows($karyawan);
   $karyawan_l = mysqli_num_rows($karyawan1);
   $karyawan_p = mysqli_num_rows($karyawan2);
   $guru = mysqli_num_rows($guru);
   $jenis_kelamin = mysqli_num_rows($query1);
   $jenis_kelamin1 = mysqli_num_rows($query2);
   $jenis_kelamin2 = mysqli_num_rows($guru1);
   $jenis_kelamin3 = mysqli_num_rows($guru2);
?>


<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"  style="height: 123px;">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <strong class="info-box-text">Jumlah Siswa</strong>
                <span class="info-box-number">
                  <?php echo number_format($query, 0, ",",".");?>
                  <small>Siswa</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3"  style="height: 123px;">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>

              <div class="info-box-content">
                <strong class="info-box-text">Jumlah Pegawai</strong>
                <span class="info-box-number"><?php echo number_format($guru, 0, ",",".");?>&nbsp;<small>Guru</small></span>
                <span class="info-box-number"><?php echo number_format($karyawan, 0, ",",".");?>&nbsp;<small>Karyawan</small></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-male"></i></span>

              <div class="info-box-content">
                <strong class="info-box-text">Laki-Laki</strong>
                <span class="info-box-number"><?php echo number_format($jenis_kelamin, 0, ",",".");?>
                <small>Siswa</small>
                <span class="info-box-number"><?php echo number_format($jenis_kelamin2, 0, ",",".");?>
                <small>Guru</small>
                <span class="info-box-number"><?php echo number_format($karyawan_l, 0, ",",".");?>
                <small>Karyawan</small>
              </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-female"></i></span>

              <div class="info-box-content">
                <strong class="info-box-text">Perempuan</strong>
                <span class="info-box-number"><?php echo number_format($jenis_kelamin1, 0, ",",".");?>
                <small>Siswa</small>
                <span class="info-box-number"><?php echo number_format($jenis_kelamin3, 0, ",",".");?>
                <small>Guru</small>
                <span class="info-box-number"><?php echo number_format($karyawan_p, 0, ",",".");?>
                <small>Karyawan</small>
              </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>