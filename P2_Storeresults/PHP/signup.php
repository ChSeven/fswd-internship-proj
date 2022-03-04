<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
    include '../DBconnect/dbConnect.php';

    if(isset($_POST['submit']))
    {
        $name= $_POST['name'];
        $USN= $_POST['USN'];
        $email= $_POST['email'];
        $pass= $_POST['pass'];
        $re_pass=$_POST['re_pass'];
        $password = password_hash($pass, PASSWORD_BCRYPT);
        $REpassword = password_hash($re_pass, PASSWORD_BCRYPT);
        $emailquery=" select * from users where email='$email' ";
        $query = mysqli_query($con,$emailquery);
        $emailcont = mysqli_num_rows($query);
            if($pass===$re_pass)
            {
                $insertquery= "insert into  users(name, USN, email, pass) values('$name','$USN','$email','$pass')";
                $iquery=mysqli_query($con,$insertquery);
                if($con)
            {
                ?>
                <script>
                    alert("User Created");
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
            else
            {
                echo "passwords not matching";
            }
        }
    ?>
    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="USN"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="USN" id="USN" placeholder="Your USN"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../images/our-official-logo.png" alt="sing up image"></figure>
                        <a href="../login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>