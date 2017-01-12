<?php

include 'connect.php';
include 'datetime.php';
$nic = $_POST['nic'];
$LvType=$_POST['lvtype'];
$des = $_POST['descr'];
$rtype = $_POST['rqType'];

echo $nic.",".$LvType.",".$des.",".$rtype.",".$date3."loooooo";


//    mysqli_query($server, "insert into attendence(leav,leav_type,req_by) values ('$leave','$type','$rtype') where empid = '$nic' and date = '$date3' ");
    mysqli_query($conn, "insert INTO `leave` VALUES('$date3','$nic','$ivType','$des','$rtype')");
   

?>
