<?php
    include "connection.php";
    session_start();
  
  
    $isValid = false;
    if(empty($_SESSION['username'])){
      $isValid = false;
    }else{
      $isValid = true;    
    }
    if($_POST){
        if($_POST['nama']!='' && $_POST['kategori']!='' && $_POST['harga']!='' && $_POST['tag']!='' && $_POST['keyword']!='' && !empty($_FILES['foto']['name'])) 
        {
            $isValid = true;

            if($_FILES['foto']['size'] > 10000000){
                $isValid = false;
                echo '<script>alert("File yang diupload tidak boleh lebih dari 10MB")</script>';
            }

            $fileType = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));

            if($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png'){
                $isValid = false;
                echo '<script>alert("File yang diupload bukan gambar")</script>';
            }

            if($isValid){
                $path = $_FILES['foto']['name'];
                if(move_uploaded_file($_FILES['foto']['tmp_name'], $path)){
                    $query = "INSERT INTO produk VALUES ('','".$_POST["nama"]."','".$_POST["kategori"]."','".$_POST["harga"]."','".$_POST["tag"]."','".$_POST["keyword"]."', '".$path."')";
                    $res = mysqli_query($conn, $query);
                    echo '<script>alert("File berhasil diupload");window.location="index2.php";</script>';
                }
            }

        }
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
                        <li><a href="index2.php"><?php echo $_SESSION['username'] ?></a></li>
                    </ul>
                </nav>
                <img src="img/cart.png" width="30px" height="30px">
                <img src="img/menu.png" class="menu-icon" onclick="menu()">
            </div>
        </div>
    
    <!-- fitur produk -->
    <?php
    if($isValid){?>
    <form method="post" enctype="multipart/form-data" >
      <label for="nama" > Nama Produk : </label>
      <input type="text" name="nama" id="nama">
      <h5 id="errNama" ></h5>

      <label for="kategori" > kategori : </label>
      <input type="text" name="kategori" id="kategori">
      <h5 id="errKategori"></h5>

      <label for="harga" > harga : </label>
      <input type="text" name="harga" id="harga">
      <h5 id="errHarga" ></h5>

      <label for="tag" > tag : </label>
      <input type="text" name="tag" id="tag">
      <h5 id="errTag" ></h5>

      <label for="keyword" > keyword : </label>
      <input type="text" name="keyword" id="keyword">
      <h5 id="errKeyword" ></h5>

      <label for="foto" > Upload Image : </label>
      <input type="file" name="foto" id="foto">
      <h5 id="errFoto" ></h5>

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