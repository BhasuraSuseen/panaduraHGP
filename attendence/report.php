<?php

include 'datetime.php';
include '../connect.php';

$res1 = mysqli_query($conn, "SELECT * FROM employee");
while ($row1 = mysqli_fetch_array($res1)) {
    $nic = $row1[0];
    mysqli_query($conn, "insert into attend(date,employee_nic) values ('$yearmon','$nic')");
}
$res = mysqli_query($conn, "SELECT  employee.Nic_no,
  employee.F_Name,
  employee.L_Name,
  attend.$day,
  employee.E_type
FROM employee
  INNER JOIN attend
    ON attend.Employee_Nic = employee.Nic_no where attend.date = '$yearmon'");



//$res2 = mysqli_query($server, "SELECT * FROM attleave");

?>


<?php

echo 'Panadura base hospital';
echo "<br>";
echo 'Month attendence report                                                                                                   ';
echo $yearmon;


?>
<html>
 <header>Monthly Report</header>
 <body>
 <table border="1" style="width: 60%">
                <tr>
                    <td style="background-color: appworkspace">ID</td>
                    <td style="background-color: appworkspace">Name</td>
                    <td style="background-color: appworkspace">present</td>
                    <td style="background-color: appworkspace">absent</td>
                    

                </tr>

                <tr>
<?php while ($row = mysqli_fetch_array($res)):; 
     
$count = mysqli_query($conn, "Select
  attend.01 + attend.02 + attend.03 + attend.04 + attend.05 + attend.06 + attend.07 + attend.08 + attend.09 + attend.10 + attend.11 + attend.12 + attend.13 + attend.14 + attend.15 + attend.16 + attend.17 + attend.18 + attend.19 + attend.20 + attend.21 + attend.22 + attend.23 + attend.24 + attend.25 + attend.26 + attend.27 + attend.28 + attend.29 + attend.30 + attend.31 As Tot
From
  homs1.attend
Where
  homs1.attend.employee_nic ='$row['Nic_no']' and homs1.attend.date = '$yearmon'");               
                    
                    
                    
     <?php if ($row['E_type'] == "para") ?> 
                            <td style="width: 15%; "><input type="text" value="<?php echo $row['Nic_no']; ?>"  id="NIC" readonly></td>
                            <td style=""><input type="text" value="<?php echo $row['F_Name'] . " " . $row['L_Name']; ?>" name="name"</td>
 <?php while($row2 = mysqli_fetch_array($count)):; ?>
                           <td style=""><input type="text" value="<?php echo $row2['tot']; ?>" name="present"</td>     
 
 <?php endwhile;?>
     
     <?php endwhile; ?> 



                        </tr>
    
                    } ?>

            </table>

            <!--<button onclick="loadParadata()">aaaa</button>-->


    </center>
</body>

<script type="text/javascript" src="jst.js"></script>

</html>
