<?php
include './datetime.php';
include './connect.php';

$res = mysqli_query($conn, "SELECT  employee.Nic_no,
  employee.F_Name,
  employee.L_Name,
  attend.$day,
  employee.E_type
FROM employee
  INNER JOIN attend
    ON attend.Employee_Nic = employee.Nic_no where attend.date = '$yearmon'");
//while ($row1 = mysql_fetch_array($res)) {
//
//    $res2 = mysqli_query($conn, " Select attend.`01`+ attend.`02` + attend.`03` + attend.`04`+ attend.`05` + attend.`06` + attend.`07`+ attend.`08`+ attend.`09`+ attend.`10`+
//     attend.`11`+ attend.`12` + attend.`13` + attend.`14`+ attend.`15` + attend.`16` + attend.`17`+ attend.`18`+ attend.`19`+ attend.`20`+
//		attend.`21`+ attend.`22` + attend.`23` + attend.`24`+ attend.`25` + attend.`26` + attend.`27`+ attend.`28`+ attend.`29`+ attend.`30`+attend.`31`As Tot
//From
//  homs1.attend
//Where
//  homs1.attend.employee_nic = '$row1[0]]' and date='$yearmon'");
//}
?>
<html>
  <center>
    <h3><?php echo 'Panadura Base Hospital' ?></h3>
    
    <h4><?php echo $yearmon2.$date5 . ' ' . 'EB Attendence report' ?></h4>
   
    <table>
        <table id="repo_tbl" border="0" style="width: 700%">
            <tr>
                <td style="background-color: #CFD8DC"><br>ID</td>
                <td style="background-color: #CFD8DC"><br>Name</td>
                <td style="width: 16%; background-color: #CFD8DC"><br>Prasent</td>
                <td style="width: 16%; background-color: #CFD8DC"><br>Absent</td>
        
<!--                    <td style="width: 8%; background-color: #CFD8DC"><br>Thu</td>
                <td style="width: 8%; background-color: #CFD8DC"><br>Fri</td>
                <td style="width: 8%; background-color: #CFD8DC"><br>Sat</td>
                <td style="width: 8%; background-color: #CFD8DC"><br>Sun</td>-->

            </tr>
            <tr>
                <?php while ($row = mysqli_fetch_array($res)):; ?>
                    <?php if ($row['E_type'] == "eb") { ?>
                        <td style="width: 15%; "><input style="border: 0px" type="text" value="<?php echo $row['Nic_no']; ?>"  id="NIC" readonly></td>
                        <td style=""><input type="text" value="<?php echo $row['F_Name'] . " " . $row['L_Name']; ?>" name="name"</td>
                    <?php } ?>

                    <?php
                    $res2 = mysqli_query($conn, " Select attend.`01`+ attend.`02` + attend.`03` + attend.`04`+ attend.`05` + attend.`06` + attend.`07`+ attend.`08`+ attend.`09`+ attend.`10`+
                                                      attend.`11`+ attend.`12` + attend.`13` + attend.`14`+ attend.`15` + attend.`16` + attend.`17`+ attend.`18`+ attend.`19`+ attend.`20`+
                                                      attend.`21`+ attend.`22` + attend.`23` + attend.`24`+ attend.`25` + attend.`26` + attend.`27`+ attend.`28`+ attend.`29`+ attend.`30`+attend.`31`As Tot
                                                      From homs1.attend
                                                      Where homs1.attend.employee_nic = '$row[0]' and date='$yearmon'");
                    ?>
                    <?php while ($row2 = mysqli_fetch_array($res2)):; ?>
                        <?php if ($row['E_type'] == "eb") { ?>
                            <td><?php echo $row2[0]; ?></td>
                            <td>
                                <?php
                                if ($date5 == 'January' || 'March' || 'May' || 'July' || 'Aygust' || 'October' || 'December') {
                                    echo 31 - $row2[0];
                                } elseif ($date5 == 'February') {
                                    echo 28 - $row2[0];
                                } else {
                                    echo 30 - $row2[0];
                                }
                                ?>
                            </td>
                        <?php } ?>
                    <?php endwhile; ?>





                </tr>
            <?php endwhile; ?>

        </table>


</html>
