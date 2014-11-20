<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dropdown=$_POST['attdrp'];
echo $dropdown;
$dropdown=$_POST['attdrp'];
if(isset($dropdown) )
{
 
  $varGender = $_POST['attdrp'];
 // echo '$varGender';
 
 // require '../Model/release_repository.php';
 //            $stud = newrelease();
   //include '../View/sort_result.php';
}


include '../Model/release_repository.php';
$obj = new release_repository();
//$val =$_POST['search'];
//echo 'val = '.$val;
if(isset($_POST['attdrp'])){
    $red = $_POST['attdrp'];
    if($red == 'date'){
      //  $books= get_body($val); 
        $books =$obj->sortby_date();
       // $books = sortby();
          //$publishers = get_publishers();
     //echo 'search by body';
           include '../View/sort_result.php';
    }
    else if($red =='author')
    {
         // $books= $obj->get_book_by_title($val); 
         $books= $obj->sortby_author();
             //$publishers = get_publishers();
    // echo 'search by title';
    include '../View/sort_result.php';
   //     echo 'search by title';
    }
 else if($red == 'city'){
    // echo 'search by state';
         // $books= $obj->get_body($val); 
     $books = $obj->sortby_city();
          include '../View/sort_result.php';
        // echo 'search by state';
    }else
    {
        //$books= get_book_by_title1($val); 
         $books = $obj->sortby();
    }
    
    
}

else if(isset($val))
{
    //include '../Model/release_repository.php';
   $books= $obj->get_body1($val); 
             //$publishers = get_publishers();
   //  echo 'search by title';
    include '../View/search_list.php';
    //echo 'seaarch';
}  else {
   // echo 'error';
}