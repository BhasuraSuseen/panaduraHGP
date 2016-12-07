<?php
require "../connect.php";
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn,"DELETE FROM users WHERE NIC_NO='" . $_POST["users"][$i] . "'");
}
header("Location:../sysadmin.php");
?>