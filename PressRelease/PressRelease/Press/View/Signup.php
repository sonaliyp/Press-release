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
        <form method="post" action="../controller/signup_repository.php">
            <fieldset >
            <legend> Sign UP</legend>
               
           <label for="uname">Username</label><br /> 
     <input id ="uname" type="text" name="uname"  value="" required><?php  ?></br>
      
     <label>Password</label> <br />
     <input type="password" name="password" value="" required></br>
     <label for="First">First name </label> <br />
     <input id ="First" name="First" type="First" required><br />
      <label for="Last">Last Name</label>  <br />
      <input id ="Last" name="Last" type="Last"  required>
        <br/>
     <label for="city">city </label> <br />
     <input id ="city" name="city" type="text" required><br />
      <label for="state">State</label>  <br />
      <input id ="state" name="state" type="text"  required>
        <br/>
         <label for="country">Country</label>  <br />
      <input id ="country" name="country" type="text"  required>
        <br/>
        <label>Admin <br/></label>
          <form action="">
          <input type="radio" name="interst" value="1">Yes<br/>
          <input type="radio" name="interst" value="2">No<br />
        
        
     <input type="Submit" name="Submit" value ="Submit Form"><br/>   
     <a href="HomePage.php">Home Page</a>
   
        <?php
        // put your code here
        ?>
   </fieldset>          
  </form>
    </body>
</html>


