<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Model/release_repository.php';
//$a = $_GET['i'];
/*
	for($j=0;$j<4;$j++)
{
//$dropdown=$_POST['attdrp'.$j];
//$studid=$_POST['sid'.$j];
$headline = $_POST['head'.$j];

$summery = $_POST['message'.$j]; 
$newsbody = $_POST['newsbody'.$j];
$companyname = $_POST['companyN'.$j];
$compantemail = $_POST['email'.$j];
//$date = $_POST['birth'.$j];
          //  echo 'email = '.$email;}
   $headline;     
	
//$headline = $_POST['head'];
//$summery = $_POST['message']; 
//$newsbody = $_POST['newsbody'];
//$companyname = $_POST['companyN'];
//$email = $_POST['email'];
$releasedate = $_POST['birth'.$j];

  //if(isset($_POST['birth'])){  
if(isset($headline)){
if(edit($headline, $summery, $newsbody, $companyname, $email, $releasedate))
{
    echo 'database updated';
}
else {
    echo '<br> not updated';
  }
//}
}
}
if(isset($_GET['i'])){
            $i = $_GET['i'];
if (isset($_POST['Edit1'.$i]) ){
    
$studid=$_POST['Edit1'.$i];
$email = $_POST['email'.$i];
 // $email = $_POST['email'.$studid];
$headline = $_POST['headline'.$i];
 $summery = $_POST['summery'.$i];
 $newsbody = $_POST['newsbody'.$i];
$companyname = $_POST['companyname'.$i];
 //$email = $_POST['email'.$studid];
 $releasedate = $_POST['releasedate'.$i];
//echo $dropdown1. ' dropdown </br>  ';
echo ' studid  ='.$studid.'<br/>';
echo ' email  ='.$email.'<br/>';
include '../Model/release_repository.php';
edit($headline, $summery, $newsbody, $companyname, $email, $releasedate);
//delete($email);
include '../View/admin_press.php';
}
}
//  }
 * */

if(isset($_GET['head'])){
            $id = $_GET['head'];
         
        }
 /*
  * Session variable 
  */
        session_start();
  $j = $_SESSION['variable_name'];

$headline = $_POST['head'.$j];
$summery = $_POST['message'.$j]; 
$newsbody = $_POST['newsbody'.$j];
$companyname = $_POST['companyN'.$j];
$email = $_POST['email'.$j];
$releasedate = $_POST['birth'.$j];

/**
 * object is created 
 */
$obj = new release_repository();
if($obj->edit($headline, $summery, $newsbody, $companyname, $email, $releasedate)){
//if($rec =  update_book($headline, $summery, $newsbody, $companyname, $email1, $releasedate)  ){

include '../View/admin_press.php';
}
 else {
     include '../View/admin_press.php';
   // echo 'not';
}

//echo $headline;