let loginForm = document.getElementById("loginForm");
let registerForm = document.getElementById("registerForm");
let Indicator = document.getElementById("Indicator");

document.getElementById("register").onclick = function(){
    registerForm.style.transform = "translateX(0px)";
    loginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(150px)";
}

document.getElementById("login").onclick = function(){
    registerForm.style.transform = "translateX(300px)";
    loginForm.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(50px)";

}
