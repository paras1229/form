<?php
/*
$con = @mysqli_connect("localhost","root","");
if(!$con)
{
  die('Could not connect: ' . mysql_error());
}
if(mysqli_close($con))
{
   Print "Connection is closed.....";
}
*/

$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
if(mysqli_close($con))
{
print "Connection is closed";
}


?>
