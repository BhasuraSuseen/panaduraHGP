
<?php
include 'attendence/datetime.php';
include '../connect.php';
echo $day;
$res = mysqli_query($conn, "SELECT  employee.Nic_no,
  employee.F_Name,
  employee.L_Name,
    attend.`$day`,
  employee.E_type
FROM employee
  INNER JOIN attend
    ON attend.Employee_Nic = employee.Nic_no where attend.date = '$yearmon'  and employee.E_type = 'doctor' ");
?>

        <link rel="stylesheet" type="text/css" href="../attend styl.css" media="screen" />
       
       
   
   <div style="height: 650px; overflow-y: scroll">
        <div class="attall_container">
            <center>

                <h5 style="display: none"><?php echo $date2 ?></h5>
                <form method="post" action="viewLrp.php">
                    <table border="0" style="width: 100%" id="lvtbl" name="lvtbl">
                        <tr>
                            <td style="background-color: #CFD8DC">ID</td>
                            <td style="background-color: #CFD8DC">Name</td>
                            <td style="width: 12%; background-color: #CFD8DC">Attendence</td>
                            <td style="width: 12%; background-color: #CFD8DC">Leave Type</td>
                            <td style="width: 12%; background-color: #CFD8DC">Description</td>
                            <td style="width: 12%; background-color: #CFD8DC">Req. Letter type</td>

                        </tr>
                        <?php while ($row = mysqli_fetch_array($res)): ?>

                            <tr>
                                <td id="nicc"><input type="text" value="<?php echo $row['Nic_no']; ?>"  id="NIC" readonly></td>
                                <td><input type="text" value="<?php echo $row['F_Name'] . " " . $row['L_Name']; ?>" name="name" readonly</td>
                                <td style="width: 12%; background-color: lightgray"><?php
                                    if ($row[3] == 1) {
                                        echo 'Present';
                                    } else {
                                        echo 'Absent';
                                    }
                                    ?></td>
                                <?php
$combx = 'lvt'.$row['Nic_no'];
$des = 'des'.$row['Nic_no'];
?>


                                <td style="width: 12%; background-color: lightgray" id="lt"><select name="LvType" id="<?php echo $combx; ?>" class="attstyled-select">
                                        <option>Medical Leave</option>
                                        <option>Half Day</option>
                                        <option>Short Leave</option>
                                        <option>Other</option>
                                    </select></td>

                                <td style="width: 12%; background-color:#ECEFF1 " id="des1" >
                                    <input type="text" id="<?php echo $des; ?>" name="des">
                                </td>

                                <td style="width: 12%; background-color:#ECEFF1" id="ty"><select class="attstyled-select" name="ReqType" onchange="saveLeave( '<?php echo $row[0]; ?>', document.getElementById('<?php echo $combx; ?>').value, document.getElementById('<?php echo $des; ?>').value, this.value)">
                                        <option>--Select Type--</option>
                                        <option>Letter</option>
                                        <option>Fax</option>
                                        <option>Tele-Mail</option>
                                        <option>Phone Call</option>
                                    </select></td>
                            </tr>

                        <?php endwhile; ?>

                    </table><br><br>

                    
                </form>
                <a href="/leave/LreportDoctor.php">  <input class="attblack_btn" type="submit" value="Download Pdf"></a> 

            </center>
        </div>
 
    </div>

    <script type="text/javascript" src="../jst.js"></script>
