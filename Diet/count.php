<?php
include './datetime.php';
include './connect.php';

$monb = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit1, menu_mon.Item_id FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");
$monl = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit1, menu_mon.Item_id FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");
$mond = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit1, menu_mon.Item_id FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");

$tueb = mysqli_query($conn, "SELECT  item.Item_name, menu_tue.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit1, menu_tue.Item_id FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id");
$tuel = mysqli_query($conn, "SELECT  item.Item_name, menu_tue.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit1, menu_tue.Item_id FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id");
$tued = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit1, menu_tue.Item_id FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id");

$wedb = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit1, menu_wed.Item_id FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id");
$wedl = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit1, menu_wed.Item_id FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id");
$wedd = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit1, menu_wed.Item_id FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id");

$thub = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit1, menu_thu.Item_id FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id");
$thul = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit1, menu_thu.Item_id FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id");
$thud = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit1, menu_thu.Item_id FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id");

$frib = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit1, menu_fri.Item_id FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id");
$fril = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit1, menu_fri.Item_id FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id");
$frid = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit1, menu_fri.Item_id FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id");



$date = $date3;
$meal = $_POST['meal'];
$c_s1 = $_POST['children_s1'];
$c_s2 = $_POST['children_s2'];
$c_s3 = $_POST['children_s3'];
$patients = $_POST['patients'];
$dd = $_POST['diabetics_patients'];
$staff = $_POST['staff'];
	
		
		
	$sql1 = "INSERT INTO counts(Date,meal,C_S1,C_S2,C_S3,Patients,DD,Staff) VALUES('$date','$meal','$c_s1','$c_s2','$c_s3','$patients','$dd','$staff')";
	$sql2= "Update counts SET Date='$date', meal='$meal', C_S1='$c_s1', C_S2='$c_s2', C_S3='$c_s3', Patients='$patients', DD='$dd', Staff='$staff' WHERE Date='$date3' AND meal='$meal' ";
			
	$result = mysqli_query($conn, "SELECT Date,meal FROM counts WHERE Date='$date3' AND meal ='$meal'");
	$num_rows = mysqli_num_rows($result);

	if ($num_rows == 0) {
		if (mysqli_query($conn, $sql1)) {
				//echo "New record created successfully";
			} else {
				echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
			}
	}else{
		if (mysqli_query($conn, $sql2)) {
			//echo "New record created successfully";
		} else {
			echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
		}
	} 
	 
	


