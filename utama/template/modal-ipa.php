<?php 
  include "../konfig/koneksi.php";
  
  if(isset($_POST['kode'])){
      $kode = $_POST['kode'];
      $output = '';
      $output .= '
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.<th>
                        <th>Kode Kelas<th>
                        <th>Nama Kelas<th>
                        <th>Nama Siswa<th>
                        <th>Tingkat Kelas<th>
                        <th>Status Keaktifan<th>
                    </tr>
                    </thead>';
      $no = 1;
      $siswa = mysqli_query($koneksi, "select kelas.kode_kelas, kelas.nama_kelas, siswa.nama, kelas.tingkat_kelas, kelas.status_keaktifan from kelas, guru, siswa where guru.nip = kelas.nip and kelas.nama_kelas = 'Ilmu Pengetahuan Alam' and siswa.status_siswa = 'aktif' and kode_kelas='".$_POST['kode']."'") or die(mysqli_error($koneksi));


        while($data = mysqli_fetch_array($siswa)){
            $output .= ' <tbody>
                <tr>
                    <td>'.$no++.'</td>
                    <td><td>'.$data['kode_kelas'].'</td></td>
                    <td><td>'.$data['nama_kelas'].'</td></td>
                    <td><td>'.$data['nama'].'</td></td>
                    <td><td>'.$data['tingkat_kelas'].'</td>
                    <td><td>'.$data['status_keaktifan'].'</td></td>
                </tr>
            ';
        }
        $output .= '</tbody></table></div>';
        echo $output;
  }
                    
?>

