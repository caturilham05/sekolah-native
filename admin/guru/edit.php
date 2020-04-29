    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Edit Data Guru</h3>
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
                    $guru = mysqli_query($koneksi, "select * from guru where id_guru = '$id'") or die (mysqli_error($koneksi));

                    $data = mysqli_fetch_array($guru);
                ?>
                <div>
                <form action="./guru/proses.php" method="post" enctype="multipart/form-data">
                <div class="form-group pl-2 pr-2">
                                    <label for="nip" >NIP</label>
                                    <input type="hidden" name="id_guru" value="<?php echo $data['id_guru']?>">
                                    <input class="form-control" value="<?php echo $data['nip']?>" type="text" name="nip" placeholder="Nomor Induk Pegawai" readonly/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>

                <div class="form-group pl-2 pr-2">
                                    <label for="nama" >Nama Guru</label>
                                    <input class="form-control" value="<?php echo $data['nama_guru']?>" type="text" name="nama_guru" placeholder="Nama Guru" readonly/>
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
                                    <label for="nik" >NIK</label>
                                    <input class="form-control" value="<?php echo $data['nik']?>" type="text" name="nik" placeholder="NIK" required/>
                                    <div class="invalid-feedback">
                                    </div>
                </div>

                <div class="form-group pl-2 pr-2">
                                    <label for="alamat" >Alamat</label>
                                    <input class="form-control" value="<?php echo $data['alamat']?>" type="text" name="alamat" placeholder="Alamat" required/>
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
                                    <label for="foto" >Foto Guru</label>
                                    <input class="form-control-file <?//=$row->foto ?>"
                                    type="file" name="foto" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                
                <div class="form-group pl-2 pr-2">
                                    <label for="status_keaktifan">Status Guru</label>
                                    <select name="status_keaktifan"  class="form-control" required>
                                        <option>- Status Guru -</option>
                                        <option value="honorer"
                                        <?php 
                                            if($data["status_keaktifan"] =='honorer' )

                                            echo "selected";
                                        ?>
                                        >-Aktif-</option>
                                        <option value="pegawai negeri"
                                        <?php 
                                            if($data["status_keaktifan"] =='pegawai negeri' )

                                            echo "selected";
                                        ?>
                                        >-Tidak Aktif-</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                
                <div class="modal-footer" style="float: right;">
                    <button type="submit" value="simpan" class="btn btn-primary" name="edit">Edit Data Guru</button>
                </div>
            </form>
                </div>
 
            </div>
        </div>
    </div>
