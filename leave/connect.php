
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'homs1');
define('DB_USER','root');
define('DB_PASSWORD','');

define('DB_HOST1', 'us-cdbr-azure-southcentral-f.cloudapp.net');
define('DB_NAME1', 'homs1');
define('DB_USER1','b7f626611d6e2d');
define('DB_PASSWORD1','09f1186c');


if ($_SERVER['HTTP_HOST'] == 'localhost'){
    $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to database: " . mysql_error());
    $db=mysqli_select_db($conn,DB_NAME) or die("Failed to connect to database: " . mysqli_error($conn));
}else{
    $conn=mysqli_connect(DB_HOST1,DB_USER1,DB_PASSWORD1) or die("Failed to connect to database: " . mysql_error());
    $db=mysqli_select_db($conn,DB_NAME1) or die("Failed to connect to database: " . mysqli_error($conn));
}
?>
