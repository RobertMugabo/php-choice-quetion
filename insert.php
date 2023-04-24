<?php
include "connection.php";
if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $insert=$connect->query("INSERT INTO `signup`(`name`, `email`) VALUES ('$name','$email')");
    if($insert){
    echo "<script>alert('$name's account successfully created')</script>";
}
}
?>