let MenuItems = document.getElementById("MenuItems");

menuitem = MenuItems.style.maxHeight = "0px";

document.getElementById("menutoggle").onclick = function(){
    if(menuitem = MenuItems.style.maxHeight == "0px"){
        MenuItems.style.maxHeight = "200px";
    }else{
        MenuItems.style.maxHeight = "0px";
    }
}


/*  product for gallery */

let productImg = document.getElementById("productImg");
let smallImg = document.getElementsByClassName("small-img");

smallImg[0].onclick = function(){
    productImg.src = smallImg[0].src;
}
smallImg[1].onclick = function(){
    productImg.src = smallImg[1].src;
}
smallImg[2].onclick = function(){
    productImg.src = smallImg[2].src;
}
smallImg[3].onclick = function(){
    productImg.src = smallImg[3].src;
}


/*  product for toggle Form */

