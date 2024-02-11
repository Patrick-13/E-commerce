<?php

class Login extends Dbh{

    protected function getUser($uid, $pwd){
        $stmt = $this->connect()->prepare('SELECT pwd FROM accounts WHERE username = ? OR email=?');

       
        if(!$stmt->execute(array($uid,$pwd))){
            $stmt = null;
            header("location: ../views/account.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../views/account.php?error=usernotfound");
            exit();
        }
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["pwd"]);
        $stmt = null;

        if($checkPwd == false){
            $stmt = null;
            header("location: ../views/account.php?error=wrongpassword");
            exit();
        }else if($checkPwd == true){
            $stmt = $this->connect()->prepare('SELECT * FROM accounts WHERE username = ? OR email = ? AND pwd = ?;');
            if(!$stmt->execute(array($uid, $uid, $pwd))){
                $stmt = null;
                header("location: ../views/account.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../views/account.php?error=usernotfound");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["accountid"] = $user[0]["id"];
            $_SESSION["accoutname"] = $user[0]["username"];
        }
    }

}