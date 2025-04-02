<?php
$con = @mysqli_connect("localhost","root","","fybca_a");
if (!$con)
{
   die('Could not connect: ' . mysql_error());
}
//$db_selected = mysql_select_db("fybca_a", $con);
$sql = "SELECT * from Person";
$result = mysqli_query($con,$sql);
while ($property = mysqli_fetch_field($result))
{
	echo "Field name: " . $property->name."<br/>";
	echo "Org Name: " . $property->orgname."<br/>";
	echo "Table name: " . $property->table."<br/>";
	echo "Org Table: " . $property->orgtable."<br/>";
	echo "Default value: " . $property->def."<br/>";
	echo "Database: " . $property->db."<br/>";
	echo "Catalog: " . $property->catalog."<br/>";
	echo "Max length: " . $property->max_length."<br/>";
	echo "Length: " . $property->length."<br/>";
	echo "Char set nr: " . $property->charsetnr."<br/>";
	echo "Flags: " . $property->flags."<br/>";
	echo "Field Type: " . $property->type."<br/>";
	echo "Decimals: " . $property->decimals."<br/><hr>";
}
mysqli_close($con);
?>




















<?php
/*

old version of php provides below list...


echo "Field name: " . $property->name."<br/>";
echo "Org Name: " . $property->orgname."<br/><br/>";
echo "Table name: " . $property->table."<br/>";
echo "Default value: " . $property->def."<br/>";
echo "Max length: " . $property->max_length."<br/>";
echo "Not NULL: " . $property->not_null."<br/>";
echo "Primary Key: " . $property->primary_key."<br/>";
echo "Unique Key: " . $property->unique_key."<br/>";
echo "Mutliple Key: " . $property->multiple_key."<br/>";
echo "Numeric Field: "  . $property->numeric."<br/>";
echo "BLOB: " . $property->blob. "<br/>";
echo "Field Type: " . $property->type."<br/>";
echo "Unsigned: " . $property->unsigned."<br/>";
echo "Zero -filled: " . $property->zerofill."<br/><br/>";
*/
?>