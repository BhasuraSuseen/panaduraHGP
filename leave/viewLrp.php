<html>
    <body>

<?php

include '../datetime.php';

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
    ON `leave`.nic = employee.NIC_NO where `leave`.date = '$date3'"); //and attendence = 0
?>

<table border = '1' style='width: 70%' id="lvtbl" name="lvtbl" >
    <tr style='background-color: appworkspace' >
        <td>NIC</td>
        <td>Name</td>
        <td>Leave Type</td>
        <td>Description</td>
        <td>Requre Type</td></tr>

<?php while ($row = mysqli_fetch_array($res)) :; ?>
    <tr><td><?php echo $row[0];?></td>
        <td><?php echo $row['F_Name'] . " " . $row['L_Name'];?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[5];?></td>
        <td><?php echo $row[6];?></td></tr>
<?php endwhile;?>
</table>


         <button  style="width: 150px" onclick="callme();">Download
                </button>
</body>

    <script type="text/javascript" src="../jspdf.js"></script>
    <script type="text/javascript" src="../jquery.js"></script>
    <script type="text/javascript" src="../jst.js"></script>
    
</html>
