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
    <title>BOOKSTORE</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="nav">
                <div class="logo">
                <img src="img/logobaru.png" width="125px" alt="">                
                </div>
                <nav>
                    <ul id="Menu"> 
                        <li><a href="index.php">Home</a></li>
                        <li><a href="produk.php">Produk</a></li>
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
    </div>    

    <!-- fitur produk -->
    <div class="small-container">
        <h2 class="title">Dashboard ADMIN</h2>
        <div class="col-2">
            <a href="admin.php" class="button">Tambah Data</a>
        </div>
        <div class="row">
            
            <?php
            $query = "SELECT * FROM produk";
            $res = mysqli_query($conn, $query);

                while($row = $res->fetch_array()):?>
                    <?php $harga = number_format($row["harga"],2,',','.');?>
                                  
                <div class="col-4">
                    <a href="detailProduk.php"><img src="<?php echo $row["foto"];?>" alt=""></a>
                    <a href="detailProduk.php"><h4><?php echo $row["nama"];?></h4></a><br>
                    <a href="detailProduk.php"><p>Rp <?php echo $harga;?></p></a>
                    <a href=<?php echo "admin_update.php?id=".$row['id'];?> class="button"> ubah</a>
                    <a onclick="return confirm('Apakah anda yakin?')" href=<?php  echo"admin_delete.php?id=".$row['id'];?> class="button"> hapus</a>
                </div>
                <?php
                    endwhile;
                ?>
               
            
           
        </div>
    </div>
    <!-- brand -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="img/jne.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/jnt.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/sicepat.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/ovo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/dana.png" alt="">
                </div>
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
</body>
</html>