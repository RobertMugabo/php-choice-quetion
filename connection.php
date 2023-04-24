<?php
$connect=new mysqli("localhost","root","","signup");
if($connect){
    echo "<script>alert('Done!')</script>";
}
?>