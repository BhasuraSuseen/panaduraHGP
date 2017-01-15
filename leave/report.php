<?php

//include 'datetime.php';
//include 'connection.php';
?>


<?php

//echo 'Panadura base hospital';
//echo "<br>";
//echo 'Month attendence report                                                                                                   ';
//echo $yearmon;

require 'pdfcrowd.php';
try
{   
    // create an API client instance
    $client = new Pdfcrowd("homs1", "f8f24f27034ff2118a45c9eb6ae6b49c");

    // convert a web page and store the generated PDF into a $pdf variable
    //methana thmi link ekacedit kranna one--!!!!
    $pdf = $client->convertURI('http://www.google.com/');

    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"Report.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>
    
