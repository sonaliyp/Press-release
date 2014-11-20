<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'db_connect.php';
//include 'db_connect.php';on
//display_info();$password,$city,$state,$country,$admin

class Login_repository{
function get_Login()
{
    global $db;
    $query = "SELECT * FROM press.login";
    $rec = $db->query($query);
    return $rec;
 }
 function add_info($username,$password,$first,$last,$city,$state,$country,$admin)
{
 /*global $db;
 $query = "INSERT INTO press.login (`username`, `password`, `city`, `state`, `country`, `admin`) VALUES ('$username','$password','$city','$state','$country','$admin')"; //$inserrec = $db->query($query);
 if(!($db->query($query)))
 {
     printf("Error: %s\n",$db->errorInfo()[2]);
 }
 else
 {
  //   echo 'Applicant Info Is added <br>';
   echo 'ThankYou For Submitting signup  .';
 }*/
global $db;
 $query = "INSERT INTO press.users (`emailAddress`, `password`, `firstName`, `lastName`, `city`, `state`, `country`, `isAdmin`) VALUES ('$username','$password','$first','$last','$city','$state','$country','$admin')"; //$inserrec = $db->query($query);
 if(!($db->query($query)))
 {
     printf("Error: %s\n",$db->errorInfo()[2]);
 }
 else
 {
  //   echo 'Applicant Info Is added <br>';
   echo 'ThankYou For Submitting signup  .';
 }
 //return $inserrec;
// echo 'save into database';
}
function display_info()
{
     global $db;
    $query = "SELECT * FROM press.login";
    $assignment = $db->query($query);
    if(!$assignment)
    {
        printf("Error: %s\n",$db->errorInfo()[2]);
    }else{
        $assignment1= $assignment->fetch();
        echo 'you r here '.$assignment1['username'];
        
    }
    return $assignment1;

}
}