if($date4 == "Monday"){
	echo '<b>'.$date3.' '.$meal.' '."Menu List".'</b>'.'<br>'.'<br>';
 if($date == $date3 && $meal == "Breakfast"){
	 ?>
		<center>
		<table align="left" style="width: 60%">
		
		<tr>
            <td align="left"><b>Item Name</b></td>
            <td align="left"><b>Amount</b></td>
            </tr>
		 <?php while ($mb = mysqli_fetch_array($monb)):; ?>
				
				<?php $result = ($mb[1]*$c_s1) + ($mb[2]*$c_s2) + ($mb[3]*$c_s3) + ($mb[4]*$patients) + ($mb[5]*$dd) + ($mb[6]*$staff);?>
				
				<?php 
					if($mb[7] == "kg" || $mb[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							
							$sql11 = "INSERT INTO report(Item_id,mon_br) VALUES('$mb[8]','$result')";
							$sql22= "Update report SET Item_id='$mb[8]', mon_br='$result' WHERE Item_id='$mb[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$mb[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql11)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql22)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							} 
							
							$sql33 = "UPDATE report SET total = mon_br";
							
							if (mysqli_query($conn, $sql33)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							
							if($result != 0){
							?> 
					
					<tr>
                            <td align="left"><?php echo $mb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$mb[7]; ?></td></tr>	
				<?php } ?>
				
		<?php endwhile; ?>
		<table>
		</center>
		
 <?php } 

if($date == $date3 && $meal == "Lunch"){?>
					<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					<?php  while ($ml = mysqli_fetch_array($monl)):; 
						$result = ($ml[1]*$c_s1) + ($ml[2]*$c_s2) + ($ml[3]*$c_s3) + ($ml[4]*$patients) + ($ml[5]*$dd) + ($ml[6]*$staff);
						
							if($ml[7] == "kg" || $ml[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,mon_lu) VALUES('$ml[8]','$result')";
							$sql2= "Update report SET Item_id='$ml[8]', mon_lu='$result' WHERE Item_id='$ml[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$ml[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							} 
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$ml[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu";
							$sql34 = "UPDATE report SET total = mon_lu";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							
							if($result != 0){
							?> 
                        <tr>
                            <td align="left"><?php echo $ml[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$ml[7]; ?></td></tr>	
						<?php } ?>
                     <?php endwhile; ?>
						</table>
 <?php } 
 if($date == $date3 && $meal == "Dinner"){ ?>
		<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($md = mysqli_fetch_array($mond)):; 
				
				$result = ($md[1]*$c_s1) + ($md[2]*$c_s2) + ($md[3]*$c_s3) + ($md[4]*$patients) + ($md[5]*$dd) + ($md[6]*$staff);
				
					if($md[7] == "kg" || $md[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,mon_di) VALUES('$md[8]','$result')";
							$sql2= "Update report SET Item_id='$md[8]', mon_di='$result' WHERE Item_id='$md[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$md[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							} 
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$md[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di";
							$sql34 = "UPDATE report SET total = mon_di";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							if($result != 0){
							?> 
					<tr>
                            <td align="left"><?php echo $md[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$md[7]; ?></td></tr>
				<?php }
				
		 endwhile; ?>
			</table>
 <?php }	 
				
}?>				

<?php if($date4 == "Tuesday"){
	echo '<b>'.$date3.' '.$meal.' '."Menu List".'</b>'.'<br>'.'<br>';
 if($date == $date3 && $meal == "Breakfast"){?>
			<center>
			<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php while ($tb = mysqli_fetch_array($tueb)):; 
						$result = ($tb[1]*$c_s1) + ($tb[2]*$c_s2) + ($tb[3]*$c_s3) + ($tb[4]*$patients) + ($tb[5]*$dd) + ($tb[6]*$staff);
						
	 
						 
							 if($tb[7] == "kg" || $tb[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,tue_br) VALUES('$tb[8]','$result')";
							$sql2= "Update report SET Item_id='$tb[8]', tue_br='$result' WHERE Item_id='$tb[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$tb[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							} 
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$tb[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di + tue_br";
							$sql34 = "UPDATE report SET total = tue_br";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							
							if($result != 0){
							?> 
						<tr>
                            <td align="left"><?php echo $tb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$tb[7]; ?></td></tr>
						<?php }
				
				 endwhile;?>
			</table>
			</center>
 <?php }
if($date == $date3 && $meal == "Lunch"){?>
					<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($tl = mysqli_fetch_array($tuel)):; 
						$result = ($tl[1]*$c_s1) + ($tl[2]*$c_s2) + ($tl[3]*$c_s3) + ($tl[4]*$patients) + ($tl[5]*$dd) + ($tl[6]*$staff);
						
						
							if($tl[7] == "kg" || $tl[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							
							$sql1 = "INSERT INTO report(Item_id,tue_lu) VALUES('$tl[8]','$result')";
							$sql2= "Update report SET Item_id='$tl[8]', tue_lu='$result' WHERE Item_id='$tl[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$tl[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							}
							
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$tl[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu";
							$sql34 = "UPDATE report SET total = tue_lu";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							
							if($result != 0){
							
							?> 
							<tr>
                            <td align="left"><?php echo $tl[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$tl[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
<?php }
if($date == $date3 && $meal == "Dinner"){?>
		<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($td = mysqli_fetch_array($tued)):; 
				$result = ($td[1]*$c_s1) + ($td[2]*$c_s2) + ($td[3]*$c_s3) + ($td[4]*$patients) + ($td[5]*$dd) + ($td[6]*$staff);
				
					if($td[7] == "kg" || $td[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,tue_di) VALUES('$td[8]','$result')";
							$sql2= "Update report SET Item_id='$td[8]', tue_di='$result' WHERE Item_id='$td[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$td[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							} 
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$td[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu + tue_di";
							$sql34 = "UPDATE report SET total = tue_di";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							if($result != 0){
							?> 
					<tr>
                        <td align="left"><?php echo $td[0]; ?></td>
                        <td align="left"><?php echo $result.' '.$td[7]; ?></td></tr>
				<?php }
				
		 endwhile; ?>
			</table>
 <?php }	 
 		
				
}				
?>

<?php if($date4 == "Wednesday"){
	echo '<b>'.$date3.' '.$meal.' '."Menu List".'</b>'.'<br>'.'<br>';
 if($date == $date3 && $meal == "Breakfast"){?>
			<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php while ($wb = mysqli_fetch_array($wedb)):; 
						$result = ($wb[1]*$c_s1) + ($wb[2]*$c_s2) + ($wb[3]*$c_s3) + ($wb[4]*$patients) + ($wb[5]*$dd) + ($wb[6]*$staff);
						
						
							if($wb[7] == "kg" || $wb[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							//$a=mysqli_query($conn,"SELECT wed_br,wed_lu,wed_di FROM rpt_wed");
							//$t = mysqli_fetch_array($a);
							//echo $t[0].'<br>';
							//$total=$t[0] + $t[1] + $t[2];
							$sql1 = "INSERT INTO report(Item_id,wed_br) VALUES('$wb[8]','$result')";
							$sql2= "Update report SET Item_id='$wb[8]', wed_br='$result' WHERE Item_id='$wb[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$wb[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							} 
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$wb[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu + tue_di + wed_br";
							$sql34 = "UPDATE report SET total = wed_br";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							
							if($result != 0){
							?>
						
						<tr>
                            <td align="left"><?php echo $wb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$wb[7]; ?></td></tr>
				<?php }
				
		 endwhile;?>
			</table>
 <?php }
if($date == $date3 && $meal == "Lunch"){?>
					<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($wl = mysqli_fetch_array($wedl)):; 
						$result = ($wl[1]*$c_s1) + ($wl[2]*$c_s2) + ($wl[3]*$c_s3) + ($wl[4]*$patients) + ($wl[5]*$dd) + ($wl[6]*$staff);
						
							if($wl[7] == "kg" || $wl[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,wed_lu) VALUES('$wl[8]','$result')";
							$sql2= "Update report SET Item_id='$wl[8]', wed_lu='$result' WHERE Item_id='$wl[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$wl[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							} 
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$wl[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu + tue_di + wed_br + wed_lu";
							$sql34 = "UPDATE report SET total = wed_lu";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							
							if($result != 0){							
							 ?>
							<tr>
                            <td align="left"><?php echo $wl[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$wl[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
<?php }
	if($date == $date3 && $meal == "Dinner"){?>
					<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($wd = mysqli_fetch_array($wedd)):; 
						$result = ($wd[1]*$c_s1) + ($wd[2]*$c_s2) + ($wd[3]*$c_s3) + ($wd[4]*$patients) + ($wd[5]*$dd) + ($wd[6]*$staff);
						
							if($wd[7] == "kg" || $wd[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							
							$sql1 = "INSERT INTO report(Item_id,wed_di) VALUES('$wd[8]','$result')";
							$sql2= "Update report SET Item_id='$wd[8]', wed_di='$result' WHERE Item_id='$wd[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$wd[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							} 
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$wd[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di";
							$sql34 = "UPDATE report SET total = wed_di";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							if($result != 0){
							?> 
							<tr>
                            <td align="left"><?php echo $wd[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$wd[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
 <?php }	 
										
}				
?>
<?php if($date4 == "Thursday"){
	echo '<b>'.$date3.' '.$meal.' '."Menu List".'</b>'.'<br>'.'<br>';
 if($date == $date3 && $meal == "Breakfast"){?>
			<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php while ($tb = mysqli_fetch_array($thub)):; 
						$result = ($tb[1]*$c_s1) + ($tb[2]*$c_s2) + ($tb[3]*$c_s3) + ($tb[4]*$patients) + ($tb[5]*$dd) + ($tb[6]*$staff);
				
					if($tb[7] == "kg" || $tb[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							
							$sql1 = "INSERT INTO report(Item_id,thu_br) VALUES('$tb[8]','$result')";
							$sql2= "Update report SET Item_id='$tb[8]', thu_br='$result' WHERE Item_id='$tb[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$tb[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							} 
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$tb[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br";
							$sql34 = "UPDATE report SET total =thu_br";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							
							if($result != 0){
							?> 
					<tr>
                            <td align="left"><?php echo $tb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$tb[7]; ?></td></tr>
				<?php }
				
		 endwhile;?>
			</table>
 <?php }
if($date == $date3 && $meal == "Lunch"){?>
					<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($tl = mysqli_fetch_array($thul)):; 
						$result = ($tl[1]*$c_s1) + ($tl[2]*$c_s2) + ($tl[3]*$c_s3) + ($tl[4]*$patients) + ($tl[5]*$dd) + ($tl[6]*$staff);
						
							if($tl[7] == "kg" || $tl[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,thu_lu) VALUES('$tl[8]','$result')";
							$sql2= "Update report SET Item_id='$tl[8]', thu_lu='$result' WHERE Item_id='$tl[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$tl[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							}
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$tl[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu";
							$sql34 = "UPDATE report SET total =thu_lu";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
														
							if($result != 0){
							?> 
							<tr>
                            <td align="left"><?php echo $tl[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$tl[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
<?php }
if($date == $date3 && $meal == "Dinner"){?>
		<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($td = mysqli_fetch_array($thud)):; 
				$result = ($td[1]*$c_s1) + ($td[2]*$c_s2) + ($td[3]*$c_s3) + ($td[4]*$patients) + ($td[5]*$dd) + ($td[6]*$staff);
				
					if($td[7] == "kg" || $td[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,thu_di) VALUES('$td[8]','$result')";
							$sql2= "Update report SET Item_id='$td[8]', thu_di='$result' WHERE Item_id='$td[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$td[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							}
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$td[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di";
							$sql34 = "UPDATE report SET total =thu_di";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							if($result != 0){
							?> 
					<tr>
                        <td align="left"><?php echo $td[0]; ?></td>
                        <td align="left"><?php echo $result.' '.$td[7]; ?></td></tr>
				<?php }
				
		 endwhile; ?>
			</table>
 <?php }	 
 		
				
}				
?>
<?php if($date4 == "Friday"){
	echo '<b>'.$date3.' '.$meal.' '."Menu List".'</b>'.'<br>'.'<br>';
 if($date == $date3 && $meal == "Breakfast"){?>
			<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php while ($fb = mysqli_fetch_array($frib)):; 
						$result = ($fb[1]*$c_s1) + ($fb[2]*$c_s2) + ($fb[3]*$c_s3) + ($fb[4]*$patients) + ($fb[5]*$dd) + ($fb[6]*$staff);
				
					if($fb[7] == "kg" || $fb[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,fri_br) VALUES('$fb[8]','$result')";
							$sql2= "Update report SET Item_id='$fb[8]', fri_br='$result' WHERE Item_id='$fb[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$fb[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							}
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$fb[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br";
							$sql34 = "UPDATE report SET total =fri_br";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							
							if($result != 0){
							?> 
					<tr>
                            <td align="left"><?php echo $fb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$fb[7]; ?></td></tr>
				<?php }
				
		 endwhile;?>
			</table>
 <?php }
if($date == $date3 && $meal == "Lunch"){?>
					<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($fl = mysqli_fetch_array($fril)):; 
						$result = ($fl[1]*$c_s1) + ($fl[2]*$c_s2) + ($fl[3]*$c_s3) + ($fl[4]*$patients) + ($fl[5]*$dd) + ($fl[6]*$staff);
						
							if($fl[7] == "kg" || $fl[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,fri_lu) VALUES('$fl[8]','$result')";
							$sql2= "Update report SET Item_id='$fl[8]', fri_lu='$result' WHERE Item_id='$fl[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$fl[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							}
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$fl[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br
							+ fri_lu";
							$sql34 = "UPDATE report SET total =fri_lu";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							if($result != 0){
							?> 
							<tr>
                            <td align="left"><?php echo $fl[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$fl[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
<?php }
if($date == $date3 && $meal == "Dinner"){?>
		<table align="left" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($fd = mysqli_fetch_array($frid)):; 
				$result = ($fd[1]*$c_s1) + ($fd[2]*$c_s2) + ($fd[3]*$c_s3) + ($fd[4]*$patients) + ($fd[5]*$dd) + ($fd[6]*$staff);
				
					if($fd[7] == "kg" || $fd[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,fri_di) VALUES('$fd[8]','$result')";
							$sql2= "Update report SET Item_id='$fd[8]', fri_di='$result' WHERE Item_id='$fd[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$fd[8]'");
							$num_rows = mysqli_num_rows($result1);

							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql1)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql2)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								}
							}
							$total =  mysqli_query($conn,"SELECT total FROM report WHERE Item_id='$fd[8]' ");
							$t=mysqli_fetch_array($total);
							//echo $t[0];
							$sql3 = "UPDATE report SET total = mon_br + mon_lu + mon_di +tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br
							+ fri_lu + fri_di";
							$sql34 = "UPDATE report SET total =fri_di";
							if($t[0] == NULL){
								if (mysqli_query($conn, $sql34)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql34 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql3)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
								}
							}
							if($result != 0){
							?> 
					<tr>
                        <td align="left"><?php echo $fd[0]; ?></td>
                        <td align="left"><?php echo $result.' '.$fd[7]; ?></td></tr>
				<?php }
				
		 endwhile; ?>
			</table>
 <?php }	 
 		
				
}				
?>



