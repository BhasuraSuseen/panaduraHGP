<html>
    <body>
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

                        rowData[ headers[j] ] = tableRow.cells[j].innerHTML;

                    }

                    data.push(rowData);
                }

                return data;
            }
        </script>


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
    ON attend.Employee_Nic = employee.Nic_no where attend.date = '$yearmon'"); //and attendence = 0
?>

<table border = '1' style='width: 70%' id="lvtbl" name="lvtbl" >
    <tr style='background-color: appworkspace' >
        <td>ID</td>
        <td>Name</td>
        <td>Leave Type</td>
        <td>Requed Type</td></tr>

<?php while ($row = mysqli_fetch_array($res)) :; ?>
    <tr><td><?php echo $row[0];?></td><td><?php echo $row['F_Name'] . " " . $row['L_Name'];?></td><td><?php echo $row[3];?></td><td><?php echo $row[4];?></td></tr>
<?php endwhile;?>
</table>


         <button  style="width: 150px" onclick="callme();">Download
                </button>
</body>
        
         <script> function callme() {
                var table = tableToJson($('#lvtbl').get(0));
                var doc = new jsPDF('1', 'pt', 'letter', true);


                $.each(table, function(i, row) {
                    $.each(row, function(j, cell) {
                        if (j == "DATE" | i == 0) {
                            doc.cell(20, 10, 200, 30, cell, i);
                        }
                        else {
                            doc.cell(20, 10, 200, 30, cell, i);
                        }

                    });
                });

                doc.save('Report.pdf');
                alert('ela bn..');
            }
        </script>

    <script type="text/javascript" src="../jspdf.js"></script>
    <script type="text/javascript" src="../jquery.js"></script>
    <script type="text/javascript" src="../jst.js"></script>
    
</html>
