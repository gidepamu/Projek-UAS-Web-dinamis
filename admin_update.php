<?php
    include "connection.php";    
    session_start();
  
  
    $isValid = false;
    if(empty($_SESSION['username'])){
      $isValid = false;
    }else{
      $isValid = true;    
    }
    // mengecek apakah di url ada nilai GET id
    if(isset($_GET['id'])){
        // ambil nilai id dari url dan disimpan dalam variabel $id
        $id = $_GET['id'];
        // menampilkan data dari database yang mempunyai id=$id
        $query ="SELECT * FROM produk where id = '$id'";
        $res = mysqli_query($conn, $query);
        // jika data gagal diambil maka akan tampil error berikut
        if(!$res){
            die("Query ERROR: ".mysqli_errno($conn)."-".mysqli_error($conn));
        }
        // mengambil data dari database
        $data = mysqli_fetch_assoc($res);
        // apabila data tidak ada pada database maka akan dijalankan perintah ini
        if(!count($data)){
            echo  "<script>alert('Data tidak ditemukan pada tabel.');window.location='index2.php';</script>" ;  
        }
    }else {
        // apabila tidak ada data GET id pada akan di redirect ke index.php
        echo "<script>alert('Masukkan data id.');window.location='index2.php';</script>";
    }  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL Products - BOOKSTORE</title>
    <link rel="stylesheet" href="index.css">
    <script src="validasi.js"></script>
</head>
<body>
    
        <div class="container">
            <div class="nav">
                <div class="logo">
                <img src="img/logobaru.png" width="125px" alt="">                
                </div>
                <nav>
                    <ul id="Menu"> 
                        <li><a href="index.php">Home</a></li>
                        <li><a href="">Produk</a></li>
                        <li><a href="">Tentang Kami</a></li>
                        <li><a href="">Kontak</a></li>
                        <li><a href="admin.php"><?php echo $_SESSION['username'] ?></a></li>
                    </ul>
                </nav>
                <img src="img/cart.png" width="30px" height="30px">
                <img src="img/menu.png" class="menu-icon" onclick="menu()">
            </div>
        </div>
    
    <!-- fitur produk -->
    <h1 class="button">Edit Produk</h1>
    <?php
    if($isValid){?>
    <form method="post" action="admin_update2.php" enctype="multipart/form-data" >
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />

      <label for="nama" > Nama Produk : </label>
      <input type="text" name="nama" value="<?php echo $data['nama']; ?>" id="nama">
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
      <h5 id="errNama" ></h5>

      <label for="kategori" > kategori : </label>
      <input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" id="kategori">
      <h5 id="errKategori"></h5>

      <label for="harga" > harga : </label>
      <input type="text" name="harga" value="<?php echo $data['harga']; ?>" id="harga">
      <h5 id="errHarga" ></h5>

      <label for="tag" > tag : </label>
      <input type="text" name="tag" value="<?php echo $data['tag']; ?>" id="tag">
      <h5 id="errTag" ></h5>

      <label for="keyword" > keyword : </label>
      <input type="text" name="keyword" value="<?php echo $data['keyword']; ?>" id="keyword">
      <h5 id="errKeyword" ></h5>

      <label for="foto" > Upload Image : </label>
      <img src="<?php $data['foto']; ?>" style="width: 12opx;" alt=""> 
      <input type="file" name="foto" id="foto">
      <i>Abaikan jika tidak ingin mengubah gambar</i>

      <div>
        <input type="submit" class="button" value="SUBMIT" id="submit">
      </div>
  </form>
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Dapatkan App Kami</h3>
                    <p>Download App untuk Android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="img/app-store.png" alt="">
                        <img src="img/play-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="img/large (1).png" alt="">
                    <p>Download App untuk Android and ios mobile phone</p>
                </div>
                <div class="footer-col-3">
                    <h3>Link</h3>
                    <ul>
                        <li>Kupon</li>
                        <li>Kebijakan pengembalian</li>
                    </ul> 
                </div>
                <div class="footer-col-4">
                    <h3>Ikuti Kami</h3>
                    <ul>
                        <li>Instagram</li>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul> 
                </div>                
            </div>
            <hr>
            <p class="cpy">Copyright 2019 - G-STORE</p>
        </div>
    </div>
    <!-- js -->
    <script>
        var Menu = document.getElementById("Menu");
        Menu.style.maxHeight = "0px";

        function menu(){
            if( Menu.style.maxHeight == "0px"){
                Menu.style.maxHeight = "220px";
            }else{
                Menu.style.maxHeight = "0px";
            }
        }
    </script>
    <?php
    }else{
        header('location: index.php');
    }
?>
</body>
</html>