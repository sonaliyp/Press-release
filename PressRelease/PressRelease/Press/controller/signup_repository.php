<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Model/db_connect.php';

include '../Model/Login_repository.php';

$obj =new Login_repository();
$uname = $_POST['uname'];
$pass = $_POST['password'];
if(isset($_POST['uname'])){
    $uname = $_POST['uname'];
    $pass = $_POST['password'];
   // echo $uname.$pass;
}
 else {
echo 'not set';    
}



     
//$name = $_POST['uname'];
//$pass = $_POST['password'];
$city = $_POST['city'];
$country = $_POST['country'];
$state = $_POST['state'];
$first = $_POST['First'];
$last = $_POST['Last'];
$admin = $_POST['interst'];
//echo $name.'    '.$pass.'     '.$city.'    '.$state.'    '; 
if(isset($uname)){
    //echo 'set action ';
}
 else {
    echo 'action is not set';    
}
if(isset($_POST['interst'])) {
$obj->add_info($uname, $pass,$first,$last, $city, $state, $country, $admin);
include '../View/LoginPage.php';
}
 else {
    echo 'error in storing database ';
}