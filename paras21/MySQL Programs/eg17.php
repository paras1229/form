<?php
$con = @mysqli_connect("localhost","root","","fybca_a");
if (!$con)
{
   die('Could not connect: ' . mysql_error());
}
//$db_selected = mysql_select_db("fybca_a",$con);
$sql = "SELECT * from Person WHERE Lastname='Thaker'";
$result = mysqli_query($con,$sql);
echo "<pre><h1>";
print_r(mysqli_fetch_assoc($result));
mysqli_close($con);
?>