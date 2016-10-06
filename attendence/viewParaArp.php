
<?php
include 'datetime.php';
include 'connection.php';


$presentqury =mysqli_query($server, "SELECT
  COUNT(attend.$day)
FROM attend
  INNER JOIN employee
    ON attend.Employee_Nic = employee.Nic_no 
WHERE employee.E_type = 'para' and
attend.$day = '1' and attend.date = '$yearmon'");

while($row = mysqli_fetch_array($presentqury)){
      $present = $row[0];
      
}
// echo $present." Employees came today..";

$absentqury =mysqli_query($server, "SELECT
  COUNT(attend.$day)
FROM attend
  INNER JOIN employee
    ON attend.Employee_Nic = employee.Nic_no 
WHERE employee.E_type = 'para' and
attend.$day = '0' and attend.date = '$yearmon'");
while($row1 = mysqli_fetch_array($absentqury)){
      $absent = $row1[0];
     // echo $absent." Employees Absent today.";
}

$tot = $absent + $present;

$json = '{"a":'.$present.',"b":'.$absent.',"c":'.$tot.'}';


echo $json;


?>
