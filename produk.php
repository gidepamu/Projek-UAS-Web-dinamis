<?php
    include "connection.php";
    session_start();
  
  
    $isValid = false;
    if(empty($_SESSION['username'])){
      $isValid = false;
    }else{
      $isValid = true;    
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
    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select name="" id="">
                <option value="">Filter</option>
                <option value="">Harga</option>
                <option value="">Populer</option>
                <option value="">Rating</option>
            </select>
        </div>

        <div class="row">
            <div class="col-4">
                <a href="detailProduk.php"><img src="img/koala.jpg" alt=""></a>
                <a href="detailProduk.php">Koala Kumal: (Edisi Revisi) Raditya Dika</a>
                <a href="detailProduk.php">Rp. 67.000,-</a>
            </div>
            <div class="col-4">
               <a href="detailToko2.html"><img src="img/ubur.jpg" alt=""></a>
               <a href="detailToko2.html"><h4>Ubur-Ubur Lemburl: (Edisi Revisi) Raditya Dika</h4></a> 
               <a href="detailToko2.html"><p>Rp. 66.000,-</p></a>             
            </div>
            <div class="col-4">
                <a href="detailToko3.html"><img src="img/cinta.jpg" alt=""></a>
                <a href="detailToko3.html"><h4>Cinta Brontosaurus: (Edisi Revisi) Raditya Dika</h4></a>
                <a href="detailToko3.html"><p>Rp. 45.000,-</p></a>               
            </div>
            <div class="col-4">
                <a href="detailToko4.html"><img src="img/salmon.png" alt=""></a>
                <a href="detailToko4.html"><h4>Manusia Setengah Salmon: (Edisi Revisi) Raditya Dika png</h4></a>
                <a href="detailToko4.html"><p>Rp. 66.000,-</p></a>                
            </div>
            <div class="col-4">
                <a href="detailToko.html"><img src="img/koala.jpg" alt=""></a>
                <a href="detailToko.html">Koala Kumal: (Edisi Revisi) Raditya Dika</a>
                <a href="detailToko.html">Rp. 67.000,-</a>
            </div>
            <div class="col-4">
               <a href="detailToko2.html"><img src="img/ubur.jpg" alt=""></a>
               <a href="detailToko2.html"><h4>Ubur-Ubur Lemburl: (Edisi Revisi) Raditya Dika</h4></a> 
               <a href="detailToko2.html"><p>Rp. 66.000,-</p></a>             
            </div>
            <div class="col-4">
                <a href="detailToko3.html"><img src="img/cinta.jpg" alt=""></a>
                <a href="detailToko3.html"><h4>Cinta Brontosaurus: (Edisi Revisi) Raditya Dika</h4></a>
                <a href="detailToko3.html"><p>Rp. 45.000,-</p></a>               
            </div>
            <div class="col-4">
                <a href="detailToko4.html"><img src="img/salmon.png" alt=""></a>
                <a href="detailToko4.html"><h4>Manusia Setengah Salmon: (Edisi Revisi) Raditya Dika png</h4></a>
                <a href="detailToko4.html"><p>Rp. 66.000,-</p></a>                
            </div>
        </div>
    </div>
    <div class="halaman">
            <span class="active-2">1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>...</span>
            <span>></span>
    </div>
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
</body>
</html>