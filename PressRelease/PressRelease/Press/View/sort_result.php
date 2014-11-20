<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Bookstore</title>
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
        

        <h1>Searching Your News</h1>
        <div id="sidebar">
            <h2>News</h2>
            <table>
        <table class="striped">
            <tr class="header">
                <td>Headline</td>
                <td>Summery</td>
                <td>Company Name</td>
                <td>News body</td>
                 <td> Date</td>
                  <td> Email</td>
            </tr>
             <?php   Print "<table border cellpadding=13>"; ?>
            <?php foreach ($books as $publisher) : ?>
             
                   
                      <?php  Print "<tr>"; 
 Print " <td>".$publisher['headline'] . "</td> "; 
 Print " <td>".$publisher['summery'] . "</td> "; 
  Print " <td>".$publisher['companyname'] . "</td> "; 
   Print " <td>".$publisher['newsbody'] . "</td> "; 
    Print " <td>".$publisher['releasedate'] . " </td>";
 Print " <td>".$publisher['email'] . " </td>";?>
                       
               
            <?php endforeach; ?>
           <?php Print "</table>";?>
        </div>
        
               <a href="../View/HomePage.php">Home Page</a>
            </body>
</html>
