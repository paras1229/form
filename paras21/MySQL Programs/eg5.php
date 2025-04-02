<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"fybca_a");
//$sql=""; mysqli_query($con,$sql);
if(mysqli_query($con,"INSERT INTO person (FirstName, LastName, Age)
VALUES ('Ajay', 'Sharma', '21')"))
{
    Print "<h2>1 Record Inserted...<br>";
}
Else
{
    Print "Record inserting Error... ";
}
if(mysqli_query($con,"INSERT INTO person (FirstName, LastName, Age)
VALUES ('Vijay', 'Verma', '22')"))
{
     Print "Another 1 Record Inserted....<br>";
}
Else
{
     Print "Record inserting Error....";
}
mysqli_close($con);
?>