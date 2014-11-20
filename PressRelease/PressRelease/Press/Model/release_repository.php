<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'db_connect.php';
class release_repository{

function newrelease(){
     $dbc = mysql_connect('localhost', 'root', '', 'faulty') or die('Error inconnecting DB server');
 mysql_connect('localhost', 'root', '') or die(mysql_error()); 
 mysql_select_db("press") or die(mysql_error()); 
    $query = "SELECT * FROM press.release";
      $result = mysql_query($query)or die($query."<br/><br/>".mysql_error());
      Print "<table border cellpadding=13>"; 
      if(!$result)
    {
        printf("Error: %s\n",$db->errorInfo()[2]);
    }else{
           echo 'you</br>';
         }
       return $result;
    }
 
    
    function insertpress($headline,$summary,$newsbody,$companyname,$compantemail,$date){
        global $db;
 $query = "INSERT INTO press.release (`headline`, `summery`, `newsbody`, `companyname`, `email`, `releasedate`) VALUES ('$headline','$summary','$newsbody','$companyname','$compantemail','$date')"; //$inserrec = $db->query($query);
 if(!($db->query($query)))
 {
     printf("Error: %s\n",$db->errorInfo()[2]);
 }
 else
 {
    echo 'ThankYou For Submitting your details .';
 }

echo 'save into database'; 
    }
    
    
    
    
   function delete($email){
      global $db;
    $query = "DELETE FROM press.release WHERE email = '$email'";
    
           if(!($db->query($query))){
               echo 'record deleted  ';
           }
         else {
               echo ' deleted ';
            }
           //return '';
    }
    
    function delete_news($book_id) {
    global $db;
    $query = 'DELETE FROM books WHERE bookID = :book_id';
    $db->exec($query);
    
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':book_id', $book_id);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
    
    
    function connect(){
        global $db;
    }
    
    
    function edit($headline,$summary,$newsbody,$companyname,$compantemail,$date){
      global $db;
   
  $query ="UPDATE press.release SET `headline` ='$headline' , `summery` = '$summary', `newsbody` = '$newsbody', `companyname` ='$companyname'  WHERE email = '$compantemail'";
  //$query = "UPDATE `press.release` SET `headline`='$headline',`summery`='$summary',`newsbody`='$newsbody',`companyname`='$companyname' WHERE `email`='$compantemail';";
    if(!($db->query($query))){
               echo 'record not updated';
           }
         else {
               echo ' updated <br>';
            }
      
    }
    
    
    function get_publishers() {
    global $db;
    $query = 'SELECT * FROM press.release';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_book_by_title($title) {
    global $db;
    $query = 'SELECT * FROM press.release WHERE headline like :title';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':title','%'. $title.'%');
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
    function get_body1($title) {
    global $db;
    $query = 'SELECT * FROM press.release WHERE newsbody like :title';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':title','%'. $title.'%');
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    }
    function get_body($title) {
    global $db;
    $query = 'SELECT * FROM press.release WHERE newsbody like :title';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':title','%'. $title.'%');
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    }
    
    function get_state($title) {
    global $db;
    $query = 'SELECT * FROM press.release WHERE newsbody like :title';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':title','%'. $title.'%');
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    }
    
    function update_book($headline,$summery,$newsbody,$companyname,$email1,$releasedate) {
    global $db;
   //  $query ="UPDATE press.release SET `headline` ='$headline' , `summery` = '$summary', `newsbody` = '$newsbody', `companyname` ='$companyname'  WHERE email = '$compantemail'";
  //$query = "UPDATE `press.release` SET `headline`='$headline',`summery`='$summary',`newsbody`='$newsbody',`companyname`='$companyname' WHERE `email`='$compantemail';";
    //if(!($db->query($query))){
   // headline`, `summery`, `newsbody`, `companyname`, `email`, `releasedate
    $query = 'UPDATE press.release
              SET headline = :headline,
               summery = :summery;
               newsbody = :newsbody;
               companyname = :companyname;
               releasedate = :releasedate;
              WHERE email = :email1';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':headline', $headline);
      //  $statement->bindValue(':isbn', $isbn);
        $statement->bindValue(':summery', $summery);
      $statement->bindValue(':newsbody', $newsbody);
     $statement->bindValue(':companyname', $companyname);
 $statement->bindValue(':email1', $email1);
        $statement->bindValue(':releasedate', $releasedate); 
        $row_count = $statement->execute();
        $statement->closeCursor();
      //  echo 'updated ';
        return $row_count;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    }
    
    
    function sortby(){
    
             global $db;
    $query = 'SELECT * FROM press.release ORDER BY email';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    }
    
    function sortby_date(){

             global $db;
    $query = 'SELECT * FROM press.release ORDER BY releasedate';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    }
    
    
    
        function sortby_author(){

             global $db;
    $query = 'SELECT * FROM press.release ORDER BY email';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    }
     function sortby_city(){

             global $db;
    $query = 'SELECT * FROM press.release ORDER BY summery';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    }
    
    
    
    }