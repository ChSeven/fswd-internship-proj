<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "project2";
$con = mysqli_connect($db_host,$db_user,$db_password,$db_name);
if($con)
{
}else{
    ?>
    <script>
        alert("something went wrong");
    </script>
    <?php
}
?>