<?php

class SignupContr extends Signup{

  private  $firstname;
  private  $lastname;
  private  $email;
  private  $password;

 public function __construct($firstname,$lastname,$email,$password)
 {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->password = $password;
 }
 public function signupUser(){
  if($this->emptyInput() == false){
    // echo Empty input
    header("Location: ../index.php?error=emptyinput");
    exit();
  }
/*   if($this->invalidUserName() == false){
   // echo invalid user name
   header("Location  : ../index/php?error=InvalidName");
   exit();
 } */
 if($this->invalidEmail() == false){
   // echo invalid email
   header("Location: ../index.php?error=InvalidEmail");
   exit();
 }
 if($this->checkIfUserExit() == false){
   // echo email already used
   header("Location: ../index.php?error=EmailUsedBefor");
   exit();
 }
 $this->setUser($this->firstname,$this->lastname,$this->email,$this->password);
 }
  
  


 private function emptyInput(){
   // checking if inputs not empty
   if(empty($this->firstname) || empty($this->lastname )|| empty($this->email) || empty($this->password) ){
      $result = false;
   }else{
      $result = true;
   }
   return $result;
 }
/*  private function invalidUserName(){
   // checking if user name does't contain specl chars
   if( !preg_match("/^[a-aA-Z0-9]*$/",$this->firstname ) && !preg_match("/^[a-aA-Z0-9]*$/",$this->lastname )){
      $result = false;
   }else{
      $result = true;
   }
   return $result;
 } */
 private function invalidEmail(){
   // checking if user name does't contain specl chars
   if( !filter_var($this->email,FILTER_VALIDATE_EMAIL) ){
      $result = false;
   }else{
      $result = true;
   }
   return $result;
 }

/*  private function passMatch(){
   // checking if password 1 and 2 are the same
   if( $this->password1 !== $this->password2  ){
      $result = false;
   }else{
      $result = true;
   }
   return $result;
 } */

 private function checkIfUserExit(){
   // checking if user name does't contain specl chars
   if( !$this->checkUser( $this->email) ){
      $result = false;
   }else{
      $result = true;
   }
   return $result;
 }
}