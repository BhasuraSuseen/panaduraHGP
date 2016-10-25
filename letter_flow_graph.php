<?php
require "connect.php";

  $query = "SELECT * FROM employee";

  $result = mysqli_query($con,$query);

  $rows = array();
  while($r = mysqli_fetch_array($result)) {
    $rows[] = $r;
  }
  print json_encode($rows);
  print $rows
?>			     
