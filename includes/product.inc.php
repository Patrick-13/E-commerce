<?php

if(isset($_POST["saveProduct"])){
    //grabbing the data
    $productType = $_POST["productType"];
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];
    $productQuantity = $_POST["productQuantity"];
    $productImg = array(
        $_POST['image1'],
        $_POST['image2'],
        $_POST['image3'],
        $_POST['image4']
    );
    $dataWithoutEmptyStrings  = array_filter($productImg, function($value){
        return $value !== "";
    });
    $jsonData  = json_encode($dataWithoutEmptyStrings );


    //Instantiate SignupController Class
    require_once "../classes/dbh.class.php";
    require_once "../classes/product.class.php";
    require_once "../classes/product-controller.class.php";

    $newProduct = new productController($productType, $productName, $productPrice, $productQuantity, $jsonData);

    //Running error handlers and user signup

    $newProduct->productErrorHandler();
    //going to front page
    header("location: ../views/product.view.php?error=none");

}