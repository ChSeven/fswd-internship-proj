<?php
session_start();

include '../DBconnect/dbConnect.php';
if(isset($_POST['submit']))
{

  $NAME=$_POST['NAME'];
  $USN=$_SESSION['myusn'];
  $sem=$_SESSION['mysem'];
  $S1N=$_POST['S1N'];
  $S1M=$_POST['S1M'];
  $S2N=$_POST['S2N'];
  $S2M=$_POST['S2M'];
  $S3N=$_POST['S3N'];
  $S3M=$_POST['S3M'];
  $S4N=$_POST['S4N'];
  $S4M=$_POST['S4M'];
  $S5N=$_POST['S5N'];
  $S5M=$_POST['S5M'];
  $S6N=$_POST['S6N'];
  $S6M=$_POST['S6M'];
  $S7N=$_POST['S7N'];
  $S7M=$_POST['S7M'];
  $S8N=$_POST['S8N'];
  $S8M=$_POST['S8M'];
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
}
else
{
  $insertquery="insert into sem1(name, USN, Sem, s1name, s1marks, s2name, s2marks, s3name, s3marks, s4name, s4marks, s5name, s5marks, s6name, s6marks, s7name, s7marks, s8name, s8marks) values('$NAME','$USN','$sem','$S1N','$S1M','$S2N','$S2M','$S3N','$S3M','$S4N','$S4M','$S5N','$S5M','$S6N','$S6M','$S7N','$S7M','$S8N','$S8M')";
  $iquery=mysqli_query($con,$insertquery);
  if($con)
  {
    ?>
      <script>
          alert("Result inserted into database");
          location.replace("welcome.php");
       </script>
      <?php
  }else{
    ?>
      <script>
          alert("something went wrong");
      </script>
      <?php
  }
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
}
else
{
  $insertquery="insert into sem2(name, USN, Sem, s1name, s1marks, s2name, s2marks, s3name, s3marks, s4name, s4marks, s5name, s5marks, s6name, s6marks, s7name, s7marks, s8name, s8marks) values('$NAME','$USN','$sem','$S1N','$S1M','$S2N','$S2M','$S3N','$S3M','$S4N','$S4M','$S5N','$S5M','$S6N','$S6M','$S7N','$S7M','$S8N','$S8M')";
  $iquery=mysqli_query($con,$insertquery);
  if($con)
  {
    ?>
      <script>
          alert("Result inserted into database");
          location.replace("welcome.php");
       </script>
      <?php
  }else{
    ?>
      <script>
          alert("something went wrong");
      </script>
      <?php
  }
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
}
else
{
  $insertquery="insert into sem6(name, USN, Sem, s1name, s1marks, s2name, s2marks, s3name, s3marks, s4name, s4marks, s5name, s5marks, s6name, s6marks, s7name, s7marks, s8name, s8marks) values('$NAME','$USN','$sem','$S1N','$S1M','$S2N','$S2M','$S3N','$S3M','$S4N','$S4M','$S5N','$S5M','$S6N','$S6M','$S7N','$S7M','$S8N','$S8M')";
  $iquery=mysqli_query($con,$insertquery);
  if($con)
  {
    ?>
      <script>
          alert("Result inserted into database");
          location.replace("welcome.php");
       </script>
      <?php
  }else{
    ?>
      <script>
          alert("something went wrong");
      </script>
      <?php
  }
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
}
else
{
  $insertquery="insert into sem7(name, USN, Sem, s1name, s1marks, s2name, s2marks, s3name, s3marks, s4name, s4marks, s5name, s5marks, s6name, s6marks, s7name, s7marks, s8name, s8marks) values('$NAME','$USN','$sem','$S1N','$S1M','$S2N','$S2M','$S3N','$S3M','$S4N','$S4M','$S5N','$S5M','$S6N','$S6M','$S7N','$S7M','$S8N','$S8M')";
  $iquery=mysqli_query($con,$insertquery);
  if($con)
  {
    ?>
      <script>
          alert("Result inserted into database");
          location.replace("welcome.php");
       </script>
      <?php
  }else{
    ?>
      <script>
          alert("something went wrong");
      </script>
      <?php
  }
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
}
else
{
  $insertquery="insert into sem8(name, USN, Sem, s1name, s1marks, s2name, s2marks, s3name, s3marks, s4name, s4marks, s5name, s5marks, s6name, s6marks, s7name, s7marks, s8name, s8marks) values('$NAME','$USN','$sem','$S1N','$S1M','$S2N','$S2M','$S3N','$S3M','$S4N','$S4M','$S5N','$S5M','$S6N','$S6M','$S7N','$S7M','$S8N','$S8M')";
  $iquery=mysqli_query($con,$insertquery);
  if($con)
  {
    ?>
      <script>
          alert("Result inserted into database");
          location.replace("welcome.php");
       </script>
      <?php
  }else{
    ?>
      <script>
          alert("something went wrong");
          location.replace("welcome.php");
      </script>
      <?php
  }
}
      break;
      case 3:
        ?>
      <script>
        alert("This form doesn't take input for sem 3, 4 and 5");
        location.replace("Setmarks.php");
      </script>
      <?php
      break;
      case 5:
        ?>
      <script>
        alert("This form doesn't take input for sem 3, 4 and 5");
        location.replace("Setmarks.php");
      </script>
      <?php
      break;
      case 4:
        ?>
      <script>
        alert("This form doesn't take input for sem 3, 4 and 5 choose sem 3, 4 or 5 in the previous page and try again");
        location.replace("Setmarks.php");
      </script>
      <?php
      break;
      
      default:
      ?>
    <script>
      alert("Invalid Semester");
    </script>
    <?php
      break;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Setmarks</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/home.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Marks gathering</h2>
  <p>Please enter details asked below</p>
  <form action="" method="post"> 
    <div class="formcontainer">
      <label style="margin: 0px; margin-left:290px; margin-bottom:30px;" for=""> Name:- </label><input  type="text" name="NAME"><br><br>
      <label style="margin: 0px;margin-left:250px;" for=""> SUB1Name:- </label><input type="text" name="S1N">
      <label style="margin: 0px;margin-left:50px;" for=""> SUB1Marks:- </label><input type="number" name="S1M"><br><br>
      <label style="margin: 0px;margin-left:250px;" for=""> SUB2Name:- </label><input type="text" name="S2N">
      <label style="margin: 0px;margin-left:50px;" for=""> SUB2Marks:- </label><input type="number" name="S2M"><br><br>
      <label style="margin: 0px;margin-left:250px;" for=""> SUB3Name:- </label><input type="text" name="S3N">
      <label style="margin: 0px;margin-left:50px;" for=""> SUB3Marks:- </label><input type="number" name="S3M"><br><br>
      <label style="margin: 0px;margin-left:250px;" for=""> SUB4Name:- </label><input type="text" name="S4N">
      <label style="margin: 0px;margin-left:50px;" for=""> SUB4Marks:- </label><input type="number" name="S4M"><br><br>
      <label style="margin: 0px;margin-left:250px;" for=""> SUB5Name:- </label><input type="text" name="S5N">
      <label style="margin: 0px;margin-left:50px;" for=""> SUB5Marks:- </label><input type="number" name="S5M"><br><br>
      <label style="margin: 0px;margin-left:250px;" for=""> SUB6Name:- </label><input type="text" name="S6N">
      <label style="margin: 0px;margin-left:50px;" for=""> SUB6Marks:- </label><input type="number" name="S6M"><br><br>
      <label style="margin: 0px;margin-left:250px;" for=""> SUB7Name:- </label><input type="text" name="S7N">
      <label style="margin: 0px;margin-left:50px;" for=""> SUB7Marks:- </label><input type="number" name="S7M"><br><br>
      <label style="margin: 0px;margin-left:250px;" for=""> SUB8Name:- </label><input type="text" name="S8N">
      <label style="margin: 0px;margin-left:50px;" for=""> SUB8Marks:- </label><input type="number" name="S8M"><br><br>
      <input style="margin-left:500px;" type="submit" class="btn btn-primary" name="submit"></input>
  </div>
</form>
</div>
</body>
</html>