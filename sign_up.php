
<?php include "connection.php"; ?>

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
            <header> Sign Up </header>
            <form action="" method="post">

                <?php include "errors.php"; ?>

                <div class="field input">
                    <label for="username">CPF NO.</label>
                    <input type="text" name="username" id="username" placeholder="CPF number" title="Please enter your CPF number" required>
                </div>    

                <div class="field input">
                    <label for="username">Enter your name</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="password">Create Password</label>
                    <input type="password" name="password" id="password" placeholder="********" title="Please enter your password" autocomplete="off" required>
                </div> 

                <div class="field input">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="password" id="password" placeholder="********" title="Please enter your password" autocomplete="off" required>
                </div> 

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Sign Up" required>
                </div> 

                <div class="links">
                    Already a member? <a href="login.php">Login Here</a>
                </div>

            </form>
        </div>
    </div>


</body>           

</html>

