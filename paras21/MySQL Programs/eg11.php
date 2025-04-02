<?php
$con = @mysqli_connect("localhost","root","");
if (!$con)
{
   die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"fybca_a");

$sql="UPDATE user1 SET Age = '25' WHERE personId='4'";
//$sql="UPDATE user1 SET FirstName = 'Ajaykumar' WHERE personId='1'";
if(mysqli_query($con,$sql))
  echo "<h2>1 Record updateddd.....";
else
{
   echo "Error :". mysqli_errno($con)."==".mysqli_error($con);
}
mysqli_close($con);
?>
