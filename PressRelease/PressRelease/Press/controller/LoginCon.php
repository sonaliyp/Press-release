<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
*/


session_name('varname');
session_start();
require('../model/user_repository.php');
$obj  = new user_repository();
 if ( $_POST['action']) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $_SESSION['email']=$email;
        $_SESSION['password'] = $password;
       // echo 'name = '.$email .' password '. $password;
        if ($obj->is_valid_admin_login($email, $password)) {
      
            include '../View/admin_press.php';
              
           }
 else {
            echo '!Try Again';
            include '../View/HomePage.php';

 }
    }
  