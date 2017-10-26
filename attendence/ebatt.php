<?php
//include necessary files
include 'attendence/datetime.php';
include 'connect.php';
//query for get employee data from employee data
$res1 = mysqli_query($conn, "SELECT * FROM employee");
//include that data to an array
while ($row1 = mysqli_fetch_array($res1)) {
    $nic = $row1[0];
    //query for create table data when opening the page
    mysqli_query($conn, "insert into attend(date,employee_nic) values ('$yearmon','$nic')");
}
//query for get data from employee table and attend table by an iner join for create attendence table
$res = mysqli_query($conn, "SELECT  employee.Nic_no,
  employee.F_Name,
  employee.L_Name,
  attend.$day,
  employee.E_type
FROM employee
  INNER JOIN attend
    ON attend.Employee_Nic = employee.Nic_no where attend.date = '$yearmon'");

//$res2 = mysqli_query($conn, "SELECT * FROM attleave");
?>


    <center>
               
                <h5 ><? //php echo $date2  ?></h5>
        <h5 id="date" style="display: none"><?php echo $yearmon ?></h5>
        <h5 style="display: none"><?php echo $date4 ?></h5>
        <h5 style="display: none"><?php echo $day ?></h5>
        <body>
       <!--create table--> 
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
                    <!--create rows by using while and fill up the database values for it-->
<?php while ($row = mysqli_fetch_array($res)):; ?>
                    <!--select only EB data to enter the data into the table-->
    <?php if ($row['E_type'] == "eb") { ?>
                   
                            <td style="width: 15%; "><input type="text" value="<?php echo $row['Nic_no']; ?>"  id="NIC" readonly></td>
                            <td style=""><input type="text" value="<?php echo $row['F_Name'] . " " . $row['L_Name']; ?>" name="name"</td>
<!--active monday coloumn if the actual day is monday-->
                            <?php if ($date4 == "Monday") { ?>

                                <td style="width: 8%; background-color: lightgrey">
                                    <!--if database value is 1 then it have to be ticked-->
                                    <input type="checkbox" name="mon" <?php if ($row[3] == 1) {
                        echo 'Checked';
    //call the save attendance function
                    } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"> </td>  
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
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>


        <?php } else if ($date4 == "Tuesday") { ?>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="tue" <?php if ($row[3] == 1) {
                        echo 'Checked';
                    } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
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

                            <?php } else if ($date4 == "Wednesday") { ?>

                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="wed" <?php if ($row[3] == 1) {
                        echo 'Checked';
                    } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
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
                                    
                                    <input type="checkbox" name="thu" style="position: static;" <?php if ($row[3] == 1) {
                echo 'Checked';
            } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></label></td>
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
                                    <input type="checkbox" name="fri" <?php if ($row[3] == 1) {
                echo 'Checked';
            } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: #ECEFF1">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: lightgrey">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

        <?php } else if ($date4 == "Saturday") { ?>
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
                                    <input type="checkbox" name="sat" <?php if ($row[3] == 1) {
                        echo 'Checked';
                    } ?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
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
<!--clude the java script files from jst.js-->
<script type="text/javascript" src="./jst.js"></script>


