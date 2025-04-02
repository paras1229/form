<?php
$con = @mysqli_connect("localhost", "root", "","fybca_a");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
//$db_selected = mysql_select_db("fybca_b",$con);
$sql = "SELECT * from user1";
$result = mysqli_query($con,$sql);

echo "<pre><h1>";
print_r(mysqli_fetch_row($result));

mysqli_data_seek($result,3);
print_r(mysqli_fetch_row($result));

mysqli_close($con);
?>
