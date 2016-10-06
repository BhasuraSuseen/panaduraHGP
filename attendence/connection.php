<?php
define('DB_HOST', 'us-cdbr-azure-southcentral-f.cloudapp.net');
define('DB_NAME', 'homs1');
define('DB_USER','b7f626611d6e2d');
define('DB_PASSWORD','09f1186c');
$server=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to database: " . mysql_error());
$db=mysqli_select_db($conn,DB_NAME) or die("Failed to connect to database: " . mysqli_error());
?>
