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
    
