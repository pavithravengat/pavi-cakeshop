<?php
$flag=0;
$user=$_POST['UserName'];
$password=$_POST['Password'];
$dbirth=$_POST['Date of birth'];
@mysqli_connect('localhost', 'root', '','property');
$query = "insert into user values('$user','$password','$dbirth',)";
 
$con = mysqli_connect('localhost', 'root', '',"property");
 if($password===$confirm) 
 { 
   $result = mysqli_query($con,$query);
  if($result)
  {    
       $flag=1;
      
      echo "Data inserted successfully";

  }   
      
      
  }  
  else
  {
       echo("<SCRIPT LANGUAGE='JavaScript'> 
                            window.alert('WRONG  PASSWORD TRY AGAIN!') 
                            </SCRIPT>");
  }   
      
      ?>



<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration</title>
        <style>
            table,tr,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>

    <?php
            if($flag==1){            
        ?> 
        <h2>your user id is</h2> <?php echo $user; ?> 
        <h2> AND password is</h2><?php echo $password; ?> 
        
     <?php
            }
      ?> 
        
        
        
        
        
        
         </body>
</html>