<?php 
include './datetime.php';
include './connect.php';
$a1=mysqli_query($conn,"SELECT item.Item_name,unit1, report.total  FROM item INNER JOIN report ON item.Item_id = report.Item_id  WHERE total <> 0");?>
	<center>
	<table align="left" style="width: 40%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($a = mysqli_fetch_array($a1)):; ?>
				
 
					<tr>
                        <td align="left"><?php echo $a[0]; ?></td>
                        <td align="left"><?php echo $a[2].' '.$a[1]; ?></td></tr>
				<?php 
				
		 endwhile; ?>
			</table>
			</center>

