<?php

include 'connect.php';
include 'datetime.php';
try {

$NIC = $_POST['nic'];
$DATE = $_POST['date'];
$Atten = $_POST['attend'];

$val = 0;

if ($Atten == 'true') {
    $val = 1;
}

echo $NIC .$DATE .$Atten.$day.$yearmon;


   mysqli_query($conn, "update attend set `$day` = '$val' WHERE employee_nic='$NIC' and date='$yearmon'");

} catch (Exception $exc) {
}
?>
