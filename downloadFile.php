<?php
require('fpdf.php');
class PDF_reciept extends FPDF { 
    function __construct ($orientation = 'P', $unit = 'pt', $format = 'Letter', $margin = 40) { 
        $this->FPDF($orientation, $unit, $format); 
        $this->SetTopMargin($margin); 
        $this->SetLeftMargin($margin); 
        $this->SetRightMargin($margin); 
        $this->SetAutoPageBreak(true, $margin); 
    }
	function Header() { 
		$this->SetFont('Arial', 'B', 20); 
		$this->SetFillColor(36, 96, 84); 
		$this->SetTextColor(225); 
		$this->Cell(0, 30, "Panadura Base Hospital-Weekly Diet Report", 0, 1, 'C', true); 
	}
	function Footer() { 
		$this->SetFont('Arial', '', 12); 
		$this->SetTextColor(0); 
		$this->SetXY(0,-60); 
		$this->Cell(0, 20, "Thankyou", 'T', 0, 'C'); 
	}

}
$pdf = new PDF_receipt(); 
$pdf->AddPage(); 
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY(100);
$pdf->SetX(100);
$pdf->SetTextColor(0); 
$pdf->SetFillColor(36, 140, 129);
$pdf->SetLineWidth(1); 
$pdf->Cell(427, 25, "Item Name", 'LTR', 0, 'C', true); 
$pdf->Cell(100, 25, "Amount", 'LTR', 1, 'C', true);
$y_axis = $y_axis + $rowHeight; 
$i=0;
$max=25;
$rowHeight=6; 


include './datetime.php';
include './connect.php';
$a1=mysqli_query($conn,"SELECT item.Item_name,unit1, report.total,lastenter FROM item INNER JOIN report ON item.Item_id = report.Item_id  WHERE total <> 0");
$b1=mysqli_query($conn,"SELECT lastenter FROM report");
$b = mysqli_fetch_array($b1)


	
while ($a = mysqli_fetch_array($a1)){
	$item=$a[0];
	$amount=$a[2].' '.$a[1];
	
	$pdf->SetY(100);
    $pdf->SetX(100);
    $pdf->Cell(427, 25,$item, 'LTR', 0, 'C', true); 
	$pdf->Cell(100, 25,$amount, 'LTR', 1, 'C', true);

    //Go to next row
    $y_axis = $y_axis + $rowHeight;
    $i = $i + 1;
}
$pdf->Output();
?>
	
				
 
					



