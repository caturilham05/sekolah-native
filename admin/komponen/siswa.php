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
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- SweetAlert2 -->
  <!-- <link rel="stylesheet" href="./plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"> -->
  <!-- Toastr -->
  <!-- <link rel="stylesheet" href="./plugins/toastr/toastr.min.css"> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
     <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Data Siswa</h3>
            </div>
            
            <!-- /.card-header -->
            
            <!-- Modal Input -->
            <div class="mt-3 mr-4">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary" style="float: right">
              <i class="fas fa-plus"></i>&nbsp;&nbsp; 
                    Input Data Siswa
              </button>
            </div>
      
             <!-- Modal Form -->

      <?php 
        include "vendor/autoload.php";

      ?>             
      <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Data Siswa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="./komponen/proses" method="post" enctype="multipart/form-data">
              <div class="form-group">
								<label for="nama" >Nama Siswa</label>
								 <input type="hidden" name="id_siswa" value="">
								<input class="form-control" value="" type="text" name="nama" placeholder="Nama Siswa" required/>
								<div class="invalid-feedback">
								</div>
              </div>
              
              <div class="form-group">
								<label for="tempat_lahir" >Tempat Lahir</label>
								<input class="form-control" value="" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required/>
								<div class="invalid-feedback">
								</div>
              </div>
              
              <div class="form-group">
								<label for="tgl_lahir" >Tanggal Lahir</label>
								<input class="form-control" value="" type="text" name="tgl_lahir" placeholder="yyyy-mm-dd" required/>
								<div class="invalid-feedback">
								</div>
              </div>

              <div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin</label>
								<select name="jenis_kelamin" class="form-control" required>
                                    <option value="">-Pilih Jenis Kelamin-</option>
                                    <option value="L">-Laki-Laki-</option>
                                    <option value="P">-Perempuan-</option>
                                </select>
								<div class="invalid-feedback">
								</div>
							</div>
              
              <div class="form-group">
								<label for="alamat" >Alamat</label>
								<input class="form-control" value="" type="text" name="alamat" placeholder="Alamat" required/>
								<div class="invalid-feedback">
								</div>
              </div>

              <div class="form-group">
								<label for="agama">Agama</label>
								<select name="agama" class="form-control" required>
                                    <option value="">-Pilih Agama-</option>
                                    <option value="muslim">-Islam-</option>
                                    <option value="kristen">-Kristen-</option>
                                    <option value="katholik">-Katolik-</option>
                                    <option value="hindu">-Hindu-</option>
                                    <option value="budha">-Buddha-</option>
                                    <option value="kong hu cu">-Kong Hu Cu-</option>
                                </select>
								<div class="invalid-feedback">
								</div>
							</div>
              
              <div class="form-group">
								<label for="telepon">Telepon</label>
								<input class="form-control" value="" type="text" name="telepon" placeholder="Telepon" required/>
								<div class="invalid-feedback">
								</div>
              </div>
              
              <div class="form-group">
								<label for="email" >Email</label>
								<input class="form-control" value="" type="email" name="email" placeholder="Email" required/>
								<div class="invalid-feedback">
								</div>
              </div>
              
              <div class="form-group">
								<label for="nama_ayah" >Nama Ayah</label>
								<input class="form-control" value="" type="text" name="nama_ayah" placeholder="Nama Ayah" required/>
								<div class="invalid-feedback">
								</div>
              </div>
              
              <div class="form-group">
								<label for="nama_ibu" >Nama Ibu</label>
								<input class="form-control" value="" type="text" name="nama_ibu" placeholder="Nama Ibu" required/>
								<div class="invalid-feedback">
								</div>
              </div>
              
              <div class="form-group">
								<label for="alamat_ortu" >Alamat Orang Tua</label>
								<input class="form-control" value="" type="text" name="alamat_ortu" placeholder="Alamat Orang Tua" required/>
								<div class="invalid-feedback">
								</div>
              </div>
              
              <div class="form-group">
								<label for="telepon_ortu" >Telepon Orang Tua</label>
								<input class="form-control" value="" type="text" name="telepon_ortu" placeholder="Telepon Orang Tua" required/>
								<div class="invalid-feedback">
								</div>
              </div>
              
              <div class="form-group">
								<label for="sekolah_asal" >Sekolah Asal</label>
								<input class="form-control" value="" type="text" name="sekolah_asal" placeholder="Sekolah Asal" required/>
								<div class="invalid-feedback">
								</div>
              </div>
              
              <div class="form-group">
								<label for="foto" >Foto Siswa</label>
								<input class="form-control-file <?//=$row->foto ?>"
								 type="file" name="foto" />
								<div class="invalid-feedback">
								</div>
							</div>
              
              <div class="form-group">
								<label for="status_siswa">Status Siswa</label>
								<select name="status_siswa" class="form-control" required>
                                    <option value="">-Status Siswa-</option>
                                    <option value="aktif">-Aktif-</option>
                                    <option value="tidak aktif">-Tidak Aktif-</option>
                                </select>
								<div class="invalid-feedback">
								</div>
							</div>
              
              <div class="modal-footer justify-content-between">
                <button type="reset" class="btn btn-default">reset</button>
                <button type="submit" value="simpan" class="btn btn-primary" name="tambah">Input Data Siswa</button>
              </div>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      
      <?php 
        require "vendor/autoload.php";
      ?>       
      </div>
      <!-- /.modal -->


              <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th>Sekolah Asal</th>
                  <th>Foto</th>
                  <th>Status Siswa</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  include "./konfig/koneksi.php";

                    $no = 1;
                    $siswa = mysqli_query($koneksi, "select id_siswa, nama, jenis_kelamin, alamat, agama, telepon, email, sekolah_asal, foto, status_siswa from siswa ") or die(mysqli_error($koneksi));
                    if(mysqli_num_rows($siswa) > 0){
                      while($data = mysqli_fetch_array($siswa)) { 
                        ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          
                          <td><?php echo $data['nama'];?></td>
                          <td><?php echo $data['jenis_kelamin']?></td>
                          <td><?php echo $data['alamat']?></td>
                          <td><?php echo $data['agama']?></td>
                          <td><?php echo $data['telepon']?></td>
                          <td><?php echo $data['email']?></td>
                          <td><?php echo $data['sekolah_asal']?></td>
                          <td>
                            <img src="./upload/<?php echo $data['foto'];?>" style="height: 100px;"/>
                          </td>
                          <td><?php echo $data['status_siswa']?></td>
                          <td>
                            <a href="index?page=edit&amp;id=<?php echo $data['id_siswa'];?>" class="btn btn-block btn-primary btn-xs">
                            <i class="fas fa-edit"></i>
                            Edit
                            </a>
                            <a href="index?page=delete&amp;id=<?php echo $data['id_siswa'];?>&filename=<?php echo $data['foto'];?>" onClick="return confirm('Yakin Akan Menghapus Data?')" class="btn btn-block btn-danger btn-xs">
                            <i class="fas fa-trash"></i>  
                            Hapus</a>
                          </td>
                        </tr>
                        <?php
                      }
                    }else{
                      echo "<tr>
                      <td>
                      Data Tidak Ditemukan
                      </td>
                    </tr>";
                    }
                  ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
                  </div>
      <!-- /.modal -->
</section>
<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<!-- <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- SweetAlert2 -->
<!-- <script src="./plugins/sweetalert2/sweetalert2.min.js"></script> -->
<!-- Toastr -->
<!-- <script src="./plugins/toastr/toastr.min.js"></script> -->
<!-- DataTables -->
<script src="./plugins/datatables/jquery.dataTables.js"></script>
<script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<!-- <script src="./dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="./dist/js/demo.js"></script> -->
<!-- page script -->
<script>
  $(function () {
      $.noConflict();
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>