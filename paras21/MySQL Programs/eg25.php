<?php
$con = mysqli_connect("localhost", "root", "","fybca_a");
if (!$con)
{
   die('Could not connect: ' . mysql_error());
}
//mysql_select_db("fybca_b");
$sql = "show columns from user1";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
{
   echo "<h1>Field Name = ".$row['Field'];
   //echo "<pre>"; print_r($row);
} 


/*
$db=mysql_list_fields("my_db","person",$con);
$n=mysql_num_rows($db);
//$res = mysql_fetch_array($db); print_r($res);
for($i=0;$i<$n;$i++)
{
   $row=mysql_fetch_row($db);
   echo $row[0];
}  */
?>