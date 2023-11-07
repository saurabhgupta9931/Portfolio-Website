<?php

$connect = mysqli_connect("localhost","root","","voting") or die("conection failed!!");

if($connected) {
    echo "connected!";
}
else{
    echo "not connected!";
}
?>