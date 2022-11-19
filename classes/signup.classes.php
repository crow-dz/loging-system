<?php
class Signup extends Dbh{
    protected function setUser($firstname,$lastname,$email,$password){
    $sql = 'INSERT INTO `users`( `users_firstname`, `users_lastname`, `users_email`, `users_password`) VALUES (?,?,?,?)';
    $stmt = $this->connect()->prepare( $sql); 
    

    $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
    if(!$stmt->execute([$firstname,$lastname,$email,$hashedPwd])){
        $stmt = null;
        header("Location: ../index.php?error=stmtfailed");
        exit();
    }
   
    $stmt = null;
    header("Location: ../signin.php");
    
      
    }
    
  protected function checkUser($email){
    $sql = 'SELECT users_email FROM users WHERE users_email = ?;';
    $stmt = $this->connect()->prepare( $sql);
    if(!$stmt->execute([$email])){
        $stmt = null;
        header('Location: ../index.php?error=stmtfailed');
        exit();
    }
    if($stmt->rowCount() > 0){
        $resultCeck = false;
    }else{
        $resultCeck = true;
    }
    return $resultCeck;
  }


}