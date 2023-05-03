<?php
include "connection.php";
if(isset($_POST['login']))
{
$name_fm=$_POST['name'];
$email_fm=$_POST['email'];

    $select=$connect->query("SELECT * FROM signup");
while($row=mysqli_fetch_array($select))
{
    $name_db=$row['name'];
    $email_db=$row['email'];
}

if($name_fm==$name_db && $email_fm==$email_db)
{
      echo "<script>window.location.replace('home.php')</script>";
}
else{
     echo "<script>alert('Imvalid Crediantials')</script>";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>
<div class="login" style="background-color:blue ; height:100%">
<center>
        <fieldset style="width:25%" >
            <form action="home.php" method="post">
                Name: <input type="text" name="name"><br><br>
                E-mail: <input type="email" name="email"><br><br>
                Password: <input type="password" name="password"><br><br>
                <input type="submit" name="login" value="LOGIN">
            </form>
        </fieldset>
    </center>

</body>
</html>