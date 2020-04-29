<div class="whole-wrap">
    <div class="container">
	    <h3 class="mb-30 title_color text-center">Kelas Ilmu Pengetahuan Alam</h3>
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
                    $kelas = mysqli_query($koneksi, "select kode_kelas, nama_kelas, nama_guru, tingkat_kelas from kelas where nama_kelas = 'Ilmu Pengetahuan Alam'") or die(mysqli_error($koneksi));

                    while($data = mysqli_fetch_assoc($kelas)){
                        
                        $no = $no++;
                        $kodekelas = $data['kode_kelas'];
                        $namakelas = $data['nama_kelas'];
                        $namaguru = $data['nama_guru'];
                        $tingkatkelas = $data['tingkat_kelas'];

                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$kodekelas."</td>";
                        echo "<td>".$namakelas."</td>";
                        echo "<td>".$namaguru."</td>";
                        echo "<td>".$tingkatkelas."</td>";
                        echo "<td><button  id='detail' class='genric-btn info radius siswa' data-toggle='modal' data-id='".$kodekelas."'><strong>Siswa</strong></button></td>"; 
                        echo "</tr>";

                    } ?>
                </tbody>
            </table>
        </div>			
    </div>
</div>

                  
                    
                     
      <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-center">Kelompok Kelas IPA</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body"></div>
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
						<h3 class="mb-30 title_color">Ilmu Pengetahun Alam (IPA)</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									"Ilmu Pengetahuan Alam adalah lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ducimus corporis, exercitationem deleniti quia vitae nostrum nobis temporibus, laudantium ut neque quidem animi odit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sed cum rem pariatur atque culpa, aperiam temporibus tenetur, cupiditate magnam, voluptas facilis cumque libero consectetur debitis quis repellat qui harum. - Albert Enstein"
								</blockquote>
							</div>
						</div>
					</div>
    </div>
</div> 

<script>
    $(document).ready(function(){
        $('.siswa').click(function(){
            var kode = $(this).data('kodekelas');

            $.ajax({
                url: 'modal-ipa.php',
                type: 'post',
                data: {kode : kode},
                success: function(response){
                    $('.modal-body').html(response);

                    $('#modal-primary').modal(show);
                }
            });
        })
    })
</script>
<!-- select kelas.kode_kelas, kelas.nama_kelas, guru.nama_guru, siswa.nama, kelas.tingkat_kelas, kelas.status_keaktifan from kelas, guru, siswa where guru.nip = kelas.nip
 -->

 <!-- select kelas.kode_kelas, kelas.nama_kelas, guru.nama_guru, siswa.nama, kelas.tingkat_kelas, kelas.status_keaktifan from kelas, guru, siswa where guru.nip = kelas.nip and kelas.nama_kelas = "Ilmu Pengetahuan Alam"
 -->

  <!-- select kelas.kode_kelas, kelas.nama_kelas, guru.nama_guru, siswa.nama, kelas.tingkat_kelas, kelas.status_keaktifan from kelas, guru, siswa where guru.nip = kelas.nip and kelas.nama_kelas = 'Ilmu Pengetahuan Alam' and kelas.tingkat_kelas = '1' and siswa.status_siswa = 'aktif'  -->

