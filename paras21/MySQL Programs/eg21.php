<?php
$con = @mysqli_connect("localhost","root","","fybca_a");
if (!$con)
{
   die('Could not connect: ' . mysql_error());
}
//$db_selected = mysql_select_db("fybca_b",$con);
$sql = "INSERT INTO user1 (FirstName, LastName, Age) VALUES ('Hitesh ','Sakariya','21')";
$result = mysqli_query($con,$sql);

/* 
if(mysql_query($sql,$con))
   echo "Sucessfully inserted...";
else
   echo "Error : ".mysql_error();*/

echo "<h1>ID of last inserted record is: " . mysqli_insert_id($con);
mysqli_close($con);
?>
