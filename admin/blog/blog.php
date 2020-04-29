<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <h3 class=" text-center">Blog</h3>
              </div>

              <!-- Modal Input -->
            <div class="mt-3 mr-4 mb-3">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary" style="float: right">
              <i class="fas fa-plus"></i>&nbsp;&nbsp; 
                    Buat Blog
              </button>
            </div>

            <?php 
        include "./komponen/vendor/autoload.php";

      ?>             
      <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buat Blog</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="./blog/proses.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
								<label for="nama_blog" >Judul</label>
								 <input type="hidden" name="id_blog" value="">
								<input class="form-control" value="" type="text" name="nama_blog" placeholder="Judul Blog" required/>
								<div class="invalid-feedback">
								</div>
              </div>

              <div class="form-group">
								<label for="konten" >Konten</label>
								<textarea class="form-control" type="text" name="konten" placeholder="Konten">
                </textarea>
								<div class="invalid-feedback">
								</div>
              </div>

              <div class="form-group">
								<label for="foto" >Foto Konten</label>
								<input class="form-control-file <?//=$row->foto ?>"
								 type="file" name="foto" />
								<div class="invalid-feedback">
								</div>
							</div>
              
              <div class="modal-footer justify-content-between">
                <button type="reset" class="btn btn-default">reset</button>
                <button type="submit" value="simpan" class="btn btn-primary" name="tambah">Buat Blog</button>
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
                      <th>Judul</th>
                      <th>Konten</th>
                      <th>Foto</th>
                      <th>created</th>
                      <th>updated</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  include "./konfig/koneksi.php";

                    $no = 1;
                    $blog = mysqli_query($koneksi, "select * from blog") or die(mysqli_error($koneksi));
                    if(mysqli_num_rows($blog) > 0){
                      while($data = mysqli_fetch_array($blog)) { 
                        ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php echo $data['nama_blog'];?></td>
                          <td><?php echo $data['konten'];?></td>
                          <td><img src="./upload/<?php echo $data['foto'];?>" style="height: 100px;"/>  
                          </td>
                          <td><?php echo $data['created']?></td>
                          <td><?php echo $data['updated']?></td>
                          <td>
                            <a href="index?page=edit_guru&amp;id=<?php //echo $data['id_guru'];?>" class="btn btn-block btn-primary btn-xs">
                            <i class="fas fa-edit"></i>
                            Edit
                            </a>
                            <a href="index?page=delete_guru&amp;id=<?php //echo $data['id_guru'];?>" onClick="return confirm('Yakin Akan Menghapus Data?')" class="btn btn-block btn-danger btn-xs">
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