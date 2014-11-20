
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
//session_name('varname');
//
//session_start();
 // $j = $_SESSION['variable_name'];
 session_name('password');
//session_start();
//echo 'passw = '.$_SESSION['password'];
?>
<html>
    <head>
        <script>
function myFunction()
{
    
document.getElementById("demo").innerHTML="Hello World";
}
</script>
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
        <form action="../controller/controller.php" method="post">
     <?php   // echo 'Email = '.$_SESSION['email'].'<br>';
     ?>
            <a href="../View/HomePage.php">Home Page</a>
            <a href="../View/HomePage.php">logout</a>
            <a href="../View/edit_press.php">Add new News</a>
            <a href="../View/change_pass.php">Change Password</a>
            
   <?php   
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
              <?php   Print "<table border cellpadding=13>"; 
 
      
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
  <?php echo"$headline"; ?>
 <input type="hidden" name="headline<?php echo"$i"; ?>" value="<?php echo"$headline"; ?>" ></label>
       </td>
        <td>      
  <?php echo"$summery"; ?>
 <input type="hidden" name="summery<?php echo"$i"; ?>" value="<?php echo"$summery"; ?>" ></label>
       </td>
       <td>      
  <?php echo"$newsbody"; ?>
 <input type="hidden" name="newsbody<?php echo"$i"; ?>" value="<?php echo"$newsbody"; ?>" ></label>
       </td>
       <td>      
  <?php echo"$companyname"; ?>
 <input type="hidden" name="companyname<?php echo"$i"; ?>" value="<?php echo"$companyname"; ?>" ></label>
       </td>
          <td>      
  <?php echo"$releasedate"; ?>
 <input type="hidden" name="releasedate<?php echo"$i"; ?>" value="<?php echo"$releasedate"; ?>" ></label>
       </td>
        <td>      
  <?php echo"$email"; ?>s
 <input type="hidden" name="email<?php echo"$i"; ?>" value="<?php echo"$email"; ?>" ></label>
       </td>

  <td>                    
   <?php echo"Delete"; ?>                  
      <input type="submit" name="submit<?php echo"$i"; ?>" value="<?php $i; echo "$i";?>" ></td> 
 
 
  
  <td align="center"><a href='../View/edit.php?i=<?php echo"$i"; ?>'>update</a></td>
  
       
</tr>



                <?php }//endforeach; ?>

</form>
        
    </body>
    
</html>

