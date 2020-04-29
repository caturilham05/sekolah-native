<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <h3 class=" text-center">Data Karyawan</h3>
              </div>

              <!-- Modal Input -->
            <div class="mt-3 mr-4 mb-3">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary" style="float: right">
              <i class="fas fa-plus"></i>&nbsp;&nbsp; 
                    Input Data Karyawan
              </button>
            </div>

            <?php 
        include "./komponen/vendor/autoload.php";

      ?>             
      <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Data Karyawan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="./guru/karyawan_p.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
								<label for="nama_karyawan" >Nama Karyawan</label>
								 <input type="hidden" name="id_karyawan" value="">
								<input class="form-control" value="" type="text" name="nama_karyawan" placeholder="Nama Karyawan" required/>
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
                <label for="agama">Agama</label>
                <select name="agama" class="form-control" required>
                                    <option value="">-Pilih Agama-</option>
                                    <option value="islam">-Islam-</option>
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
								<label for="nik" >NIK</label>
								<input class="form-control" value="" type="text" name="nik" placeholder="NIK" required/>
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
								<label for="foto" >Foto Karyawan</label>
								<input class="form-control-file <?//=$row->foto ?>"
								 type="file" name="foto" />
								<div class="invalid-feedback">
								</div>
							</div>
              
              <div class="form-group">
								<label for="status_karyawan">Status Karyawan</label>
								<select name="status_karyawan" class="form-control" required>
                                    <option value="">-Status Karyawan-</option>
                                    <option value="cleaning service">-Cleaning Service-</option>
                                    <option value="penjaga kantin">-Penjaga Kantin-</option>
                                    <option value="satpam">-Satpam-</option>
                                    <option value="penjaga perpus">-Penjaga Perpus-</option>
                                </select>
								<div class="invalid-feedback">
								</div>
							</div>
              
              <div class="modal-footer justify-content-between">
                <button type="reset" class="btn btn-default">reset</button>
                <button type="submit" value="simpan" class="btn btn-primary" name="tambah">Input Data Karyawan</button>
              </div>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      
      <?php 
        require "./komponen/vendor/autoload.php";
      ?>       
      </div>
      <!-- /.modal -->

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Agama</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Email</th>
                      <th>Status Karyawan</th>
                      <th>Foto</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  include "./konfig/koneksi.php";

                    $no = 1;
                    $karyawan = mysqli_query($koneksi, "select id_karyawan, nama_karyawan, tgl_lahir, jenis_kelamin, agama, alamat, telepon, email, status_karyawan, foto from karyawan") or die(mysqli_error($koneksi));
                    if(mysqli_num_rows($karyawan) > 0){
                      while($data = mysqli_fetch_array($karyawan)) { 
                        ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          
                          <td><?php echo $data['nama_karyawan'];?></td>
                          <td><?php echo $data['tgl_lahir']?></td>
                          <td><?php echo $data['jenis_kelamin']?></td>
                          <td><?php echo $data['agama']?></td>
                          <td><?php echo $data['alamat']?></td>
                          <td><?php echo $data['telepon']?></td>
                          <td><?php echo $data['email']?></td>
                          <td><?php echo $data['status_karyawan']?></td>
                          <td>
                          <img src="./upload/<?php echo $data['foto'];?>" style="height: 100px;"/>  
                          </td>
                          <td>
                            <a href="index?page=karyawan_edit&amp;id=<?php echo $data['id_karyawan'];?>" class="btn btn-block btn-primary btn-xs">
                            <i class="fas fa-edit"></i>
                            Edit
                            </a>
                            <a href="index?page=karyawan_delete&amp;id=<?php echo $data['id_karyawan'];?>" onClick="return confirm('Yakin Akan Menghapus Data?')" class="btn btn-block btn-danger btn-xs">
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