<?php
    $status=0;
    if(isset($_POST['submit'])){
        $fname = $_POST['First Name'];
        $lname = $_POST['Last Name'];
        $Age = $_POST['Age'];
        $email = $_POST['Email'];
        $password = md5($password);
        $query = "select * from Users where First Name='$fname' and Last Name='$lname' and Age='$Age' and Email='$email'";
        require_once './includes/db.php';
        $result = mysql_query($query);
        if(mysql_num_rows($result)==1){
            $row = mysql_fetch_assoc($result);
            $name=$row['Name'];
            $role = $row['RoleName'];
            session_start();
            $_SESSION['userid'] = $userid;
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            header("Location: members/index.php");
        }else{
            $status=1;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <?php include_once './includes/header.php';?>
        <div id="content">
            <table style="width: 100%" cellpadding="10">
                <tr>
                    <td style="width: 65%">
                        <h2 style="text-align: center">Welcome to OnlineEducation</h2>
                        <p style="text-align: justify">
                            Adaptation means a work based upon the Work, or upon the Work and other pre-existing works, such as a translation, adaptation, derivative work, arrangement of music or other alterations of a literary or artistic work, or phonogram or performance and includes cinematographic adaptations or any other form in which the Work may be recast, transformed, or adapted including in any form recognizably derived from the original, except that a work that constitutes a Collection will not be considered an Adaptation for the purpose of this License. For the avoidance of doubt, where the Work is a musical work, performance or phonogram, the synchronization of the Work in timed-relation with a moving image ("synching") will be considered an Adaptation for the purpose of this License.
                        </p>
                        <p style="text-align: justify">
                            Adaptation means a work based upon the Work, or upon the Work and other pre-existing works, such as a translation, adaptation, derivative work, arrangement of music or other alterations of a literary or artistic work, or phonogram or performance and includes cinematographic adaptations or any other form in which the Work may be recast, transformed, or adapted including in any form recognizably derived from the original, except that a work that constitutes a Collection will not be considered an Adaptation for the purpose of this License. For the avoidance of doubt, where the Work is a musical work, performance or phonogram, the synchronization of the Work in timed-relation with a moving image ("synching") will be considered an Adaptation for the purpose of this License.
                        </p>
                    </td>
                    <td align="center">
                        <h3>Login Form</h3>
                        <form action="login.php" method="post">
                            <table cellpadding="10" width="100%" style="border: 1px solid black">
                                <tr>
                                    <td>User ID : </td>
                                    <td><input type="text" name="UserId" value="" /></td>
                                </tr>
                                <tr>
                                    <td>Password : </td>
                                    <td><input type="password" name="Password" value="" /></td>
                                </tr> 
                                <tr>
                                    <td colspan="2" align="center" >
                                        <input type="submit" value="Log In" name="submit" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                            if($status==1){
                        ?>
                        <span style="color:red">Login Failed. Try Again</span>
                        <?php
                            }
                        ?>
                        <br>
                        <br>
                        <a class="link-style" href="register.php">New User : Register Here</a>
                        <br>
                        <br>
                        <a class="link-style" href="forgotpassword.php">Forgot Password</a>
                    </td>
                </tr>
            </table>
        </div>
        <?php include_once './includes/footer.php';?>
    </body>
</html>
