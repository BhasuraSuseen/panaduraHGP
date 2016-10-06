<?php
include 'datetime.php';
include 'connection.php';
$res1 = mysqli_query($server, "SELECT * FROM employee");
while ($row1 = mysqli_fetch_array($res1)) {
    $nic = $row1[0];
    mysqli_query($server, "insert into attend(date,employee_nic) values ('$yearmon','$nic')");
}

$res = mysqli_query($server, "SELECT  employee.Nic_no,
  employee.F_Name,
  employee.L_Name,
  attend.$day,
  employee.E_type
FROM employee
  INNER JOIN attend
    ON attend.Employee_Nic = employee.Nic_no where attend.date = '$yearmon'");

//$res2 = mysqli_query($server, "SELECT * FROM attleave");
?>

<html>

    <header>
        <title>Doctor Atendence</title>
    </header>
    <center>
               
                <h5 ><? //php echo $date2  ?></h5>
        <h5 id="date" style="display: none"><?php echo $date3 ?></h5>
        <h5 style="display: none"><?php echo $date4 ?></h5>
        <h5 ><?php echo $day ?></h5>
        <body>
            
            


            <table border="0" style="width: 100%">
                <tr>
                    <td style="background-color: appworkspace">ID</td>
                    <td style="background-color: appworkspace">Name</td>
                    <td style="width: 8%; background-color: blanchedalmond">Mon</td>
                    <td style="width: 8%; background-color: appworkspace">Tue</td>
                    <td style="width: 8%; background-color: blanchedalmond">Wed</td>
                    <td style="width: 8%; background-color: appworkspace">Thu</td>
                    <td style="width: 8%; background-color: blanchedalmond">Fri</td>
                    <td style="width: 8%; background-color: appworkspace">Sat</td>
                    <td style="width: 8%; background-color: blanchedalmond">Sun</td>

                </tr>

                <tr>
<?php while ($row = mysqli_fetch_array($res)):; ?>
    <?php if ($row['E_type'] == "doctor") { ?>
                            <td style="width: 15%; "><input type="text" value="<?php echo $row['Nic_no']; ?>"  id="NIC" readonly></td>
                            <td style=""><input type="text" value="<?php echo $row['F_Name'] . " " . $row['L_Name']; ?>" name="name"</td>

                            <?php if ($date4 == "Monday") { ?>

                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" <?php if ($row[3] == 1) {
                        echo 'Checked';
                    } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"> </td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>


        <?php } else if ($date4 == "Tuesday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" <?php if ($row[3] == 1) {
                        echo 'Checked';
                    } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

                            <?php } else if ($date4 == "Wednesday") { ?>

                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" <?php if ($row[3] == 1) {
                        echo 'Checked';
                    } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

        <?php } else if ($date4 == "Thursday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" <?php if ($row[3] == 1) {
                echo 'Checked';
            } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

        <?php } else if ($date4 == "Friday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" <?php if ($row[3] == 1) {
                echo 'Checked';
            } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

        <?php } else if ($date4 == "Saturday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" <?php if ($row[3] == 1) {
                        echo 'Checked';
                    } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

        <?php } else if ($date4 == "Sunday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" <?php if ($row[3] == 1) {
                echo 'Checked';
            } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)" ></td>


        <?php } ?>



                        </tr>
    <?php } ?>
<?php endwhile; ?>

            </table>

            <!--<button onclick="loadParadata()">aaaa</button>-->


    </center>
</body>

<script type="text/javascript" src="jst.js"></script>


</html>