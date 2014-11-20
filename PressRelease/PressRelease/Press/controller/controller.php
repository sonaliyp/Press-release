<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
*/

             // $stud = $obj->newrelease();
if(isset($_GET['i'])){
            $id = $_GET['i'];
         echo 'id = '.$id;
       
//$email = $_POST['email'.$id];
//echo '   '.$email;
}

//$email = $_POST['email'.$id];
for($i=0;$i<4;$i++){
//$studid=$_POST['submit'.$i];
if (isset($_POST['submit'.$i]) ){
    
$studid=$_POST['submit'.$i];
if($email = $_POST['email'.$studid]){
   include '../Model/release_repository.php';
   $obj = new release_repository();
$obj->delete($email);
include '../View/admin_press.php';
}
 else {
    echo 'not deleted ';    
}
}
}