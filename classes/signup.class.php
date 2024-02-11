<?php

class Signup extends Dbh{

    protected function setUser($firstName, $lastName, $userName, $email, $passWord){
        $stmt = $this->connect()->prepare('INSERT INTO accounts(`firstname`, `lastname`, `username`, `email`, `pwd`)VALUES(?,?,?,?,?);');
        $hashedPwd = password_hash($passWord, PASSWORD_DEFAULT);
       
        if(!$stmt->execute(array($firstName, $lastName, $userName, $email, $hashedPwd))){
            $stmt = null;
            header("location: ../views/account.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($userName, $email){
        $stmt = $this->connect()->prepare('SELECT username FROM accounts WHERE username = ? OR email = ?;');
       
        if(!$stmt->execute(array($userName, $email))){
            $stmt = null;
            header("location: ../views/account.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}