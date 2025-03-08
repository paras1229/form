<?php

   print"<table border=1>";
   foreach($_SERVER as $key=>$val)
   {
      echo "<tr><td>".$key."</td><td>".$val."</tr>";
   }
   print"</table>";

?>