<?php 
    require_once "./konfig/koneksi.php";

    unset($_SESSION['username']);
    echo "<script>window.location = '../';</script>";
?>