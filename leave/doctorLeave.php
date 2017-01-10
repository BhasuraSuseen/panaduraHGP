<?php
include '../datetime.php';
include '../connect.php';

$res = mysqli_query($conn, "SELECT  employee.Nic_no,
  employee.F_Name,
  employee.L_Name,
  attend.$day,
  employee.E_type
FROM employee
  INNER JOIN attend
    ON attend.Employee_Nic = employee.Nic_no where attend.date = '$yearmon'  and employee.E_type = 'doctor' ");
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../attend styl.css" media="screen" />
        <title>Leave</title>
        <script>
            function tableToJson(table) {
                var data = [];

// first row needs to be headers
                var headers = [];
                for (var i = 0; i < table.rows[0].cells.length; i++) {
                    headers[i] = table.rows[0].cells[i].innerHTML.toUpperCase().replace(/ /gi, '');
                }
                data.push(headers);
// go through cells
                for (var i = 1; i < table.rows.length; i++) {

                    var tableRow = table.rows[i];
                    var rowData = {};

                    for (var j = 0; j < tableRow.cells.length; j++) {

                        rowData[ headers[j] ] = tableRow.cells[j].value;

                    }

                    data.push(rowData);
                }

                return data;
            }
        </script>

    </head>
    <body>
        <div class="all_container">
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
                                <td id="nic"><input type="text" value="<?php echo $row['Nic_no']; ?>"  id="NIC" readonly></td>
                                <td><input type="text" value="<?php echo $row['F_Name'] . " " . $row['L_Name']; ?>" name="name" readonly</td>
                                <td style="width: 12%; background-color: lightgray"><?php
                                    if ($row[3] == 1) {
                                        echo 'Present';
                                    } else {
                                        echo 'Absent';
                                    }
                                    ?></td>



                                <td style="width: 12%; background-color: lightgray"><select name="LvType" id="lvt" class="styled-select">
                                        <option>Mediacal Leave</option>
                                        <option>Half Day</option>
                                        <option>Short Leave</option>
                                        <option>Other</option>
                                    </select></td>

                                <td style="width: 12%; background-color:#ECEFF1 " id="des" >
                                    <input type="text" id="des" name="des">
                                </td>

                                <td style="width: 12%; background-color:#ECEFF1"><select class="styled-select" name="ReqType" onchange="saveLeave(document.getElementById('NIC').value, document.getElementById('lvt').value, document.getElementById('des').value, this.value, '<?php echo $row[0]; ?>')">
                                        <option>--Select Type--</option>
                                        <option>Letter</option>
                                        <option>Fax</option>
                                        <option>Tele-Mail</option>
                                        <option>Phone Call</option>
                                    </select></td>
                            </tr>

                        <?php endwhile; ?>

                    </table><br><br>

                    <input type="submit" value="View Report"><br><br>
                </form>
                <button  style="width: 150px" onclick="callme();">Download
                </button>
            </center>
        </div>
 
        <script> function callme() {
                var table = tableToJson($('#lvtbl').get(0));
                var doc = new jsPDF('l', 'pt', 'letter', true);


                $.each(table, function(i, row) {
                    $.each(row, function(j, cell) {
                        if (j == "DATE" | i == 0) {
                            doc.cell(20, 50, 150,40,  cell, i);
                        }
                        else {
                            doc.cell(20, 50, 150,40, cell, i);
                        }

                    });
                });

                doc.save('Report.pdf');
              
            }
        </script>

    <script type="text/javascript" src="../jspdf.js"></script>
    <script type="text/javascript" src="../jquery.js"></script>
    <script type="text/javascript" src="../jst.js"></script>
 </body>
</html>  
