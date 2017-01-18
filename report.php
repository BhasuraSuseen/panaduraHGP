<?php 
include './datetime.php';
include './connect.php';
$a1=mysqli_query($conn,"SELECT item.Item_id,Item_name,unit1, report.total,lastenter FROM item INNER JOIN report ON item.Item_id = report.Item_id  WHERE total <> 0");
$b1=mysqli_query($conn,"SELECT lastenter FROM report");
$b = mysqli_fetch_array($b1)


?>
	
	
Panadura Base Hospital-Weekly Diet Report<br><?php echo "Year: " .  date("Y");?><br>
<?php echo "Month: " .  date("M");?><br><?php echo "Week No: " .  date("W");?><br>
Period: Monday Breakfast to <?php echo $b[0];?><br>
Consumption of food items:<br>
<center>
	<table align="center" style="background-color: #ECEFF1;width: 50%">
		<tr>
			<td align=left><b>Item id</b></td>
			<td align=left><b>Item Name</b></td>
                        <td align=right><b>Amount</b><br></td>
		</tr><br>
		<?php while ($a = mysqli_fetch_array($a1)):; ?>
		<tr>
			<td align=left><?php echo $a[0]; ?></td>
			<td align=left><?php echo $a[1]; ?></td>
                        <td align=right><?php echo $a[3].' '.$a[2]; ?></td></tr>
		<?php
		endwhile;
		?>
	</table>
</center>




