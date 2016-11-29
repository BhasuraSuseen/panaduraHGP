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
<?php while ($row = mysqli_fetch_array($res)):; ?> 
               
     <?php if ($row['E_type'] == "para") ?> 
                            <td style="width: 15%; "><input type="text" value="<?php echo $row['Nic_no']; ?>"  id="NIC" readonly></td>
                            <td style=""><input type="text" value="<?php echo $row['F_Name'] . " " . $row['L_Name']; ?>" name="name"</td>
   
 
      <?php endwhile; ?> 



                        </tr>
    
                    } ?>

            </table>

            <!--<button onclick="loadParadata()">aaaa</button>-->


    </center>
</body>

<script type="text/javascript" src="jst.js"></script>

</html>
