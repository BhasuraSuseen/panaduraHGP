<?php
require "connect.php";

  $query = "SELECT * FROM letter";

  $result = mysqli_query($con,$query);

  $rows = array();
  while($r = mysqli_fetch_array($result)) {
    $rows[] = $r;
  }
  echo json_encode($rows);
?>			     
