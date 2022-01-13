<?php
    include "connection.php";

    if($_POST){
        $query = "SELECT * FROM user WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
        $res = mysqli_query($conn, $query);
        $result = mysqli_num_rows($res);

        if($result>0){
            $temp = mysqli_fetch_assoc($res);
            if($_POST['username'] == $temp['username'] && $_POST['password'] == $temp['password'])            
            { session_start();
                $_SESSION['username'] = $temp['username'];
                $_SESSION['role'] = $temp['role'];
                
                if($_SESSION['role']=="Admin"){
                    header('Location: index.php');
                }
                // else if($_SESSION['role']=="Admin"){
                //     header('Location: index.php');
                // }
            }
        }else{
            echo '<script>alert("Username dan Password salah")</script>';
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
                        <li><a href="">Account</a></li>
                    </ul>
                </nav>
                <img src="img/cart.png" width="30px" height="30px">
                <img src="img/menu.png" class="menu-icon" onclick="menu()">
            </div>
        </div>
    <!-- akun -->
        <div class="akun">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="img/bukudunia.png" width="100%">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span>Login Account</span>
                            </div>
                            <form method="post">
                                <input type="text" name="username" placeholder="Username">
                                <input type="password" name="password" placeholder="Password">
                                <button type="submit" class="button">Login</button>
                            </form>
                        </div>
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