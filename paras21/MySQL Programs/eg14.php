<?php
$con = @mysqli_connect("localhost", "root", "","fybca_a");
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}
//$db_selected = mysql_select_db($con,"fybca_a");
$sql = "SELECT * from Person WHERE Lastname='Sisodiya'";
$result = mysqli_query($con,$sql);
echo "<pre><h2>";
print_r(mysqli_fetch_array($result));
mysqli_close($con);
?>
