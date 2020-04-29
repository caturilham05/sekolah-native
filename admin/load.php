<?php
    $page = (isset($_GET["page"]))?$_GET["page"] : "main";

    switch ($page){
        case "masuk":
            include "komponen/home.php";
        break;

        case "home":
            include "komponen/home.php";
        break;

        case "siswa":
            include "komponen/siswa.php";
        break;

        case "guru":
            include "guru/guru.php";
        break;
            
        case "karyawan_edit":
            include "guru/karyawan_e.php";
        break;
        
        case "karyawan_delete":
            include "guru/karyawan_d.php";
        break;
        
        case "karyawan":
            include "guru/karyawan.php";
        break;
        
        case "pendaftaran":
            include "komponen/pendaftaran.php";
        break;

        case "edit":
            include "komponen/edit.php";
        break;
        
        case "edit_guru":
            include "guru/edit.php";
        break;

        case "delete":
            include "komponen/delete.php";
        break;
        
        case "delete_guru":
            include "guru/delete.php";
        break;
        
        case "blog":
            include "blog/blog.php";
        break;

        case "main":
            default:
            include "komponen/home.php";
        break;
}

?>