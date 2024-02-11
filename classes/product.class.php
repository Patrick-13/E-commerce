<?php

class Product extends Dbh{


    protected function setProduct($productType, $productName, $productPrice, $productQuantity, $productImg){
        $productImg = json_encode($productImg);
        $stmt = $this->connect()->prepare('INSERT INTO `products`(`product_type`, `product_name`, `price`, `quantity`, `img1`) VALUES (?,?,?,?,?);');
        if(!$stmt->execute(array($productType, $productName, $productPrice, $productQuantity, $productImg))){
            $stmt = null;
            header("location: ../views/product.view.php?error=emptyinput");
            exit();
        }
        $stmt = null;

    }

    protected function getProduct(){
        $stmt = $this->connect()->prepare('SELECT * from products');
        if(!$stmt->execute()){
            $stmt = null;
            header("location: ../views/product.view.php?error=stmtfailed");
            exit();  
          }
        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../views/product.view.php?error=noproductfound");
            exit();
        }
        $productData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $productData;

    }
}
