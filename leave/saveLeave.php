<?php

include 'connect.php';
include 'datetime.php';
$nic = $_POST['nic'];
$LvType=$_POST['lvtype'];
$des = $_POST['descr'];
$rtype = $_POST['rqType'];

echo $nic.",".$LvType.",".$des.",".$rtype.",".$date3;



 //$res=mysqli_query($conn, "SELECT * FROM `leave` WHERE `leave`.date='$date3' AND `leave`.nic='$nic'");
 // while($row=mysqli_fetch_array($res)){
  // if($row[0]!=NULL && $row[1]!=NULL){
    mysqli_query($conn, "insert INTO `leave` VALUES('$date3','$nic','$LvType','$des','$rtype')");
  // echo 'Leave record Added!';
  // } 
  // else {
  // mysqli_query($conn, "update  `leave` SET `leave`.leave_type='$LvType',`leave`.description='$des',`leave`.req_type='$rtype'  WHERE `leave`.nic='855123438V' AND `leave`.date='2017-01-15')");
 // echo 'Leave record Updated!';
   
  // }
  // }
?>
