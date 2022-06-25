<?php
include "config.php";


if(isset($_POST["button"])){

   $eventname = $_POST["eventname"];
   $eventdate = $_POST["eventdate"];
   $eventtime = $_POST["eventtime"];
   $eventvenue= $_POST["eventvenue"];

 $query = "INSERT INTO eventinfo(eventname,eventdate,eventtime,eventvenue) VALUES ('$eventname','$eventdate','$eventtime','$eventvenue')";
  
  $query_run = mysqli_query($conn,$query);
  if($query_run){
        echo "<script> alert('Information Inserted Successfully.');</script>";
      
  }else{

    echo "<script> alert('Please Check Field/s again.');</script>";
  }


}

if(isset($_POST["button1"])){

  $eventname= $_POST["eventname"];
  //$schoolnm = strtolower($schoolname);

 
 

  if ($eventname=="" ){
    echo "<script> alert('Please Check Field/s again.');</script>";
    
  }
 else{
   $query = "DELETE FROM eventinfo where eventname='$eventname'";

   $query_run = mysqli_query($conn,$query);
   echo "<script> alert('Data Deleted Successfully.');</script>";
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

    <title>EventInfo Form</title>

    <style>
.home{
 margin-right:10px;
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Event Info </h3>
            <form method="POST" action="" autocomplete="off">

              <div class="row">
                <div class="col-md-8 mb-4">

                  <div class="form-outline">
                    <input type="text" id="eventname"  name ="eventname" class="form-control form-control-lg" />
                    <label class="form-label" for="event">Event Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-1 pb-1">

                  <div class="form-outline">
                    <input type="date" id="eventdate"  name ="eventdate" class="form-control form-control-lg" />
                    <label class="form-label" for="date">Date</label>
                  </div>

                </div>

                <div class="col-md-4 mb-1 pb-1">

                  <div class="form-outline">
                    <input type="time" id="eventtime"  name ="eventtime" class="form-control form-control-lg" />
                    <label class="form-label" for="date">Time</label>
                  </div>

                </div>
              </div> 

              <div class="row">

               <div class="col-md-8 mb-0 pb-2">
                  <div class="form-outline">
                    <textarea id="eventvenue"  name ="eventvenue" class="form-control form-control-lg"></textarea>
                    <label class="form-label" for="event">Venue</label>
                  </div>

                </div>
              </div>

               <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg"  name="button" type="submit" value="Save" />&nbsp;&nbsp;
                <input class="btn btn-primary btn-lg"  name="button1" type="submit" value="Delete" />

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