<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <div class="container" style="background-color:blue ; color:white ;">
    <center>
        <fieldset style="width:25%">
            <form action="login.php" method="post">
                Name<input type="text" name="name"><br><br>
                E-mail<input type="email" name="email"><br><br>
                Password<input type="password" name="password"><br><br>
                Re-type password<input type="password" name="confirm"><br><br> 
                <input type="submit" name="signup" value="SIGNUP">
            </form>
        </fieldset>
        <a href="login.php"><h3 style="color:white">Already have an account, login</h3></a>
    </center>
    </div>
</body>
</html>