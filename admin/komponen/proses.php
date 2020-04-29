<?php
    require_once "../konfig/koneksi.php";
    require "vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    if(isset($_POST['tambah'])){
        $uuid = Uuid::uuid4()->toString();
        $nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama']));
        $tempat_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']));
        $tgl_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']));
        $jenis_kelamin = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $agama = trim(mysqli_real_escape_string($koneksi, $_POST['agama']));
        $telepon = trim(mysqli_real_escape_string($koneksi, $_POST['telepon']));
        $email = trim(mysqli_real_escape_string($koneksi, $_POST['email']));
        $nama_ayah = trim(mysqli_real_escape_string($koneksi, $_POST['nama_ayah']));
        $nama_ibu = trim(mysqli_real_escape_string($koneksi, $_POST['nama_ibu']));
        $alamat_ortu = trim(mysqli_real_escape_string($koneksi, $_POST['alamat_ortu']));
        $telepon_ortu = trim(mysqli_real_escape_string($koneksi, $_POST['telepon_ortu']));
        $sekolah_asal = trim(mysqli_real_escape_string($koneksi, $_POST['sekolah_asal']));
        $foto = trim(mysqli_real_escape_string($koneksi, $_FILES['foto']['name']));
        $status_siswa = trim(mysqli_real_escape_string($koneksi, $_POST['status_siswa']));

        if($foto != "null"){
            $format = array('png', 'jpg');
            $x = explode('.', $foto);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto']['tmp_name'];
            $angka_acak = substr(md5(rand()),0,10);
            $nama_gambar_baru = $angka_acak.'-'.$foto;
                if(in_array($ekstensi, $format)==true){
                    move_uploaded_file($file_tmp, '../upload/'.$nama_gambar_baru);
                    mysqli_query($koneksi, "insert into siswa (id_siswa, nama, tempat_lahir, tgl_lahir, jenis_kelamin, alamat, agama, telepon, email, nama_ayah, nama_ibu, alamat_ortu, telepon_ortu, sekolah_asal, foto, status_siswa) values ('$uuid', '$nama', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin',  '$alamat','$agama', '$telepon', '$email', '$nama_ayah', '$nama_ibu', '$alamat_ortu', '$telepon_ortu', '$sekolah_asal', '$nama_gambar_baru', '$status_siswa')") or die (mysqli_error($koneksi));
                        
                }
                echo "<script>window.location = '../index?page=siswa';</script>";
            }
        }
        else if(isset($_POST['edit'])) {
        $id = $_POST['id_siswa'];
        $nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama']));
        $tempat_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']));
        $tgl_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']));
        $jenis_kelamin = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $agama = trim(mysqli_real_escape_string($koneksi, $_POST['agama']));
        $telepon = trim(mysqli_real_escape_string($koneksi, $_POST['telepon']));
        $email = trim(mysqli_real_escape_string($koneksi, $_POST['email']));
        $nama_ayah = trim(mysqli_real_escape_string($koneksi, $_POST['nama_ayah']));
        $nama_ibu = trim(mysqli_real_escape_string($koneksi, $_POST['nama_ibu']));
        $alamat_ortu = trim(mysqli_real_escape_string($koneksi, $_POST['alamat_ortu']));
        $telepon_ortu = trim(mysqli_real_escape_string($koneksi, $_POST['telepon_ortu']));
        $sekolah_asal = trim(mysqli_real_escape_string($koneksi, $_POST['sekolah_asal']));
        //$foto = trim(mysqli_real_escape_string($koneksi, $_FILES['foto']['name']));
        $status_siswa = trim(mysqli_real_escape_string($koneksi, $_POST['status_siswa']));

        // if($foto != "null"){
        //     $format = array('png', 'jpg');
        //     $x = explode('.', $foto);
        //     $ekstensi = strtolower(end($x));
        //     $file_tmp = $_FILES['foto']['tmp_name'];
        //     $angka_acak = substr(md5(rand()),0,10);
        //     $nama_gambar_baru = $angka_acak.'-'.$foto;
        //         if(in_array($ekstensi, $format)===true){
        //             move_uploaded_file($file_tmp, '../upload/'.$nama_gambar_baru);
        mysqli_query($koneksi, "update siswa set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', agama='$agama', telepon='$telepon', email='$email', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', alamat_ortu='$alamat_ortu', telepon_ortu='$telepon_ortu', sekolah_asal='$sekolah_asal', status_siswa='$status_siswa' where id_siswa='$id'") or die (mysqli_error($koneksi));

        }
    echo "<script>window.location = '../index?page=siswa';</script>";
?>

<!-- foto='$nama_gambar_baru', -->