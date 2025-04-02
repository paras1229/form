<?php
$con = @mysqli_connect("localhost","root","","fybca_a");
if (!$con)
{
  die("Could not connect: " . mysql_error());
}
//mysql_select_db("fybca_a");
mysqli_query($con,"DELETE FROM person WHERE LastName = 'Data'");
$rc = mysqli_affected_rows($con);
echo "<h1>Records deleted = " . $rc;
mysqli_close($con);
?>
	