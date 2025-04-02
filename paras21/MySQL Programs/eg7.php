<?php
echo "<h2>";
$con = @mysqli_connect("localhost","root","");
if (!$con)
{
   die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"fybca_a");
$result = mysqli_query($con,"SELECT * FROM person");
while($row = mysqli_fetch_array($result))
{
   echo $row['FirstName'] . " " . $row['LastName']. " = " . $row['Age'];
   echo "<br />";
}
mysqli_close($con);
?>
