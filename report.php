<?php 
include './datetime.php';
include './connect.php';
$a1=mysqli_query($conn,"SELECT item.Item_name,unit1, report.total,lastenter FROM item INNER JOIN report ON item.Item_id = report.Item_id  WHERE total <> 0");
$b1=mysqli_query($conn,"SELECT lastenter FROM report");
$b = mysqli_fetch_array($b1)


?>
	
	<center>
	<h3>Monday Breakfast to <?php echo $b[0];?> Diet Report</h3>
	<table align="center" style="background-color: #CFD8DC;width: 45%"">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($a = mysqli_fetch_array($a1)):; ?>
				
 
					<tr>
                        <td align="left"><?php echo $a[0]; ?></td>
                        <td align="left"><?php echo $a[2].' '.$a[1]; ?></td></tr>
						 
				<?php 
				
		 endwhile; 
		
		 ?>
			</table>
			</center>




