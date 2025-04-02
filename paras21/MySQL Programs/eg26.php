<?php
// Note: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. 

$con = mysqli_connect("localhost", "root", "","fybca_a");
if (!$con)
{
   die('Could not connect: ' . mysql_error());
}
/*
$sql = "SELECT * from user1";
$result = mysqli_query($con,$sql);
$type = mysql_field_type($result,0);
echo "Field 1 Type = ".$type;
$type = mysql_field_type($result, 1);
echo "<br>Field 2 Type = ".$type;
*/

$sql = "SHOW FIELDS FROM person";
$result = mysqli_query($con,$sql);
echo "<h1><pre>";print_r($result);


mysqli_close($con);

?>
