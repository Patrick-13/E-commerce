<?php

class productController extends Product{

    private $productType;
    private $productName;
    private $productPrice;
    private $productQuantity;
    private $productImg;

    public function __construct($productType, $productName, $productPrice, $productQuantity, $productImg){
        $this->productType = $productType;
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->productQuantity = $productQuantity;
        $this->productImg = $productImg;
    }
    public function productErrorHandler(){
        if($this->productemptyInput() == false){
            header("location: ../views/product.view.php?error=emptyinputs");
            exit();
        }
        
        $this->setProduct($this->productType, $this->productName, $this->productPrice, $this->productQuantity, $this->productImg);
    }


    private function productemptyInput(){
        if(empty($this->productType) || empty($this->productName) || empty($this->productPrice) || empty($this->productQuantity) || empty($this->productImg)){
                $productResult = false;
        }else{
                $productResult = true;
        }
        return $productResult;
    }

}