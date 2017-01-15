<?php
include 'datetime.php';
include '../connect.php';
//echo $date3;
$res = mysqli_query($conn, "SELECT  employee.Nic_no,
  employee.F_Name,
  employee.L_Name,
  employee.E_type
FROM employee
  INNER JOIN attend
    ON attend.Employee_Nic = employee.Nic_no where attend.date = '$yearmon'  and employee.E_type = 'eb' ");

$res2=  mysqli_query($conn,"SELECT  employee.NIC_NO,
 `leave`.leave_type,
`leave`.description,
`leave`.req_type
FROM employee
 INNER JOIN `leave`
 ON `leave`.nic = employee.NIC_NO where `leave`.date = '$date3'");
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
                         <?php if ($row2 = mysqli_fetch_array($res2)){ ?>
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



                                <td style="width: 12%; background-color: lightgray" id="lt"><select name="LvType" id="lvt" class="attstyled-select">
                                         <option><?php echo $row2[1]?></option>
                                        <option>Medical Leave</option>
                                        <option>Half Day</option>
                                        <option>Short Leave</option>
                                        <option>Other</option>
                                    </select></td>

                                <td style="width: 12%; background-color:#ECEFF1 " id="des1" >
                                    <input type="text" id="des" name="des" placeholder='<?php echo $row2[2]?>'>
                                </td>

                                <td style="width: 12%; background-color:#ECEFF1" id="ty"><select class="attstyled-select" name="ReqType" onchange="saveLeave( '<?php echo $row[0]; ?>', document.getElementById('lvt').value, document.getElementById('des').value, this.value)">
                                        <option><?php echo $row2[3]?></option>
                                        <option>Letter</option>
                                        <option>Fax</option>
                                        <option>Tele-Mail</option>
                                        <option>Phone Call</option>
                                    </select></td>
                            </tr>
                         <?php } ?>
                        <?php endwhile; ?>

                    </table><br><br>

                    <input type="submit" value="View Report"><br><br>
                </form>
                <button  style="width: 150px" onclick="">Download
                </button>
            </center>
        </div>
 
    </div>

    <script type="text/javascript" src="./attendence/jst.js"></script>

