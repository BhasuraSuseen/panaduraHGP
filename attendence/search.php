<?php

include 'datetime.php';
include 'connect.php';

$NIC = $_POST['nic'];
$DAY = $_POST['day'];
$res = mysqli_query($conn, "select attend.employee_nic,
attend.$DAY,
employee.F_name,
employee.L_name FROM
employee INNER JOIN attend ON attend.Employee_Nic = employee.Nic_no where attend.employee_nic='$NIC'");
//$res = mysqli_query($conn, "select attend.employee_nic,attend.$day,employee.F_name,employee.L_name FROM employee INNER JOIN attend ON attend.Employee_Nic = employee.Nic_no where  ");
//echo $NIC . $DAY;
        $reslt = '<html><p style=" color:red;">Warning:Check the id</p><html>!';
if ($NIC == NULL || $NIC == "") {
    echo '<html><p style=" color:red;">Warning:Enter id!</p><html>';
} else {
    while ($row = mysqli_fetch_array($res)) {

        $result = $row[01];
        //echo $result;

        if ($result == '1') {
            $reslt = "Present";
        } else if ($result == '0') {
            $reslt = "Absent";
        } else {
            $reslt = "";
        }
    }
    echo $reslt;
}

//$json = '{"a":'.$result.'}';
?>
