
<?php
 include "config.php";

$sql = "SELECT * FROM schoolinfo ORDER BY states DESC ";
$result = mysqli_query($conn,$sql);

$childsql = "SELECT firstname, lastname,birthdate,gender,email,phone
from childinfo";
$result1 = mysqli_query($conn, $childsql);

$eventsql = "SELECT * FROM eventinfo";
$result2 = mysqli_query($conn, $eventsql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>	

    <title>Fetching Info</title>

    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }

        .home{
      
      float: right;
}

    </style>
</head>
  
<body>

    <section>
    <p class="home"><a href="homePage.php" ><i class="fas fa-house-user fa-2x" style="color:blue;"></i></a></p>
        <h1>School Information: </h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>ID</th>
                <th>School Name</th>
                <th>Street</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Teacher</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['schoolname'];?></td>
                <td><?php echo $rows['street'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['states'];?></td>
                <td><?php echo $rows['zip'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['teachername'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
    <hr style="margin-top:15px; height:6px;border-width:0;color:gray;background-color:gray"/> 

    <section>
    
        <h1>Child Information: </h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
              
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result1->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['firstname'];?></td>
                <td><?php echo $rows['lastname'];?></td>
                <td><?php echo $rows['birthdate'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['phone'];?></td>
                
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
    <hr style="margin-top:15px; height:6px;border-width:0;color:gray;background-color:gray"/> 

    <section>
    
        <h1>Event Information: </h1>

        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Event Name</th>
                <th>Event Date</th>
                <th>Event Time</th>
                <th>Venue</th>
              
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result2->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['eventname'];?></td>
                <td><?php echo $rows['eventdate'];?></td>
                <td><?php echo $rows['eventtime'];?></td>
                <td><?php echo $rows['eventvenue'];?></td>
       
                
            </tr>
            <?php
                }
             ?>
        </table>
    </section>

</body>
  
</html>