<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
include '../Model/db_connect.php';
$email = 'admin@yahoo.com';
$password = 'abc';
if(is_valid_admin_login($email, $password))
{
    echo 'true';
}
else
{
    echo 'false';
}
$email = 'sonali@gmail';
$password='12345';
change_pass($email, $password);
 * 
 */
include '../Model/db_connect.php';

class user_repository{
function change_pass($email, $password) {
    global $db;
    
    $query = "UPDATE press.users SET password = '$password'    WHERE `emailAddress` ='$email'";
 
     if(!($db->query($query))){
               echo 'password not change';
           }
         else {
               echo ' change  <br>';
            }
      
}
function add_user($email, $password, $is_admin) {
    global $db;
    $query = 'INSERT INTO press.users (emailAddress, password, isAdmin)
              VALUES (:email, :password, :is_admin)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':is_admin', $is_admin);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function Add_newuser($emailAddress, $password, $firstName,$lastName,$city,$state,$country,$isAdmin) {
    global $db;
    $query = 'INSERT INTO press.users (emailAddress, password, firstName,lastName,city,state,country,isAdmin)
              VALUES (:emailAddress, :password, :firstName,:lastName,:city,:state,:country,:isAdmin)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':emailAddress', $emailAddress);
         $statement->bindValue(':password', $password);
          $statement->bindValue(':firstName', $firstName);
           $statement->bindValue(':lastName', $lastName);
            $statement->bindValue(':city', $city);
             $statement->bindValue(':state', $state);
              $statement->bindValue(':country', $country);
               $statement->bindValue(':isAdmin', $isAdmin);
              
   
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function is_valid_admin_login($email, $password) {
    global $db;
    $query = 'SELECT userID FROM press.users
              WHERE emailAddress = :email AND password = :password AND isAdmin = 1';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $valid = ($statement->rowCount() >= 1);
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    return $valid;
}
}