<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Model/release_repository.php';
 
/*
 * object is creted 
 */
$obj = new release_repository();
              //$stud = $obj->newrelease();
$val =$_POST['search'];
//echo 'val = '.$val;
if(isset($_POST['ser'])){
    $red = $_POST['ser'];
    if($red == 'body'){
        $books= $obj->get_body($val); 
          $publishers =$obj->get_publishers();
     echo 'search by body';
           include '../View/search_list.php';
    }
    else if($red =='title')
    {
          $books=$obj->get_book_by_title($val); 
          
     echo 'search by title';
    include '../View/search_list.php';
  
    }
 else if($red == 'state'){
     echo 'search by state';
          $books= $obj->get_body($val); 
           include '../View/search_list.php';
        // echo 'search by state';
    }else
    {
        $books= $obj->get_book_by_title1($val); 
    }
    
    
}

else if(isset($val))
{
    //include '../Model/release_repository.php';
   $books= get_body1($val); 
             //$publishers = get_publishers();
     echo 'search by title';
    include '../View/search_list.php';
    //echo 'seaarch';
}  else {
   // echo 'error';
}