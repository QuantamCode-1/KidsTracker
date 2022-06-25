

<?php

//https://www.youtube.com/watch?v=kffivnAYUAY


include 'config.php';

if(isset($_POST["button"])){

    $username = $_POST["username"];
    $password=$_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username'");
    $row = mysqli_fetch_assoc($result);


    if((mysqli_num_rows($result)>0 && (!empty($username)|| !empty($password)))){
        if($password==$row["password"]){
         $_SESSION["index"] = true;
         $_SESSION["id"]=$row["id"];

         header("Location: homePage.php");

        }
        else{

            echo
            "<script> alert('Wrong Password');</script>";
        }

    }else{
        
        echo
            "<script> alert('User not Registered or Fields are empty.');</script>";
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<title> Login Form</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="loginbox">
<img src ="pic1.jpg" class ="avatar">
<h1> Login Here</h1>
<form method="POST" action="" autocomplete="off">
<p> Username</p>
<input type ="text" id="name" name="username" placeholder="">
<p>Password</p>
<input type="password" id="password" name="password" placeholder="">

<input type ="submit" name="button" value="Login">
<a href="#">Forget your password?</a> <br>
<a href="register.php">Don't have an account?</a>
</form>
</div>

</body>
</html>