<?php
$con = @mysqli_connect("localhost","root","");
if (!$con)
{
    die("Could not connect: " . mysql_error());
}

// First select database
mysqli_select_db($con,"fybca_a");

// Create table in database
$sql = "CREATE TABLE person (
	FirstName varchar(15),
	LastName varchar(15),
	Age int(10)
)";
@mysqli_query($sql,$con);
if((mysqli_query($con,$sql)))
{
     echo "<h2>Table Created successfully....";
}
else
{
   echo "Error in table Creation :".mysqli_error($con);
   echo "<br>Error :". mysqli_errno($con)."==".mysqli_error($con);
}
mysqli_close($con);
?>
