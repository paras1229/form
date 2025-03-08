<?php 

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    echo "<h2>Form Data Received</h2>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
  }
?>