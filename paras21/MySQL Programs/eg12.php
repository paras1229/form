<?php
$con = @mysqli_connect("localhost","root","");
if (!$con)
{
die('Could n ot connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"fybca_a");

//$sql="DELETE FROM user1 WHERE PersonId='9' ";
$sql="DELETE FROM user1 WHERE LastName='Modi' ";

if(mysqli_query($con,$sql))
    echo "<h2>1 Record Deleted....";
//else
//    echo "Error in Record Deletion....".mysqli_errno()." == ".mysqli_error($con);

mysqli_close($con);
?>
