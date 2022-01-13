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
                        <li><a onclick="return confirm('Apakah anda ingin keluar?')" href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <img src="img/cart.png" width="30px" height="30px">
                <img src="img/menu.png" class="menu-icon" onclick="menu()">
            </div>
        </div>
    <!-- detail produk -->
    <div class="small-container single">
        <div class="row">
            <div class="col-2">
                <img src="img/koala.jpg" width="100%" id="produk-img">
                <div class="gambar-kecil">
                    <div class="gambar-kolom">
                        <img src="img/cinta.jpg" width="100%" class="small-img">
                    </div>
                    <div class="gambar-kolom">
                        <img src="img/salmon.png" width="100%" class="small-img">
                    </div>
                    <div class="gambar-kolom">
                        <img src="img/daun.png" width="100%" class="small-img">
                    </div>
                    <div class="gambar-kolom">
                        <img src="img/pulang.png" width="100%" class="small-img">
                    </div>
                </div>            
            </div>
            <div class="col-2">
                
                    <p>Home / Novel</p>
                    <h1>Koala Kumal: (Edisi Revisi) Raditya Dika</h1>
                    <h4>Rp. 67.000</h4>

                    <input type="number" value="1">
                    <a href=""class="button">+ Tambahkan ke Keranjang</a>
                    <a href=""class="button">Beli Sekarang</a>

                    <h3>Detail Produk</h3><br>
                    <p>Selamat datang di G-STORE, Kami Sangat Mengutamakan Kualitas Produk dan kenyamanan berbelanja anda, Ada baiknya terlebih dahulu untuk membaca deskripsi produk berikut : </p>
                    <p class="penulis">
                        Penulis : Raditya Dika<br>
                        Penerbit : Gagasmedia<br>
                        Tahun Terbit : 2017<br>
                        ISBN : 978-979-780-899-0<br>
                        Jumlah Halaman : 240 Halaman<br>
                    </p>
                    
                    <h3>SINOPSIS :</h3><br>
                    <p>
                        Selain main perang-perangan, gue, Dodo, dan Bahri juga suka berjemur di atas mobil tua warna merah yang sering diparkir di pinggir sungai samping kompleks. Formasinya selalu sama: Bahri dan gue tiduran di atap mobil, sedangkan Dodo, seperti biasa, agak terbuang, di atas bagasi.
                        Kadang kami tiduran selama setengah jam. Kadang, kalau cuaca lagi sangat terik, bisa sampai dua jam. Kalau cuacanya lagi sejuk dan tidak terlalu terik, kami biasanya sama-sama menatap ke arah matahari, memandangi langit sambil tiduran.Kalau sudah begini, Bahri menaruh kedua tangannya di belakang kepala, sambil tiduran dia berkata,Rasanya kayak di Miami, ya?"
                        "Iya," jawab gue."Iya," jawab Dodo.Kami bertiga gak ada yang pernah ke Miami.Koala Kumal adalah buku komedi yang menceritakan pengalaman Raditya Dika dari mulai jurit malam SMP yang berakhir dengan kekacauan sampai bertemu perempuan yang mahir bermain tombak.
                        Seluruh cerita di dalamnya berasal dari kisah nyata.
                    </p><br>
                    <a href="">#buku</a><a href="">#novel</a><a href="">#radit</a>
            </div>
        </div>
    </div>
    <!-- judul -->
<div class="small-container">
    <div class="row row-2">
        <h2>Produk lainnya</h2>
        <p>Lihat Lebih Banyak</p>
    </div>
</div>

    <!-- fitur produk -->
    <div class="small-container">
        
        <div class="row">
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

    <!-- js produk -->
    <script>
        var ProdukImg = document.getElementById("produk-img");
        var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function(){
                ProdukImg .src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function(){
                ProdukImg .src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function(){
                ProdukImg .src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function(){
                ProdukImg .src = SmallImg[3].src;
            }
    </script>
</body>
</html>