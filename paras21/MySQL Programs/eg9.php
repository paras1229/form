<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"fybca_a");
$result = mysqli_query($con,"SELECT * FROM person WHERE FirstName='Vijay'");
while($row = mysqli_fetch_array($result))
{
    echo $row['FirstName'] . " " . $row['LastName']. " " . $row['Age'];
    echo "<br />";
}
?>