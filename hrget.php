<?php
include 'datetime.php';
include 'connect.php';
$NIC = $_POST['nic'];

$qury =mysqli_query($conn, "SELECT *FROM homs1.employee
  WHERE homs1.employee.NIC_NO= '$NIC'");
if($row1 = mysqli_fetch_array($qury)){
      $nic = $row1[0];
      $fname = $row1[1];
      $lname = $row1[2];
      $bday = $row1[3];
      $address = $row1[4];
      $cno = $row1[5];
      $gender = $row1[6];
      $etype = $row1[7];
      $fedate = $row1[8];
      $ecdate = $row1[9];
      $fgpdate = $row1[10];
      $cgpdate = $row1[11];
      $sgpdate = $row1[12];
      $salary = $row1[13];
      $sidate = $row1[14];
      $remarks = $row1[15];
      $photo = $row1[16];
    
     // echo $absent." Employees Absent today.";
}

$json = '{"nic":"'.$nic.'","fname":"'.$fname.'","lname":"'.$lname.'","bday":"'.$bday.'","address":"'.$address.'","cno":"'.$cno.'","gender":"'.$gender.'","etype":"'.$etype.'","fedate":"'.$fedate.'","ecdate":"'.$ecdate.'","fgpdate":"'.$fgpdate.'","cgpdate":"'.$cgpdate.'","sgpdate":"'.$sgpdate.'","salary":"'.$salary.'","sidate":"'.$sidate.'","remarks":"'.$remarks.'"}';
echo $json;
?>