<?php
include "connection.php";
if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    if($password==$confirm){
        $insert=$connect->query("INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')");
    }
    else{
        echo "<script>alert('Double check your credentials')</script>";
    }
    if($insert){
    ?>
    <script>
        window.alert("account created");
        window.location.href="login.php";
    </script>
    <?php
}
}
?>