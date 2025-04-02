<?php
echo "<h2>";
$con = @mysqli_connect("localhost", "root", "","fybca_a");
if (!$con)
{
   die('Could not connect: ' . mysql_error());
}
//$db_selected = mysql_select_db("fybca_b",$con);
$sql = "SELECT * from Person";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_object($result))
{
     echo $row->FirstName . "==";
     echo $row->LastName . "<br />";
}
mysqli_close($con);
?>
