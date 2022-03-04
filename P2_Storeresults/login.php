<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    session_start();
    include 'DBconnect/dbConnect.php';
    if(isset($_POST['submit']))
    {
        $USN=$_POST['USN'];
        $pass=$_POST['pass'];
        $_SESSION['myusn']=$USN;
        $authquery="select * from users where USN='$USN' AND pass='$pass'";
        $query= mysqli_query($con,$authquery);
        $count = mysqli_num_rows($query);
        if($count)
        {
            ?>
            <script>
                alert("login Successfull");
                location.replace("PHP/welcome.php");
                </script>
                <?php
        }
        else{
            ?>
            <script>
                alert("USN or Password is invalid or USN doesn't match with the Password.");
            </script>
            <?php
        }
    }
    ?>
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/our-official-logo.png" alt="sing up image"></figure>
                        <a href="PHP/signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form" >
                            <div class="form-group">
                                <label for="your_USN"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="USN" id="your_USN" placeholder="Your USN"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>