<?php
    include "connection.php";

    if($_GET){
        //mengambil id yang ingin dihapus
        $id= $_GET['id'];
        //jalankan query DELETE untuk menghapus data
        $query = "DELETE FROM produk where id='".$id."'";
        //periksa query, apakah ada kesalahan
        if(mysqli_query($conn,$query)){
            echo "<script>alert('Berhasil menghapus data');window.location='index2.php';</script>";
        }else{
            echo "gagal menghapus data";
        }
        
    }
    
?>