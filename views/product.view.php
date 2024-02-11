<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products Pj Motorshop</title>
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
               <div class="form-container">
                    <div class="form-btn">
                        <span id="login">Add New Products</span>
                    </div>
              
                    <form action="../includes/product.inc.php" method="POST">
                        <input type="text" name="productType" placeholder="productType">
                        <input type="text" name="productName" placeholder="productName">
                        <input type="number" name="productPrice" placeholder="productPrice">
                        <input type="number" name="productQuantity" placeholder="productQuantity">
                        <input type="file" name="image1">
                        <input type="file" name="image2">
                        <input type="file" name="image3">
                        <input type="file" name="image4">
                        <button type="submit" name="saveProduct" class="btn">Save Product</button></button>
                    </form>
                    
               </div>
               <div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td><div class="cart-info">
                    <img src="img/buy-1.png">
                    <div>
                        <p>JRP shock</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
            </div></td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
        <tr>
            <td><div class="cart-info">
                    <img src="img/buy-1.png">
                    <div>
                        <p>JRP shock</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
            </div></td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
        <tr>
            <td><div class="cart-info">
                    <img src="img/buy-1.png">
                    <div>
                        <p>JRP shock</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
            </div></td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
    </table>

    <div class="total-price">
        <table>
         <tr>
            <td>Subtotal</td>
            <td>$300.00</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>$40.00</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>$340.00</td>
        </tr>
    </table>
    </div>
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