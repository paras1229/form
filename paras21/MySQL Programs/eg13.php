<?php
$con = @mysqli_connect("localhost","wrong_user","wrong_pwd");
if (!$con)
{
      echo "<h2>Error : ".@mysqli_error($con);
      die('<br>Could not connect: ' .@mysqli_errno($con));
}
mysqli_close($con);
?>
