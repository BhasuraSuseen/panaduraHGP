<?php

include '../connect.php';
include '../datetime.php';
$nic = $_POST['nic'];
$LvType=$_POST['lvtype'];
$des = $_POST['descr'];
$rtype = $_POST['rqtype'];

//echo $type.",".$leave.",".$rtype.",".$nic;


//    mysqli_query($server, "insert into attendence(leav,leav_type,req_by) values ('$leave','$type','$rtype') where empid = '$nic' and date = '$date3' ");
   // mysqli_query($server, "INSERT IN TO LEAVE  where empid = '$nic' and date = '$date3'");
    echo 'Hri mcn';

?>