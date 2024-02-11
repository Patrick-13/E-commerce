<?php


class SignupController extends Signup{

    private $firstName;
    private $lastName;
    private $userName;
    private $email;
    private $passWord;
    private $passwordRepeat;

    public function __construct($firstName, $lastName, $userName, $email, $passWord, $passWordRepeat){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->email = $email;
        $this->passWord = $passWord;
        $this->passwordRepeat = $passWordRepeat;
    }

    public function signupUser(){
        //empty input
        if($this->emptyInput() == false){
            header("location: ../views/account.php?error=emptyinput");
            exit();
        }
        //invalid username
        if($this->invalidUid() == false){
            header("location: ../views/account.php?error=invalidusername");
            exit();
        }
        //invalid email
        if($this->invalidEmail() == false){
            header("location: ../views/account.php?error=invalidemail");
            exit();
        }
                   //password don't match
        if($this->pwdMatch() == false){
            header("location: ../views/account.php?error=passworddontmatch");
            exit();
        }
            //username or email taken!
        if($this->uidTakenCheck() == false){
           header("location: ../views/account.php?error=useremailtaken");
           exit();
       }
       $this->setUser($this->firstName, $this->lastName, 
       $this->userName, $this->email, $this->passWord);
    }

    private function emptyInput(){
        if(empty($this->firstName) || empty($this->lastName) || empty($this->userName) || empty($this->email)|| empty($this->passWord)|| empty($this->passwordRepeat)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;

    }

    private function invalidUid(){
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->userName)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch(){
        if($this->passWord !== $this->passwordRepeat){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function uidTakenCheck(){
        if(!$this->checkUser($this->userName, $this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

}