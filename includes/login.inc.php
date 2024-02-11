<?php

if(isset($_POST["login"])){
    //grabbing the data
    $user = $_POST["userName"];
    $pass = $_POST["passWord"];


    //Instantiate SignupController Class
    require_once "../classes/dbh.class.php";
    require_once "../classes/login.class.php";
    require_once "../classes/login-controller.class.php";

    $login = new LoginController($user, $pass);

    //Running error handlers and user signup

    $login->loginUser();
    //going to front page
    header("location: ../views/dashboard.php?error=none");

}