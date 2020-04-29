<?php 
    require_once "./konfig/koneksi.php";

    //mysqli_query($koneksi, "delete from siswa where id_siswa = '$_GET[id]'") or die (mysqli_error($koneksi));

    $id = $_GET['id'];
    $siswa = mysqli_fetch_array(mysqli_query($koneksi, "select * from siswa where id_siswa = '$id'"));
    $angka_acak = substr(md5(rand()),0,10);
    $foto = $siswa['foto'];

    if(file_exists("../upload/".$foto)){
        unlink("../upload/".$foto);
    }else{
        echo "gagal hapus foto!";
    }
    
$hapus = mysqli_query($koneksi, "delete from siswa where id_siswa = '$id'") or die (mysqli_error($koneksi));
    echo "<script>window.location = './index?page=siswa';</script>";
?>