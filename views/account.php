<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products Pj Motorshop</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fonts/fonts.html">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://kit.fontawesome.com/594873cb5b.js" crossorigin="anonymous"></script>
</head>
<body>
<!--Header-->
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="../img/motorlogo.jpg" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                <li><a href="index.html">Home</a></li>
                <li><a href="product.html">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="account.html">Account</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="../img/cart.png" width="30px" height="30px"></a>
            <img src="../img/menu.png" class="menu-icon" id="menutoggle">
        </div>
    </div>
<!--Account Page-->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="../img/motorparts.png">
            </div>
            <div class="col-2">
               <div class="form-container">
                    <div class="form-btn">
                        <span id="login">Login</span>
                        <span id="register"> Register</span>
                        <hr id="Indicator">
                    </div>
              
                    <form action="includes/signup.inc.php" method="POST" id="registerForm">
                        <input type="text" name="firstName" placeholder="Firstname">
                        <input type="text" name="lastName" placeholder="Lastname">
                        <input type="text" name="userName" placeholder="Username">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="passWord" placeholder="Password">
                        <input type="password" name="passWordRepeat" placeholder="Confirm Password">
                        <button type="submit" name="register" class="btn">Register</button>
                    </form>
                    <form action="includes/login.inc.php" method="POST" id="loginForm">
                        <input type="text" name="userName" placeholder="Username / Email">
                        <input type="password" name="passWord" placeholder="Password">
                        <button type="submit" name="login" class="btn">Login</button>
                        <a href="#">Forgot Password?</a>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>
<!---footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and Ios Mobile Phone</p>
                <div class="app-logo">
                    <img src="../img/app-store.png">
                    <img src="../img/play-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="../img/motorlogo.jpg">
                <p>Download App for Android and Ios Mobile Phone</p>
            </div>
            <div class="footer-col-3">
               <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                         <ul>
                             <li>Facebook</li>
                             <li>Twitter</li>
                             <li>Instagram</li>
                             <li>Youtube</li>
                         </ul>
             </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2024 - Pj Motorshop </p>
    </div>
</div>
<script src="../js/account.js"></script>
</body>
</html>