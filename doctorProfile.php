<?php

include "config.php";

if(isset($_POST["button"])){

  $firstname= $_POST["firstname"];
  $lastname= $_POST["lastname"];
  $email= $_POST["email"];
  $phone= $_POST["phone"];
  $medicine= $_POST["medicine"];
  $doctime= $_POST["doctime"];
  $note= $_POST["note"];
  
 $query = "INSERT INTO docinfo(id,firstname,lastname,email,phone,medicine,doctime,note) VALUES ('','$firstname','$lastname','$email','$phone','$medicine','$doctime','$note')";

  $query_run = mysqli_query($conn,$query);
  if($query_run){
        echo "<script> alert('Information Inserted Successfully.');</script>";
      
  }else{

    echo "<script> alert('Please Check Field/s again.');</script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="childinfoStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>	

    <title>Doctor Info Form</title>

<style>
.home{
 margin-right: 10px;
 padding-top: 10px;
 float: right;
}

</style>

</head>
<body>
<section class="vh-100 gradient-custom">
<p class="home"><a href="homePage.php" ><i class="fas fa-house-user fa-2x" style="color:#DDDDDD;"></i></a></p>
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Doctor Info Form</h3>
            
            <form method="POST" action="" autocomplete="off" >

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name ="firstname" class="form-control form-control-lg"  placeholder="Firstname"/>
                    <!--<label class="form-label" for="firstName">First Name</label>-->
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="lastname" class="form-control form-control-lg" placeholder="Lastname" />
                   <!-- <label class="form-label" for="lastName">Last Name</label>-->
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" />
                 
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phone" name="phone" class="form-control form-control-lg" placeholder="Phone" />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-4">

                  <div class="form-outline">
                    <input type="text" id="medicine" name="medicine" class="form-control form-control-lg" placeholder="Medicine Name" />
                 
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-4">

                  <div class="form-outline">
                  <label for="time">Select a time:</label>
                    <input type="time" id="doctime" name="doctime" class="form-control form-control-lg" placeholder="" />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-10 mb-4 pb-6">
                  <div class="form-outline">
                    <input type="textarea" id="note" name="note" class="form-control form-control-lg" placeholder="Note" />
                  </div>

                </div>
              <div class="mt-4 pb-2">
                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 
                <input class="btn btn-primary btn-lg" type="submit" name ="button" value="Submit" />&nbsp; &nbsp;
                <input class="btn btn-primary btn-lg" type="submit" name ="button1" value="Delete" />&nbsp; &nbsp;
                <input class="btn btn-primary btn-lg" type="submit" name ="button2" value="Modify" />
              </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>