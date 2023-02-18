<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$fname =$_POST ['fname'];
$lname =$_POST['lname'];
$age   =$_POST['age'];
$email =$_POST['email'];
$con =@mysqli_connect('localhost','root','','pavi');
$query ="insert into cakeshop values ('$fname','$lname','$age','$email')";
$result = mysqli_query($con,$query);
if ($result)
{echo "data inserted sucessfully";}
else {
    echo "data not inserted sucessfully";
}
?>
<html>
<body>
    <?php
   if($result==1){
       ?> 
    <h2>Your user id is </h2><?php echo $fname; ?>
    <h2>Your password is </h2><?php echo $lname; ?>
    <?php
   }
   ?>
    
  </body>
</html>
