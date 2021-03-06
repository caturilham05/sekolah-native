<?php
    require_once "../konfig/koneksi.php";
    require "../komponen/vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    if(isset($_POST['tambah'])){
        $uuid = Uuid::uuid4()->toString();
        $nip = trim(mysqli_real_escape_string($koneksi, $_POST['nip']));
        $nama_guru = trim(mysqli_real_escape_string($koneksi, $_POST['nama_guru']));
        $tempat_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']));
        $tgl_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']));
        $jenis_kelamin = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']));
        $agama = trim(mysqli_real_escape_string($koneksi, $_POST['agama']));
        $nik = trim(mysqli_real_escape_string($koneksi, $_POST['nik']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $telepon = trim(mysqli_real_escape_string($koneksi, $_POST['telepon']));
        $email = trim(mysqli_real_escape_string($koneksi, $_POST['email']));
        $foto = trim(mysqli_real_escape_string($koneksi, $_FILES['foto']['name']));
        $status_keaktifan = trim(mysqli_real_escape_string($koneksi, $_POST['status_keaktifan']));

        if($foto != "null"){
            $format = array('png', 'jpg');
            $x = explode('.', $foto);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto']['tmp_name'];
            $angka_acak = substr(md5(rand()),0,10);
            $nama_gambar_baru = $angka_acak.'-'.$foto;
                if(in_array($ekstensi, $format)===true){
                    move_uploaded_file($file_tmp, '../upload/'.$nama_gambar_baru);
                    mysqli_query($koneksi, "insert into guru (id_guru, nip, nama_guru, tempat_lahir, tgl_lahir, jenis_kelamin, agama, nik, alamat, telepon, email, status_keaktifan, foto) values ('$uuid', '$nip', '$nama_guru', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin','$agama', '$nik', '$alamat', '$telepon', '$email',  '$status_keaktifan', '$nama_gambar_baru')") or die (mysqli_error($koneksi));
                }
                echo "<script>window.location = '../index?page=guru';</script>";
            }

    }else if(isset($_POST['edit'])) {
        $id = $_POST['id_guru'];
        $nip = trim(mysqli_real_escape_string($koneksi, $_POST['nip']));
        $nama_guru = trim(mysqli_real_escape_string($koneksi, $_POST['nama_guru']));
        $tempat_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']));
        $tgl_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']));
        $jenis_kelamin = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']));
        $agama = trim(mysqli_real_escape_string($koneksi, $_POST['agama']));
        $nik = trim(mysqli_real_escape_string($koneksi, $_POST['nik']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $telepon = trim(mysqli_real_escape_string($koneksi, $_POST['telepon']));
        $email = trim(mysqli_real_escape_string($koneksi, $_POST['email']));
        //$foto = trim(mysqli_real_escape_string($koneksi, $_FILES['foto']['name']));
        $status_keaktifan = trim(mysqli_real_escape_string($koneksi, $_POST['status_keaktifan']));
        
        mysqli_query($koneksi, "update guru set nip = '$nip', nama_guru='$nama_guru', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', nik='$nik',  alamat='$alamat', telepon='$telepon', email='$email', status_keaktifan='$status_keaktifan' where id_guru='$id'") or die (mysqli_error($koneksi));

        echo "<script>window.location = '../index?page=guru';</script>";
    }
?>