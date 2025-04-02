<?php
$con = mysqli_connect("localhost","root","");
if ($con)
{
     echo "<h2>Connected Successfully...<br>";
}
if (!$con)
{
     die('Could not connect: ' . mysql_error());
}
if(mysqli_query($con, "CREATE DATABASE fybca_a"))
{
    echo "Database created successfully......";
}
else
{
    echo "Error creating database: ".mysqli_error($con);
}
?>
