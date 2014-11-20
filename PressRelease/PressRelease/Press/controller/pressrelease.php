<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'db_connect.php';

include '../Model/release_repository.php';
$obj = new release_repository();
$headline = $_POST['head'];
$summary = $_POST['message']; 
$newsbody = $_POST['newsbody'];
$companyname =$_POST['companyN'];
$compantemail =$_POST['email'];
$date = $_POST['birth'];
//echo ' '.$headline.' '.$summary.'  '.$newsbody.' '.$companyname.'  '.$compantemail.'  '.$date;
//if(isset($_POST['birth'])){

if(isset($compantemail)){
  $obj->insertpress($headline,$summary,$newsbody,$companyname,$compantemail,$date);
    include '../View/edit_press.php';
}  else {
    echo 'not connected ';
}
