<?php

include 'datetime.php';
include '../connect.php';
?>


<?php

echo 'Panadura base hospital';
echo "<br>";
echo 'Month attendence report                                                                                                   ';
echo $yearmon;

require 'pdfcrowd.php';
?>
<html>
 <table border="1" style="width: 100%">
                <tr>
                    <td style="background-color: appworkspace">ID</td>
                    <td style="background-color: appworkspace">Name</td>
                    <td style="width: 8%; background-color: blanchedalmond">present</td>
                    <td style="width: 8%; background-color: appworkspace">absent</td>
                    

                </tr>

                <tr>
<?php while ($row = mysqli_fetch_array($res)):; ?>
    <?php if ($row['E_type'] == "para") { ?>
                            <td style="width: 15%; "><input type="text" value="<?php echo $row['Nic_no']; ?>"  id="NIC" readonly></td>
                            <td style=""><input type="text" value="<?php echo $row['F_Name'] . " " . $row['L_Name']; ?>" name="name"</td>

        <?php } ?>



                        </tr>
    
<?php endwhile; ?>

            </table>

            <!--<button onclick="loadParadata()">aaaa</button>-->


    </center>
</body>

<script type="text/javascript" src="jst.js"></script>

</html>

<?php

try
{   
    // create an API client instance
    $client = new Pdfcrowd("dhananjaya", "be4790e49b23fdf1e17b2317758d46e3");

    // convert a web page and store the generated PDF into a $pdf variable
    $pdf = $client->convertURI('http://omspanadura.azurewebsites.net/sysadmin.php/');

    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"google_com.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>
    
