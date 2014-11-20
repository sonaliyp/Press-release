<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
     
        </title>
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
    </head>
    <body>
        <form method="post" action="../controller/add_editPress_controller.php">
            <fieldset >
            <legend> Sign UP</legend>
            
               <?php
               session_name('varname');
session_start();
               echo 'Email ID = '.$email = $_SESSION['email'].'<br>';?>
           <label for="uname">Username</label><br /> 
     <input id ="uname" type="text" name="uname"  value="<?php echo $_SESSION['email'];?>" required><?php  ?></br>
      
     <label>Password</label> <br />
     <input type="password" name="password" value="" required></br>
     <label>Retype your Password</label> <br />
     <input type="password" name="password1" value="" required></br>
    
        
     <input type="Submit" name="Submit" value ="change password"><br/>   
     <a href="HomePage.php">Home Page</a>
   
        <?php
        // put your code here
        ?>
   </fieldset>          
  </form>
    </body>
</html>


