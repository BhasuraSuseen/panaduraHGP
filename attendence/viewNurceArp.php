
<?php
include 'datetime.php';
include 'connect.php';

$date = $_POST['day'];
$presentqury =mysqli_query($conn, "SELECT
  COUNT(attend.$day)
FROM attend
  INNER JOIN employee
    ON attend.Employee_Nic = employee.Nic_no 
WHERE employee.E_type = 'nurce' and
attend.$date = '1' and attend.date = '$yearmon'");

while($row = mysqli_fetch_array($presentqury)){
      $present = $row[0];
      
}
// echo $present." Employees came today..";

$absentqury =mysqli_query($conn, "SELECT
  COUNT(attend.$day)
FROM attend
  INNER JOIN employee
    ON attend.Employee_Nic = employee.Nic_no 
WHERE employee.E_type = 'nurce' and
attend.$date = '0' and attend.date = '$yearmon'");
while($row1 = mysqli_fetch_array($absentqury)){
      $absent = $row1[0];
     // echo $absent." Employees Absent today.";
}

$tot = $absent + $present;

$json = '{"a":'.$present.',"b":'.$absent.',"c":'.$tot.'}';


echo $json;


?>
