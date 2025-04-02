<?php
$con = @mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con,"fybca_a");

// Create table in fy database
$sql = "CREATE TABLE user1
(
	personID int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(personID),
	FirstName varchar(15),
	LastName varchar(15),
	Age int
)";
if(mysqli_query($con,$sql))
{
    echo "<h2>Table Created successfully...";
}
else
{  echo "Error in table creation...".mysqli_error($con); 
}
mysqli_close($con);
?>