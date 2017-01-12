<?php
require('fpdf.php');
class PDF_report extends FPDF { 
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
	

}
$pdf = new PDF_receipt(); 
$pdf->AddPage(); 
$pdf->SetFont('Arial', '', 12);
$pdf->SetY(100);
$pdf->SetFont('Arial', 'B', 12); 
$pdf->Cell(50, 13, 'Date'); 
$pdf->SetFont('Arial', ''); 
$pdf->Cell(100, 13, date('F j, Y'), 0, 1);


include './datetime.php';
include './connect.php';
$a1=mysqli_query($conn,"SELECT item.Item_name,unit1, report.total,lastenter FROM item INNER JOIN report ON item.Item_id = report.Item_id  WHERE total <> 0");
$b1=mysqli_query($conn,"SELECT lastenter FROM report");
$b = mysqli_fetch_array($b1)


	
 
while ($a = mysqli_fetch_array($a1)){
	$pdf->Cell(427, 20, echo $a[0] , 1, 0, 'L', $fill); 
    	$pdf->Cell(100, 20, echo $a[2].' '.$a[1] , 1, 1, 'R', $fill); 
    	$fill = !$fill;
}
$pdf->Output();
?>
	
				
 
					



