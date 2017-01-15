
47 lines (36 sloc) 1.34 KB


<?php
include 'datetime.php';
include '../connect.php';
$res = mysqli_query($conn, "SELECT  employee.NIC_NO,
  employee.F_Name,
  employee.L_Name,
  employee.E_type,
	`leave`.leave_type,
	`leave`.description,
	`leave`.req_type
	
FROM employee
  INNER JOIN `leave`
    ON `leave`.nic = employee.NIC_NO where `leave`.date = '$date3' and employee.E_type='minor'"); //and attendence = 0
?>
<center>
	<h3>Panadura Base Hospital</h3>
	<h3><?php echo $date3;?>Minor Staff Leave report</h3>
<table border = '1' style='width: 90%' id="lvtbl" name="lvtbl" >
    <tr style='background-color: appworkspace' >
        <td style="background-color: #CFD8DC">NIC</td>
        <td style="background-color: #CFD8DC">Name</td>
        <td style="background-color: #CFD8DC">Leave Type</td>
        <td style="background-color: #CFD8DC">Description</td>
        <td style="background-color: #CFD8DC">Requre Type</td></tr>

<?php while ($row = mysqli_fetch_array($res)) :; ?>
    <tr><td><?php echo $row[0];?></td>
        <td><?php echo $row['F_Name'] . " " . $row['L_Name'];?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[5];?></td>
        <td><?php echo $row[6];?></td></tr>
<?php endwhile;?>
</table>

</center>
<br>
<br>
_______________________<br>
      Signature
    <script type="text/javascript" src="../jst.js"></script>
