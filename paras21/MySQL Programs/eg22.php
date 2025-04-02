<?php
$con = @mysqli_connect("localhost", "root", "","fybca_a");
if (!$con)
{
   die('Could not connect: ' . mysql_error());
}
//$db_selected = mysql_select_db("fybca_b",$con);

$sql = "SELECT * FROM person";
$result = mysqli_query($con,$sql);
echo "<h1>Total Fields = ".mysqli_num_fields($result);
mysqli_close($con);
?>
