<?php
session_start();
include '../DBconnect/dbConnect.php';
    $queryrun=mysqli_query($con,$_SESSION['query']);
    $count=mysqli_num_rows($queryrun);
    if($count)
    {
        ?>
        <script>
            alert("result exists"+<?php echo $count; ?>)
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("resutl doesn't exist");
            location.replace("welcome.php");
        </script>
        <?php 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/result.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
<div class="top_container">
<img src="../images/our-official-logo.png" alt="">
        <h1 class="heading">CompsTechnologies</h1>
    </div>
    <hr>
    <div class="midcontainer">   
        <?php
        while($row = mysqli_fetch_array($queryrun))
        {
            ?>
               <p style="margin: 0px; margin-bottom: 7px;">
               <span> University Seat Number   &nbsp;:</span><?php echo $row['USN']; ?>
            </p>
            <p style="margin: 0px; margin-bottom: 7px;">
            <span>
                    Student Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span><?php echo $row['name']; ?>
            </p>
            <p class="middle">
               <span>Semester:<?php echo $row['Sem']; ?></span> 
            </p>
            <table class="table table-bordered border-dark">
                <tr>
                    <th id="bb">Sl.no</th>
                    <th id="aa">Subject Name </th>
                    <th id="bb">Marks</th>
                </tr>
                <tr>
                    <td id="bb">1</td>
                    <td  id="aaa"><?php echo $row['s1name']; ?></td>
                    <td id="bb" id="aaa"><?php echo $row['s1marks']; ?></td>
                </tr>
                <tr>
                <td id="bb">2</td>
                    <td id="aaa"><?php echo $row['s2name']; ?></td>
                    <td id="bb"><?php echo $row['s2marks']; ?></td>
                </tr>
                <tr>
                <td id="bb">3</td>
                    <td id="aaa"><?php echo $row['s3name']; ?></td>
                    <td id="bb"><?php echo $row['s3marks']; ?></td>
                </tr>

                <tr>
                <td id="bb">4</td>
                    <td id="aaa"><?php echo $row['s4name']; ?></td>
                <td id="bb"><?php echo $row['s4marks']; ?></td>
            </tr>
            <tr>
            <td id="bb">5</td>
                <td id="aaa"><?php echo $row['s5name']; ?></td>
                <td id="bb"><?php echo $row['s5marks']; ?></td>
            </tr>
            <tr>
            <td id="bb">6</td>
                <td id="aaa"><?php echo $row['s6name']; ?></td>
                <td id="bb"><?php echo $row['s6marks']; ?></td>
            </tr>
            <tr>
            <td id="bb">7</td>
                <td id="aaa"><?php echo $row['s7name']; ?></td>
                <td id="bb"><?php echo $row['s7marks']; ?></td>
            </tr>
            <tr>
            <td id="bb">8</td>
                <td id="aaa"><?php echo $row['s8name']; ?></td>
                <td id="bb"><?php echo $row['s8marks']; ?></td>
            </tr>
            <td id="bb">9</td>
                <td id="aaa"><?php echo $row['s9name']; ?></td>
                <td id="bb"><?php echo $row['s9marks']; ?></td>
            </tr>
        </table>
        <div class="bottomcontainer">
            <button type="button" onclick="printsrn()" class="btn btn-primary">Print Result</button>
            <button style="margin-left:40px;" type="button" onclick="goback()" class="btn btn-secondary">Back</button>
        </div>
        <?php
    }
    ?>
</div>
<script>
        function printsrn() {
            window.print();
        }
        function goback() {
            location.replace("welcome.php");
        }
    </script>
</body>
</html>