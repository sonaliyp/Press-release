<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_name('varname');
session_start();
?>
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
 <input type="radio" name="ser" value="body">News body<br>
<input type="radio" name="ser" value="title">Title<br/>
<input type="radio" name="ser" value="state">State<br/>
             <label>search</label>
             <input type="text" name="search" id="search" >
        <input type="Submit" name="Submit" value ="SubmitForm"><br/>
</form>   
         
         
	</p>
        <p><form action="../controller/sort.php" method="post" >
sort 
<select style="font-size:10px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif" name="attdrp"> 
<option value="P" selected="selected">Sort</option>
          <option value="date">Date</option>
          <option value="author">Author</option>
          <option value="city">City</option>
</select>
<input type="submit" value="Filter">
</form>
</p>
         <?php require '../Model/release_repository.php';
         $obj = new release_repository();
              $stud = $obj->newrelease();
                  ?><table>
        <table class="striped">
            <tr class="header">
                <td>Headline</td>
                <td>Summery</td>
                <td>Company Name</td>
                <td>news body</td>
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
 Print " <td>".$info['newsbody'] . " </td>";
 Print " <td>".$info['releasedate'] . "</td> ";
 Print " <td>".$info['email'] . "</td> ";
 $email = $info['email'];
 
 
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
<?php $_SESSION['varname'] = $email; ?>
                <label>Password:</br></label>
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
