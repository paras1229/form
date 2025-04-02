<?php
$con = @mysqli_connect("localhost", "root", "","fybca_a");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
//$db_selected = mysql_select_db("fybca_b", $con);
$sql = "SELECT * from user1 where personId = '5'";

echo "<h1>";
$res = mysqli_query($con,$sql);
if ($res && $res->num_rows)  
{  
    $row = $res->fetch_assoc();  
    echo $blarg = $row['FirstName']."=="; 
	echo $blarg = $row['LastName']."=="; 
	echo $blarg = $row['Age']; 
}
/*
echo "<pre>";print_r($result);
echo "Result = ".mysqli_result($result,0,"FirstName");
*/
mysqli_close($con);

//Note: As of PHP 5.5, the MySQL functions are deprecated and are removed in PHP 7.
?>