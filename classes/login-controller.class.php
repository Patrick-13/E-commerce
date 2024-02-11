<?php


class LoginController extends Login{

    private $userName;
    private $passWord;


    public function __construct($userName, $passWord){
        $this->userName = $userName;
        $this->passWord = $passWord;
     
    }

    public function loginUser(){
        //empty input
        if($this->emptyInput() == false){
            header("location: ../views/account.php?error=emptyinput");
            exit();
        }
       $this->getUser($this->userName, $this->passWord);
    }

    private function emptyInput(){
        if(empty($this->userName) || empty($this->passWord)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;

    }

}