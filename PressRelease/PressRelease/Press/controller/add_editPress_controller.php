<?php
//session_name('varname');
//session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 //echo $_SESSION['admin'] ;
echo 'you are here ';
//include '../View/admin_press.php';
//$_SESSION['email'];

$uname = $_POST['uname'];
$pass = $_POST['password'];
$ret = $_POST['password1'];
//echo 'uanme = '.$uname.'   '.$pass . '  '.$ret;
if($pass ==$ret ){
    include '../Model/user_repository.php';
    $obj = new user_repository();
   $obj-> change_pass($uname, $pass);
     echo '!password is change scussfully ';
    include '../View/HomePage.php';
    echo 'right';
}
 else {
    echo 'wrong';    
}