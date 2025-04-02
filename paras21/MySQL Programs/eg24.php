<?php
$con = mysqli_connect("localhost", "root", "","fybca_a");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

/*
$db=mysql_list_tables("fybca_b");
//$db=mysql_list_tables("performance_schema");
$n=mysql_num_rows($db);
for($i=0;$i<$n;$i++)
{
   $row=mysqli_fetch_row($db);
   echo $row[0]."<br>";
}
*/

$dbname="fybca_a";
//$dbname="performance_schema";
$sql = "SHOW TABLES FROM $dbname";
$result = mysqli_query($con,$sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error($con);
    exit;
}

while ($row = mysqli_fetch_row($result)) {
    echo "<h1>Table: {$row[0]}<br>";
}
mysqli_close($con);
?>
