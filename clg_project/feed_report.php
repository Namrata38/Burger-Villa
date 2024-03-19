<?php


$con=mysqli_connect("localhost","root","","fr1");
$nm1=$_POST['name'];
$ph1=$_POST['contact'];
$email1=$_POST['email'];
$mess1=$_POST['message'];
$sql="insert into feedback  values('$nm1','$ph1','$email1','$mess1')";
$res=mysqli_query($con,$sql);

/*if($res)
{echo "00000000";}*/
echo "<h1>feedback Report</h1>";
$sql="select * from   feedback";
$res=mysqli_query($con,$sql);

echo "<table border=1>";
while($row=mysqli_fetch_array($res))
{
    echo "<tr>";
    echo "<td>";echo $row['name'];
    echo "<td>";echo $row['contact'];
    echo "<td>";echo $row['email'];
    echo "<td>";echo $row['message'];
echo "</tr>";
}
echo "</table>";
?>