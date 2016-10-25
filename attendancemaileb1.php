<!DOCTYPE html>
<html>
<head>
	<title>attendance and normal mail eb 1</title>
</head>
<body>

<?php
require "connect.php";
  $query1 = "SELECT * FROM employee";
  $result1 = mysqli_query($con,$query);
  $rows1 = array[];
  while($r1 = mysqli_fetch_array($result)) {
    $rows1[] = $r1;
  }
  //echo json_encode($rows1);
  print $rows1
?>			     		
</body>
</html>
