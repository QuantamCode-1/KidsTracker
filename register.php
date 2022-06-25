<?php
require 'config.php';

if(isset($_POST['button'])){

    $name = $_POST['myname'];
    $username =$_POST['username'];
    $password = $_POST['password'];

    $duplicate = mysqli_query($conn,"SELECT * FROM tb_user WHERE username ='$username'");
    if(mysqli_num_rows($duplicate)>0){

        echo 
        "<script> alert('Email for username has already taken); </script>";
    }
    else{
        $query ="INSERT INTO tb_user (name,username,password) VALUES ('$name','$username','$password')";
        mysqli_query($conn,$query);
        echo 
        "<script> alert('Successfully Inserted); </script>";
    }
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="registerStyle.css">
</head>
<body>
        <div class="inner">
            <div class="photo">
                <img src="pic1.jpg">
            </div>
            <div class="user-form">
                <h1>Registration Form</h1>
                <form method="POST" action="" autocomplete ="off">
                   <p> <i class="fas fa-user icon"></i> 
                    <input type="text" id ="name" name="myname" placeholder="Your name"><p>
                   <p> <i class="fas fa-envelope icon"></i> 
                    <input type="email" id="uname" name="username" placeholder="Your e-mail"></p>
                    <p><i class="fas fa-lock icon"></i> 
                    <input type="password" id ="pass" name="password" placeholder="Create password"></p>
                    <!--
                    <div class="safety">
                        <span>Password strength</span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                    -->
                    <div class="action-btn">
                       <!-- <button class="btn primary">Create Account</button>-->
                       <input type="submit" name="button" value="Create Account" class="btn primary">
                       <button class="btn"><a href="index.php">Sign In</a></button>
                      

                    </div>
                </form>
            </div>
        </div>
</body>
</html>