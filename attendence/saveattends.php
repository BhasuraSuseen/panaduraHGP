<?php

include '../connect.php';
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

//mysqli_query($server, "insert into attleave(date,employee_nic,attend) values ('$DATE','$NIC','$val')");
    //mysqli_query($server, "update attend set $day= '$val' WHERE employee_nic='$NIC' and date='$yearmon'");
   mysqli_query($conn, "update attend set attend.$day = '$val' WHERE employee_nic='$NIC' and date='$yearmon'");
    echo 'Hri mcn';
} catch (Exception $exc) {
}
?>
