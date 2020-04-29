<?php
    require_once "../konfig/koneksi.php";
    require "../komponen/vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisifiedDependencyException;

    if(isset($_POST['tambah'])){
        $uuid = Uuid::uuid4()->toString();
        $nama_blog = trim(mysqli_real_escape_string($koneksi, $_POST['nama_blog']));
        $foto = trim(mysqli_real_escape_string($koneksi, $_FILES['foto']['name']));
        $konten = trim(mysqli_real_escape_string($koneksi, $_POST['konten']));

        if($foto != "null"){
            $format = array('png', 'jpg');
            $x = explode('.', $foto);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto']['tmp_name'];
            $angka_acak = substr(md5(rand()),0,10);
            $nama_gambar_baru = $angka_acak.'-'.$foto;
                if(in_array($ekstensi, $format)==true){
                    move_uploaded_file($file_tmp, '../upload/'.$nama_gambar_baru);

                    mysqli_query($koneksi, "insert into blog (id_blog, nama_blog, konten, foto) values ('$uuid', '$nama_blog', '$konten', '$nama_gambar_baru')") or die (mysqli_error($koneksi));
                }
                echo "<script>window.location = '../index?page=blog';</script>";
            }
    }else if(isset($_POST['edit'])){

    }
    echo "<script>window.location = '../index?page=blog';</script>";



?>