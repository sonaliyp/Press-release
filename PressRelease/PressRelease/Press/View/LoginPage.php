<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="../../style.css" />
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
   <fieldset>
                
          <div id="main">
              <p class="header"><h1>Press release database</h1></p>
         <p class="banner-title">
             <img src="../images/news.jpg" alt="Press release database" width="120" height="120"> <br>
         <form method="post" action='../controller/search.php'>
             <label>search</label>
             <input type="text" name="search" id="search" >
        <input type="Submit" name="Submit" value ="SubmitForm"><br/>
</form>        
	</p>
         <?php require '../Model/release_repository.php';
              $stud = newrelease();
                  ?><table>
        <table class="striped">
            <tr class="header">
                <td>Headline</td>
                <td>Summery</td>
                <td>Company Name</td>
                <td>Release Date</td>
                  <td> Email</td>
            </tr>
              <?php   Print "<table border cellpadding=13>"; 
while($info = mysql_fetch_array( $stud )) 
 { 
 Print "<tr>"; 
 Print " <td>".$info['headline'] . "</td> "; 
 Print " <td>".$info['summery'] . "</td> "; 
 Print " <td>".$info['companyname'] . " </td>";
 Print " <td>".$info['releasedate'] . "</td> ";
 Print " <td>".$info['email'] . "</td> ";
 $email = $info['email'];
 $_SESSION['varname'] = $email;
 
 ?>
         
                     
<?php } 
 Print "</table>";?>
     
            
        </div>
        
        <div id="sidebar">
              <h1>Login</h1>
              <form action="../controller/LoginCon.php" method="post" id="login_form">
                <input type="hidden" name="action" value="login"/>

                <label>Email:<br/></label>
                <input type="text" name="email" />
                <br />

                <label>Password:</label>
                <input type="password" name="password" />
                <br />

                <label>&nbsp;</label>
                <input type="submit" value="Login"/>
            </form>
              <a href="Signup.php" name ="signup" value ="signup">Sign up</a>
         

               
            </fieldset></div>
        </p>
      
        </form>
        <?php
        // put your code here
        ?>
                
    </body>



</html>
