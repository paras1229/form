<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"fybca_a");
//$result = mysqli_query($con,"SELECT * FROM person ORDER BY Age ");
//$result = mysqli_query($con,"SELECT * FROM person ORDER BY Age DESC");
$result = mysqli_query($con,"SELECT * FROM person ORDER BY FirstName, LastName");
while($row = mysqli_fetch_array($result))
{
   echo $row['FirstName'];
   echo " " . $row['LastName'];
   echo " " . $row['Age'];
   echo "<br />";
}
mysqli_close($con);
?>
