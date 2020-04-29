<?php 
    require_once "./konfig/koneksi.php";

    mysqli_query($koneksi, "delete from guru where id_guru = '$_GET[id]'") or die (mysqli_error($koneksi));

    echo "<script>window.location = './index?page=guru';</script>";
?>