<?php 
    if(isset($_SESSION['username'])){
         echo "<script>window.location = '../admin';</script>";
     }else{
         echo "<script>window.location = './utama';</script>";
     }
?>