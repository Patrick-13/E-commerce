

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pj Motorshop | Ecommerce Website Design</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fonts/fonts.html">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://kit.fontawesome.com/594873cb5b.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header"> 
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="../img/motorlogo.jpg" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                <li><a href="index.html">Home</a></li>
                <li><a href="product.view.php">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="../views/account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="../img/cart.png" width="30px" height="30px"></a>
            <img src="../img/menu.png" class="menu-icon" id="menutoggle">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Give your Bike <br>A New Style!</h1>
                <p>“Don't let someone else's opinion of you become your reality” — Les Brown.</p>
                <a href="" class="btn">Explore Now &#8594</a>
            </div>
            <div class="col-2">
            <img src="../img/motorparts.png" alt="">
        </div>
        </div>
    </div>
</div>

<!---Feature categories-->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="../img/pipe.jpg">
            </div>
            <div class="col-3">
                <img src="../img/shock.jpg">
            </div>
            <div class="col-3">
                <img src="../img/swingarm.jpg">
            </div>
        </div>
    </div>
</div>
<!---Feature products-->
<?php
    require_once "../classes/dbh.class.php";
    require_once "../classes/product.class.php";
    require_once "../classes/product-controller.class.php";
    require_once "../classes/product-view.class.php";

    $product = new ProductView();
?>

<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="../img/frontset.png" alt="">
            <h4><?php $product->fetchName(); ?></h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p><?php $product->fetchPrice(); ?></p>
        </div>
        <div class="col-4">
            <img src="../img/disk.png">
            <h4>Brembo Disk</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
        <div class="col-4">
            <img src="../img/heng.jpg">
            <h4>Heng Bolts</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
        <div class="col-4">
            <img src="../img/titanium.png" alt="">
            <h4>Titanium Bolts</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="../img/frontset.png" alt="">
            <h4>JRP Front Shock</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
        <div class="col-4">
            <img src="../img/disk.png">
            <h4>Brembo Disk</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
        <div class="col-4">
            <img src="../img/heng.jpg">
            <h4>Heng Bolts</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
        <div class="col-4">
            <img src="../img/titanium.png" alt="">
            <h4>Titanium Bolts</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="../img/frontset.png" alt="">
            <h4>JRP Front Shock</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
        <div class="col-4">
            <img src="../img/disk.png">
            <h4>Brembo Disk</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
        <div class="col-4">
            <img src="../img/heng.jpg">
            <h4>Heng Bolts</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
        <div class="col-4">
            <img src="../img/titanium.png" alt="">
            <h4>Titanium Bolts</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>$318</p>
        </div>
    </div>
</div>
<!---offers products-->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                    <img src="../img/stabilizer.png" class="offer-img">
            </div>
            <div class="col-2">
                       <p>Exclusively Available on PJ Motorshop</p>
                       <h1>Ohlins stabilizer</h1>
                       <small>This aids in reducing head shake and tank slappers while increasing stability which is essential for anyone riding on the track or on their daily commute.</small>
                       <a href="" class="btn">Buy Now &#8594</a>
            </div>
        </div>
    </div>
</div>
<!---Testimonial-->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <h3>A common form of Lorem ipsum reads: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <img src="../img/user-1.png">
                <h3>Sean Parker</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <h3>A common form of Lorem ipsum reads: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <img src="../img/user-2.png">
                <h3>Mike Smith</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <h3>A common form of Lorem ipsum reads: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <img src="../img/user-3.png">
                <h3>Mabel Joe</h3>
            </div>
        </div>
    </div>
</div>
<!---brands-->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="../img/brembo.png">
            </div>
            <div class="col-5">
                <img src="../img/yss.png">
            </div>
            <div class="col-5">
                <img src="../img/daeng.png">
            </div>
            <div class="col-5">
                <img src="../img/jrp.png">
            </div>
            <div class="col-5">
                <img src="../img/apr.png">
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
<script src="js/script.js"></script>
</body>
</html>