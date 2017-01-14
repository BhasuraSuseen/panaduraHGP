<?php
include 'datetime.php';
include 'connect.php';
$type=$_POST['type'];
$res = mysqli_query($conn, "SELECT * FROM employee where employee.E_Type='$type' ");
?>

<center>
<table>
    <tr>
        <td style="background-color: #CFD8DC"><br>ID</td>
        <td style="background-color: #CFD8DC"><br>Name</td>
        <td style="background-color: #CFD8DC"><br>Contact No:</td>
    </tr>
    <?php while ($row = mysqli_fetch_array($res)):; ?>
    <?php// if ($row['E_type'] == "para") { ?>
                 <tr>   <td><input style="border: 0px" type="text" value="<?php echo $row['0']; ?>"  id="NIC" readonly></td>
                     <td ><input type="text" value="<?php echo $row['F_Name'] . " " . $row['L_Name']; ?>" name="name"</td>
                     <td ><input type="text" value="<?php echo $row[5]; ?>" name="name"</td></tr>

    <?php// }?>
    <?php endwhile;?>
</table>
</center>