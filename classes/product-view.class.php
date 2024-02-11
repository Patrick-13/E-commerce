<?php

class ProductView extends Product{
    
    public function fetchProductType(){
        $profileInfo = $this->getProduct();

        echo $profileInfo[1]["product_type"];
    }

    public function fetchName(){
        $profileInfo = $this->getProduct();

        echo $profileInfo[2]["product_name"];
    }

    public function fetchPrice(){
        $profileInfo = $this->getProduct();

        echo $profileInfo[3]["price"];
    }
    public function fetchQuantity(){
        $profileInfo = $this->getProduct();

        echo $profileInfo["quantity"];
    }
    public function fetchImg(){
        $profileInfo = $this->getProduct();

        echo $profileInfo["img1"];
    }
}