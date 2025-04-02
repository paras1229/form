<?php
$con = @mysqli_connect("localhost","root","");
if($con)
{
     echo "MySQL successfully connected....";
}
if(!$con)
{
     die('Could not connect: ' . mysqli_error($con));
}
?>
