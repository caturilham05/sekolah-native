<?php

    @session_start();

    $host = "localhost";
    $user = "root";
    $password = "";
    $nama_db = "sekolah";

    $koneksi = mysqli_connect($host, $user, $password, $nama_db);
    
    //!check koneksi
    if(mysqli_connect_errno()){
        echo "koneksi database gagal : " . mysqli_connect_error();
    }
?>