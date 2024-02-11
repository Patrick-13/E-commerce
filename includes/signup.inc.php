<?php

if(isset($_POST["register"])){
    //grabbing the data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $passWord = $_POST["passWord"];
    $passWordRepeat = $_POST["passWordRepeat"];

    //Instantiate SignupController Class
    require_once "../classes/dbh.class.php";
    require_once "../classes/signup.class.php";
    require_once "../classes/signup-controller.class.php";

    $signup = new SignupController($firstName, $lastName, $userName, $email, $passWord, $passWordRepeat);

    //Running error handlers and user signup
    $signup->signupUser();
    //going to front page
    header("location: ../account.php?error=none");

}