<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
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
    <body>
        <form method="post" action="../controller/pressrelease.php">
            <?php// include '../controller/controller.php';
          //   $email = emailadd();
            // echo "$email";
            ?>
        <label for="HeadLines">HeadLines</label>  <br /> 
        <input type="text" name="head" rows="8" cols="20" value="" required></br>
        <label for="message">Summary</label>  <br /> 
        <textarea id="message" name="message" rows="8" cols="40"></textarea></br>
        <label for="newsbody"> News body</label>  <br /> 
        <textarea id="newsbody" name="newsbody" rows="8" cols="40"></textarea></br>
        Company Name<input type="text" name="companyN" value="" required></br>
        Company Email<label for="email"> </label>
        <input id ="email" name="email" size=""type="email" required><br />
        Release date   <label for="birth"></label> 
        <input id ="birth" name="birth" type="date" placeholder="month-date-year" required>
        <br/>
        <input type="Submit" name="Submit" value ="Submit"><br/>   
         </form>
        <a href="../View/HomePage.php">Home Page</a>
        <?php
        // put your code here
        ?>
    </body>
</html>
