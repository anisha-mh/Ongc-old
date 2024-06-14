<?php 
session_start();
include "connection.php"; ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="box form-box">
            <header> Login Page </header>
            <form action="login.php" method="post">

            <?php include "errors.php"; ?>
            
                <div class="field input">
                    <label for="username">CPF NO.</label>
                    <input type="text" name="username" id="username" placeholder="CPF number" title="Please enter your CPF number" required>
                </div>    

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="********" title="Please enter your password" required>
                </div> 

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div> 

                <div class="links">
                    <a href="sign_up.php">Sign Up Here</a>
                </div>

                <div class="links">
                    <a href="passwordreset.php">Reset Password Here</a>
                </div>

            </form>
        </div>
    </div>


    <?php
    if(isset($_POST["login"]))
    {
        $count=0;
        $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]'");

        $count=mysqli_num_rows($res);

        if($count==0)
        {
            ?>
            <script type="text/javascript">
                document.getElementById("failure").style.display="block";
            </script>   
            <?php
        }
        else{
            ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
            <?php  
        }
    }
    ?>

</body>

</html>