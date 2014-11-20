<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
   ?>
<html>
    <head>
        <style>
            
            body{
                background-image: url("../images/seamless-background-simply-sky.jpg");
                

LEGEND { position: relative; width: 50 }
            
            p
{
background-color:yellow;
}
p.padding
{
padding-top:25px;
padding-bottom:25px;
padding-right:5px;
padding-left:50px;
}
            }
        </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../controller/update.php" method="post"> 
                <?php 
        // $email = $_GET['email'];
        if(isset($_GET['i'])){
            $id = $_GET['i'];
          //  echo 'email = '.$email;}
        }
           $_SESSION['variable_name'] =$id ;
   
            $dbc = mysql_connect('localhost', 'root', '', 'faulty') or die('Error inconnecting DB server');
 mysql_connect('localhost', 'root', '') or die(mysql_error()); 
 mysql_select_db("press") or die(mysql_error()); 
   $rcdcount = 0;
    $query = "SELECT `headline`, `summery`, `newsbody`, `companyname`, `email`, `releasedate` FROM press.release";
      $result = mysql_query($query)or die($query."<br/><br/>".mysql_error());
         ?>                  
    
       <table border="1" id="table1" >
    <th>Headline   </th>
    <th>Summery  </th>
    <th>Company name  </th>
    <th>release date  </th>
    <th>email</th>
     <th>Delete</th>
      <th>Edit</th>
       </table>
             <?php
 
      
      for ($i = 0; $i < (mysql_num_rows($result)); $i++) {
                            $row = mysql_fetch_row($result);
                            $headline = $row[0];
                            $summery = $row[1];
                            $newsbody = $row[2];
                            $companyname = $row[3];
                            $email = $row[4];
                            $releasedate = $row[5];
                            $rcdcount = $rcdcount + 1;?>
      
    <tr>
         <td>      
            <?php  if($id == $i){?>
              
<input type="hidden" name="<?php echo"$id";?>" value="<?php echo"$id";?>" ></label>
             <label>Headline
                 <input type="text" name="head<?php echo"$i"; ?>" rows="8" cols="20" value="<?php echo"$headline"; ?>" ></label></br>
       </td>
        <td>      
  <label>Summery
      <input type="text" name="message<?php echo"$i"; ?>" rows="8" cols="20" value="<?php echo"$summery"; ?>" ></label></br>
       </td>
       <td>      
           <label>News Body 
           <input type="text" name="newsbody<?php echo"$i"; ?>" value="<?php echo"$newsbody"; ?>" ></label></br>
       </td>
       <td>      
<label>Company name 
           <input type="text" name="companyN<?php echo"$i"; ?>" value="<?php echo"$companyname"; ?>" ></label><br/>
       </td>
          <td>      
<label>Release Date
    <input type="text" name="birth<?php echo"$i"; ?>" value="<?php echo"$releasedate"; ?>" ></label></br>
       </td>
        <td>      
 <label>Email Address
     <input type="text" name="email<?php echo"$i"; ?>" value="<?php echo"$email"; ?>" ></label></br>
       </td>
       
     
 
            <?php 
            

            }
            
            }//endforeach; 
  ?>   
          <input type ="submit" name="submit" value="submit">  
            
             <a href="HomePage.php">Home Page</a> 
            
        </form>     
       
        
        
    </body>
</html>
