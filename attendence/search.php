

<?php

include 'datetime.php';
include '../connect.php';

$NIC = $_POST['nic'];
$DAY = $_POST['day'];
$res = mysqli_query($conn, "select attend.employee_nic,
attend.$DAY,
employee.F_name,
employee.L_name FROM
employee INNER JOIN attend ON attend.Employee_Nic = employee.Nic_no where attend.employee_nic='$NIC'");
//$res = mysqli_query($server, "select attend.employee_nic,attend.$day,employee.F_name,employee.L_name FROM employee INNER JOIN attend ON attend.Employee_Nic = employee.Nic_no where  ");
//echo $NIC . $DAY;
if ($NIC == NULL || $NIC == "") {
    echo 'Warning:Enter id!';
} else {
    while ($row = mysqli_fetch_array($res)) {

        $result = $row[01];
       // $out="Enter valid Id!"
        echo $result;
       
       
        
    }
}

//$json = '{"a":'.$result.'}';
?>
