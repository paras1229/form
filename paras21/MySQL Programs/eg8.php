<?php
$con = @mysqli_connect("localhost","root","");
if (!$con)
{
   die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"fybca_a");
$result = mysqli_query($con,"SELECT * FROM person");
echo "<table border='1'>
<tr><th>Firstname</th>
<th>Lastname</th>
<th>Age</th></tr>";

while($row = mysqli_fetch_array($result))
{
   echo "<tr>";
   echo "<td>" . $row['FirstName'] . "</td>";
   echo "<td>" . $row['LastName'] . "</td>";
   echo "<td>" . $row['Age'] . "</td>";
   echo "</tr>";
}
echo "</table>";
mysqli_close($con); 
?>
	