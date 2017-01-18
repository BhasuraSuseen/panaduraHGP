<?php
//include necessary files
include 'attendence/datetime.php';
include '../connect.php';
//query for get data from employee table
$res1 = mysqli_query($conn, "SELECT * FROM employee");
//include that data to array
while ($row1 = mysqli_fetch_array($res1)) {
    $nic = $row1[0];
    //query for create table data when opening the page
    mysqli_query($conn, "insert into attend(date,employee_nic) values ('$yearmon','$nic')");
}
//query for get data from employee table and attend table by iner join
$res = mysqli_query($conn, "SELECT  employee.Nic_no,
  employee.F_Name,
  employee.L_Name,
  attend.$day,
  employee.E_type
FROM employee
  INNER JOIN attend
    ON attend.Employee_Nic = employee.Nic_no where attend.date = '$yearmon'");


?>


        <title>Doctor Atendence</title>

    <center>

        <h5 ><? //php echo $date2   ?></h5>
        <h5 id="date" style="display: none"><?php echo $date3 ?></h5>
        <h5 style="display: none"><?php echo $date4 ?></h5>
        <h5 style="display: none"><?php echo $day ?></h5>
  
<!-- create table -->
            <table border="0" style="width: 100%">
                <tr>
                    <td style="background-color: #CFD8DC">ID</td>
                    <td style="background-color: #CFD8DC">Name</td>
                    <td style="width: 8%; background-color: #CFD8DC">Mon</td>
                    <td style="width: 8%; background-color: #CFD8DC">Tue</td>
                    <td style="width: 8%; background-color: #CFD8DC">Wed</td>
                    <td style="width: 8%; background-color: #CFD8DC">Thu</td>
                    <td style="width: 8%; background-color: #CFD8DC">Fri</td>
                    <td style="width: 8%; background-color: #CFD8DC">Sat</td>
                    <td style="width: 8%; background-color: #CFD8DC">Sun</td>

                </tr>

                <tr>
                    <!-- create rows by using while and add the data base values to table -->
                    <?php while ($row = mysqli_fetch_array($res)):; ?>
                    <!-- select only doctors data to enter the table -->
                        <?php if ($row['E_type'] == "doctor") { ?>
                            <td style="width: 15%; "><input type="text" value="<?php echo $row['Nic_no']; ?>"  id="NIC" readonly></td>
                            <td style=""><input type="text" value="<?php echo $row['F_Name'] . " " . $row['L_Name']; ?>" name="name"</td>
<!-- active only monday column if the day is monday-->
                            <?php if ($date4 == "Monday") { ?>

                                <td style="width: 8%; background-color: lightgrey">
                         <!-- if data base value is 1 set check box ticked -->          
                                    <input type="checkbox" name="mon" <?php
                                    if ($row[3] == 1) {
                                        echo 'Checked';
                                        
                                    }
    //call save attends function
                                    ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"> </td>  
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <!-- these inputs are disabled-->
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
<!-- active only tuesday column if the day is tuesday-->

        <?php } else if ($date4 == "Tuesday") { ?>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="tue" <?php
            if ($row[3] == 1) {
                echo 'Checked';
            }
            ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
<!-- active only Wednesday column if the day is Wednesday-->
        <?php } else if ($date4 == "Wednesday") { ?>

                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="wed" <?php
                               if ($row[3] == 1) {
                                   echo 'Checked';
                               }
                               ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

        <?php } else if ($date4 == "Thursday") { ?>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="thu" <?php
                               if ($row[3] == 1) {
                                   echo 'Checked';
                               }
                               ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

        <?php } else if ($date4 == "Friday") { ?>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="fri" <?php
                               if ($row[3] == 1) {
                                   echo 'Checked';
                               }
                               ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

        <?php } else if ($date4 == "Saturday") { ?>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color:  appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="sat" <?php
                    if ($row[3] == 1) {
                        echo 'Checked';
                    }
                    ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

        <?php } else if ($date4 == "Sunday") { ?>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="sun" <?php
                if ($row[3] == 1) {
                    echo 'Checked';
                }
                ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)" ></td>


        <?php } ?>



                        </tr>
    <?php } ?>
<?php endwhile; ?>

            </table>

            <!--<button onclick="loadParadata()">aaaa</button>-->


    </center>

<!-- include script file -->
<script type="text/javascript" src="./attendence/jst.js"></script>



