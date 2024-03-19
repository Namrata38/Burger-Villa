<?php
$nm1=$_POST['nm'];
$ph1=$_POST['ph'];
$email1=$_POST['email'];
$mess1=$_POST['message'];


$con=mysqli_connect("localhost","root","","fr1");

$sql="insert into feedback  values('$nm1','$ph1','$email1','$mess1')";
$res=mysqli_query($con,$sql);
?>