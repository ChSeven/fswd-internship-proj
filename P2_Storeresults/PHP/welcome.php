<?php
session_start();
include '../DBconnect/dbConnect.php';
if(isset($_POST['result']))
{
    ?>
    <script>
        location.replace("Result.php");
        </script>
    <?php
}
if(isset($_POST['create']))
{
    ?>
    <script>
        location.replace("Setmarks.php");
        </script>
    <?php
}
if(isset($_POST['delete']))
{
    ?>
    <script>
        location.replace("Delete.php");
        </script>
    <?php
}
if(isset($_POST['logout']))
{
    unset($_SESSION['usn']);
    unset($_SESSION['sem']);
    ?>
    <script>
        location.replace("../login.php");
        </script>
    <?php
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
    <title>Welcome</title>
</head>
<body>
    <div class="top_container">
        <img src="../images/our-official-logo.png" alt="">
        <h1 class="heading">CompsTechnologies</h1>
    </div>
    <form action="" method="post">
        <div class="mid_container">
            <h2>Welcome to our Website your one stop to store your marks.</h2>
            <input type="submit" name="result" id="buttoon1" class="buttoon btn btn-outline-success" value="Get Result"></input>
            <input type="submit" name="create" id="buttoon"  class="btn btn-outline-primary" value="Store Result"></input>
            <input type="submit" name="delete" id="buttoon"  class="btn btn-outline-info" value="Delete Result"></input>
            <input type="submit" name="logout" id="buttoon" class="btn btn-outline-danger" value="Logout"></input>
        </div>
    </form>

        <div style="position:absolute;padding-top:20px; bottom: 0px; width: 100%; background-color: black; text-align:center;" >
            <p style="color:white;">Storemyresults is website created to engineering students to keep track of their marks of all semesters</p>
            <p style="color: white;">&#169;CompsTechnologies</p>
        </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>