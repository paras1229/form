<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
     die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"fybca_a");
$sql="INSERT INTO person (FirstName, LastName, Age)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
if (!mysqli_query($con,$sql))
{
     die('Error: ' . mysqli_error($con));
}
echo "<h2>1 record added....</h2>";
mysqli_close($con) ;
?>
