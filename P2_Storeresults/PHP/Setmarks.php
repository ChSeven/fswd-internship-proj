<?php
session_start();
include '../DBconnect/dbConnect.php';
if(isset($_POST['submit']))
{
    $sem=$_POST['sem'];
    $USN=$_SESSION['myusn'];
    $_SESSION['mysem']=$sem;
    switch ($sem) {
        case 1:
            $usnquery="select * from sem1 where USN='$USN'";
            $query= mysqli_query($con,$usnquery);
            $count= mysqli_num_rows($query);
            if($count)
          {
            ?>
            <script>
              alert("Result already exists");
              location.replace("welcome.php");
              </script>
              <?php
          }else
          {

              ?>
            <script>
                location.replace("setmarks1.php");
                </script>
            <?php
            }
            break;
        case 2:
            $usnquery="select * from sem2 where USN='$USN'";
            $query= mysqli_query($con,$usnquery);
            $count= mysqli_num_rows($query);
            if($count)
          {
            ?>
            <script>
              alert("Result already exists");
              location.replace("welcome.php");
              </script>
              <?php
          }else
          {

              ?>
            <script>
                location.replace("setmarks1.php");
                </script>
            <?php
            }
            break;
        case 3:
            $usnquery="select * from sem3 where USN='$USN'";
            $query= mysqli_query($con,$usnquery);
            $count= mysqli_num_rows($query);
            if($count)
          {
            ?>
            <script>
              alert("Result already exists");
              location.replace("welcome.php");
              </script>
              <?php
          }else
          {

              ?>
            <script>
                location.replace("setmarks2.php");
                </script>
            <?php
            }
            break;
        case 4:
            $usnquery="select * from sem4 where USN='$USN'";
            $query= mysqli_query($con,$usnquery);
            $count= mysqli_num_rows($query);
            if($count)
          {
            ?>
            <script>
              alert("Result already exists");
              location.replace("welcome.php");
              </script>
              <?php
          }else
          {

              ?>
            <script>
                location.replace("setmarks2.php");
                </script>
            <?php
            }
            break;
        case 5:
            $usnquery="select * from sem5 where USN='$USN'";
            $query= mysqli_query($con,$usnquery);
            $count= mysqli_num_rows($query);
            if($count)
          {
            ?>
            <script>
              alert("Result already exists");
              location.replace("welcome.php");
              </script>
              <?php
          }else
          {

              ?>
            <script>
                location.replace("setmarks2.php");
                </script>
            <?php
            }
            break;
        case 6:
            $usnquery="select * from sem6 where USN='$USN'";
            $query= mysqli_query($con,$usnquery);
            $count= mysqli_num_rows($query);
            if($count)
          {
            ?>
            <script>
              alert("Result already exists");
              location.replace("welcome.php");
              </script>
              <?php
          }else
          {

              ?>
            <script>
                location.replace("setmarks1.php");
                </script>
            <?php
            }
            break;
        case 7:
            $usnquery="select * from sem7 where USN='$USN'";
            $query= mysqli_query($con,$usnquery);
            $count= mysqli_num_rows($query);
            if($count)
          {
            ?>
            <script>
              alert("Result already exists");
              location.replace("welcome.php");
              </script>
              <?php
          }else
          {

              ?>
            <script>
                location.replace("setmarks1.php");
                </script>
            <?php
            }
            break;
        case 8:
            $usnquery="select * from sem8 where USN='$USN'";
            $query= mysqli_query($con,$usnquery);
            $count= mysqli_num_rows($query);
            if($count)
          {
            ?>
            <script>
              alert("Result already exists");
              location.replace("welcome.php");
              </script>
              <?php
          }else
          {

              ?>
            <script>
                location.replace("setmarks1.php");
                </script>
            <?php
            }
            break;

        default:
        ?>
        <script>
            alert("Invalid semester");
        </script>
        <?php
            break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lato&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setmarks_home</title>
</head>
<body>
    <div class="top_container">
        <form action="" method="post">
        <img src="../images/our-official-logo.png" alt="">
            <h1 class="heading">CompsTechnologies</h1>
        </div>
        <div class="mid_container">
            <form>
                <div class="form-group">
                    <label style="padding-left:20px;">Semester</label>
                    <input type="number" class="form-control" id="btn" name='sem' placeholder="1,2,3....8">
                </div>
                <input style="margin-left:310px; margin-top:20px; " type="submit" name="submit" class="btn btn-primary"></input>
                <button style="margin-left:40px; margin-top:20px;" type="button" onclick="goback()" class="btn btn-secondary">Back</button>
            </form>
        </div>
    </form>
    <script>
        function goback() {
            location.replace("welcome.php");
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>