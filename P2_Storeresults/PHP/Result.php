<?php
session_start();
if(isset($_POST['submit']))
{    
    $_SESSION['sem']=$_POST['sem'];
    $USN=$_SESSION['myusn'];
    switch ($_SESSION['sem']) {
        case 1:
            $_SESSION['query']="select * from sem1 where USN='$USN'";
            break;
        case 2:
            $_SESSION['query']="select * from sem2 where USN='$USN'";
            break;
        case 3:
            $_SESSION['query']="select * from sem3 where USN='$USN'";
            break;
        case 4:
            $_SESSION['query']="select * from sem4 where USN='$USN'";
            break;
        case 5:
            $_SESSION['query']="select * from sem5 where USN='$USN'";
            break;
        case 6:
            $_SESSION['query']="select * from sem6 where USN='$USN'";
            break;
        case 7:
            $_SESSION['query']="select * from sem7 where USN='$USN'";
            break;
        case 8:
            $_SESSION['query']="select * from sem8 where USN='$USN'";
            break;
        
        default:
            # code...
            break;
    }
    if($_SESSION['sem']==1||$_SESSION['sem']==2||$_SESSION['sem']==6||$_SESSION['sem']==7||$_SESSION['sem']==8)
    {
        ?>
    <script>
        location.replace("Result1.php");
    </script>
    <?php
}
elseif ($_SESSION['sem']==3||$_SESSION['sem']==4||$_SESSION['sem']==5) {
    
    ?>
        <script>
            location.replace("Result2.php");
        </script>
        <?php
}else
{
    ?>
    <script>
        alert("Invalid Semester");
    </script>
    <?php
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
    <title>Result_Home</title>
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
                    <label >Semester</label>
                    <input type="number" class="form-control" id="btn" name='sem' placeholder="1,2,3....8">
                </div>
                <input style="margin-left:350px; margin-top:20px; " type="submit" name="submit" class="btn btn-primary"></input>
            </form>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>