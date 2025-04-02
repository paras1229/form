<?php

// NOTE: This function was deprecated in PHP 5.4.0, and it and the entire original MySQL extension was removed in PHP 7.0.0


$con = mysqli_connect("localhost", "root", "","fybca_a");
if (!$con)
{
   die('Could not connect: ' . mysql_error());
}
$db_list = @mysqli_list_dbs($con);
$i = 0;

$db_count = mysqli_num_rows($db_list);
while ($i < $db_count)
{
   echo mysqli_db_name($db_list, $i) . "<br />";
   $i++;
}
mysqli_close($con);

?>
