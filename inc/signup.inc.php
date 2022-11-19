<?php
if(isset($_POST['submit'])){
$frist_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['pwd'];

}

//  link all SginUP classes 
include '../classes/dbh.classes.php';
include '../classes/signup.classes.php';
include '../classes/signup-contr.classes.php';
// make object from class 
/* $frist_name,$last_name ,$email,$password */
$user = new SignupContr('oussama','senina','oussa@gmail.com','135642');

$user->signupUser();
header('Lcoation: ../index.php?error=non');
