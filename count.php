<?php
include 'datetime.php';
include 'connect.php';

$monb = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit1, menu_mon.Item_id FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");
$monl = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit1, menu_mon.Item_id FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");
$mond = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit1, menu_mon.Item_id FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");

$tueb = mysqli_query($conn, "SELECT  item.Item_name, menu_tue.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit1, menu_tue.Item_id, item.Item_id FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id");
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

$satb = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit1, menu_sat.Item_id FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id");
$satl = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit1, menu_sat.Item_id FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id");
$satd = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit1, menu_sat.Item_id FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id");

$sunb = mysqli_query($conn, "SELECT item.Item_name, menu_sun.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit1, menu_sun.Item_id FROM item INNER JOIN menu_sun ON item.Item_id = menu_sun.Item_id");
$sunl = mysqli_query($conn, "SELECT item.Item_name, menu_sun.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit1, menu_sun.Item_id FROM item INNER JOIN menu_sun ON item.Item_id = menu_sun.Item_id");
$sund = mysqli_query($conn, "SELECT item.Item_name, menu_sun.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit1, menu_sun.Item_id FROM item INNER JOIN menu_sun ON item.Item_id = menu_sun.Item_id");



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
			//echo "New record updated successfully";
		} else {
			echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
		}
	} 
	
							
	


	if($date4 == "Monday"){
		echo '<b>'.$date3.' '.$meal.' '."Menu List".'</b>'.'<br>'.'<br>';
 		if($date == $date3 && $meal == "Breakfast"){
	 	?>
		<center>
		<table align="center" style="width: 60%">
		<tr><td align="left"><b>Item Name</b></td>
            	<td align="left"><b>Amount</b></td></tr>
		 <?php 
		 $x =  mysqli_query($conn,"SELECT Item_id FROM report");
		while ($y = mysqli_fetch_array($x)){
			$sql3 = "INSERT INTO report (Item_id,mon_br,mon_lu,mon_di,tue_br,tue_lu,tue_di,wed_br,wed_lu,wed_di,thu_br,thu_lu,thu_di,fri_br,fri_lu,fri_di,sat_br,sat_lu,sat_di,sun_br
			sun_lu,sun_di) VALUES('$y[0]','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";
								
			$sql33= "Update report SET Item_id='$y[0]', mon_br='0', mon_lu='0', mon_di='0', tue_br='0', tue_lu='0', tue_di='0', wed_br='0', wed_lu='0', wed_di='0',
			thu_br='0', thu_lu='0', thu_di='0',fri_br='0', fri_lu='0', fri_di='0', sat_br='0', sat_lu='0', sat_di='0', sun_br='0', sun_lu='0', sun_di='0' WHERE Item_id='$y[0]'";
							
			$num_rows = mysqli_num_rows($x);
			if ($num_rows == 0) {
				if (mysqli_query($conn, $sql3)) {
					//echo "New record created successfully";
				} else {
					echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
				}
			}else{
				if (mysqli_query($conn, $sql33)) {
					//echo "New record updated successfully";
				} else {
					echo "Error: " . $sql33 . "<br>" . mysqli_error($conn);
				}
			}
		}
	 
		 
		 while ($mb = mysqli_fetch_array($monb)):; ?>
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
			//$y = mysqli_query($conn,"SELECT Item_id,mon_br,mon_lu,mon_di FROM report");
			//$x=  mysqli_fetch_array($y);
		$sql11 = "INSERT INTO report(Item_id,mon_br) VALUES('$mb[8]','$result')";
		$sql22= "Update report SET Item_id='$mb[8]', mon_br='$result' WHERE Item_id='$mb[8]'";
							
		$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$mb[8]'");
		$num_rows = mysqli_num_rows($result1);
		if ($num_rows == 0) {
			if (mysqli_query($conn, $sql11)) {
				//echo "New record created successfully";
			} else {
				echo "Error: " . $sql11 . "<br>" . mysqli_error($conn);
			}
		}else{
			if (mysqli_query($conn, $sql22)) {
				//echo "New record updated successfully";
			} else {
				echo "Error: " . $sql22 . "<br>" . mysqli_error($conn);
			}
		}
		$sql4 = "UPDATE report SET lastenter= 'Monday Breakfast' ,total = mon_br";
		if (mysqli_query($conn, $sql4)) {
			//echo "New record created successfully";
		} else {
			echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
		}
		if($result != 0){
		?> 
		<tr><td align="left"><?php echo $mb[0]; ?></td>
                 <td align="left"><?php echo $result.' '.$mb[7]; ?></td></tr>	
		<?php } ?>
		<?php endwhile; ?>
		</table>
		</center>
		
 	<?php } 
	if($date == $date3 && $meal == "Lunch"){?>
		<table align="center" style="width: 60%">
		<tr><td align="left"><b>Item Name</b></td>
                <td align="left"><b>Amount</b></td></tr>
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
				//echo "New record updated successfully";
			} else {
				echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
			}
		} 
							
		$sql4 = "UPDATE report SET lastenter= 'Monday Lunch' ,total = mon_br + mon_lu";
		if (mysqli_query($conn, $sql4)) {
			//echo "New record created successfully";
		} else {
			echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
		}
		if($result != 0){
		?> 
                 <tr><td align="left"><?php echo $ml[0]; ?></td>
                 <td align="left"><?php echo $result.' '.$ml[7]; ?></td></tr>	
		<?php } ?>
               <?php endwhile; ?>
		</table>
 <?php } 
 if($date == $date3 && $meal == "Dinner"){ ?>
		<table align="center" style="width: 60%">
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
							
							$sql4 = "UPDATE report SET lastenter= 'Monday Dinner', total = mon_br + mon_lu + mon_di";
							
								if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
			<table align="center" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php 
							//$x =  mysqli_query($conn,"SELECT Item_id FROM report");
							//while ($y = mysqli_fetch_array($x)){
								//$sql3 = "INSERT INTO report (Item_id,tue_br) VALUES('$y[0]','0')";
								//$sql33= "Update report SET Item_id='$y[0]', tue_br='0' WHERE Item_id='$y[0]'";
							
								//$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$tb[8]'");
								//$num_rows = mysqli_num_rows($x);
								
								//if ($num_rows == 0) {
									//if (mysqli_query($conn, $sql3)) {
										//echo "New record created successfully";
									//} else {
										//echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
									//}
								//}else{
									//if (mysqli_query($conn, $sql33)) {
										//echo "New record created successfully";
									//} else {
										//echo "Error: " . $sql33 . "<br>" . mysqli_error($conn);
									//}
								//}
							//}
					
					
					while ($tb = mysqli_fetch_array($tueb)):; 
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
							
							if($result != 0){
							?> 
						<tr>
                            <td align="left"><?php echo $tb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$tb[7]; ?></td></tr>
						<?php }
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
							$sql4 = "UPDATE report SET lastenter= 'Tuesday Breakfast', total = mon_br + mon_lu + mon_di + tue_br";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
								}
							
							
				
				 endwhile;?>
			</table>
			</center>
 <?php 
						
 }
if($date == $date3 && $meal == "Lunch"){?>
					<table align="center" style="width: 60%">
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
							
							$sql4 = "UPDATE report SET lastenter= 'Tuesday Lunch', total = mon_br + mon_lu + mon_di + tue_br + tue_lu";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
		<table align="center" style="width: 60%">
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
							$sql4 = "UPDATE report SET lastenter= 'Tuesday Dinner', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
			<table align="center" style="width: 60%">
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
							$sql4 = "UPDATE report SET lastenter= 'Wednesday Breakfast', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
					<table align="center" style="width: 60%">
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
							$sql4 = "UPDATE report SET lastenter= 'Wednesday Lunch', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
					<table align="center" style="width: 60%">
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
							$sql4 = "UPDATE report SET lastenter= 'Wednesday Dinner', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
			<table align="center" style="width: 60%">
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
							$sql4 = "UPDATE report SET lastenter= 'Thursday Breakfast', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
					<table align="center" style="width: 60%">
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
							$sql4 = "UPDATE report SET lastenter= 'Thursday Lunch', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
		<table align="center" style="width: 60%">
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
							$sql4 = "UPDATE report SET lastenter= 'Thursday Dinner', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
			<table align="center" style="width: 60%">
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
							$sql4 = "UPDATE report SET lastenter= 'Friday Breakfast', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
					<table align="center" style="width: 60%">
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
							$sql4 = "UPDATE report SET lastenter= 'Friday Lunch', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br + fri_lu";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
		<table align="center" style="width: 60%">
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
							$sql4 = "UPDATE report SET lastenter= 'Friday Dinner', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br + fri_di";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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

<?php if($date4 == "Saturday"){
	echo '<b>'.$date3.' '.$meal.' '."Menu List".'</b>'.'<br>'.'<br>';
 if($date == $date3 && $meal == "Breakfast"){?>
			<table align="center" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php while ($sb = mysqli_fetch_array($satb)):; 
						$result = ($sb[1]*$c_s1) + ($sb[2]*$c_s2) + ($sb[3]*$c_s3) + ($sb[4]*$patients) + ($sb[5]*$dd) + ($sb[6]*$staff);
				
					if($sb[7] == "kg" || $sb[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,sat_br) VALUES('$sb[8]','$result')";
							$sql2= "Update report SET Item_id='$sb[8]', sat_br='$result' WHERE Item_id='$sb[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$sb[8]'");
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
							$sql4 = "UPDATE report SET lastenter= 'Saturday Breakfast', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br + fri_lu + fri_di +sat_br";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
								}
							
							if($result != 0){
							?> 
					<tr>
                            <td align="left"><?php echo $sb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$sb[7]; ?></td></tr>
				<?php }
				
		 endwhile;?>
			</table>
 <?php }
if($date == $date3 && $meal == "Lunch"){?>
					<table align="center" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($sl = mysqli_fetch_array($satl)):; 
						$result = ($sl[1]*$c_s1) + ($sl[2]*$c_s2) + ($sl[3]*$c_s3) + ($sl[4]*$patients) + ($sl[5]*$dd) + ($sl[6]*$staff);
						
							if($sl[7] == "kg" || $sl[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,sat_lu) VALUES('$sl[8]','$result')";
							$sql2= "Update report SET Item_id='$sl[8]', sat_lu='$result' WHERE Item_id='$sl[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$sl[8]'");
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
							$sql4 = "UPDATE report SET lastenter= 'Saturday Lunch', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br + fri_lu + fri_di + sat_br + sat_lu ";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
								}
							if($result != 0){
							?> 
							<tr>
                            <td align="left"><?php echo $sl[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$sl[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
<?php }
if($date == $date3 && $meal == "Dinner"){?>
		<table align="center" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($sd = mysqli_fetch_array($satd)):; 
				$result = ($sd[1]*$c_s1) + ($sd[2]*$c_s2) + ($sd[3]*$c_s3) + ($sd[4]*$patients) + ($sd[5]*$dd) + ($sd[6]*$staff);
				
					if($sd[7] == "kg" || $sd[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,sat_di) VALUES('$sd[8]','$result')";
							$sql2= "Update report SET Item_id='$sd[8]', sat_di='$result' WHERE Item_id='$sd[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$sd[8]'");
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
							$sql4 = "UPDATE report SET lastenter= 'Saturday Dinner', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br + fri_lu + fri_di + sat_br + sat_lu + sat_di";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
								}
							if($result != 0){
							?> 
					<tr>
                        <td align="left"><?php echo $sd[0]; ?></td>
                        <td align="left"><?php echo $result.' '.$sd[7]; ?></td></tr>
				<?php }
				
		 endwhile; ?>
			</table>
 <?php }	 
 		
				
}				
?>

<?php if($date4 == "Sunday"){
	echo '<b>'.$date3.' '.$meal.' '."Menu List".'</b>'.'<br>'.'<br>';
 if($date == $date3 && $meal == "Breakfast"){?>
			<table align="center" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php while ($sb = mysqli_fetch_array($sunb)):; 
						$result = ($sb[1]*$c_s1) + ($sb[2]*$c_s2) + ($sb[3]*$c_s3) + ($sb[4]*$patients) + ($sb[5]*$dd) + ($sb[6]*$staff);
				
					if($sb[7] == "kg" || $sb[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,sun_br) VALUES('$sb[8]','$result')";
							$sql2= "Update report SET Item_id='$sb[8]', sun_br='$result' WHERE Item_id='$sb[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$sb[8]'");
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
							$sql4 = "UPDATE report SET lastenter= 'Sunday Breakfast', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br + fri_lu + fri_di +sat_br + sat_lu + sat_di+ sun_br";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
								}
							
							if($result != 0){
							?> 
					<tr>
                            <td align="left"><?php echo $sb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$sb[7]; ?></td></tr>
				<?php }
				
		 endwhile;?>
			</table>
 <?php }
if($date == $date3 && $meal == "Lunch"){?>
					<table align="center" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($sl = mysqli_fetch_array($sunl)):; 
						$result = ($sl[1]*$c_s1) + ($sl[2]*$c_s2) + ($sl[3]*$c_s3) + ($sl[4]*$patients) + ($sl[5]*$dd) + ($sl[6]*$staff);
						
							if($sl[7] == "kg" || $sl[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,sun_lu) VALUES('$sl[8]','$result')";
							$sql2= "Update report SET Item_id='$sl[8]', sun_lu='$result' WHERE Item_id='$sl[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$sl[8]'");
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
							$sql4 = "UPDATE report SET lastenter= 'Sunday Lunch', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br + fri_lu + fri_di + sat_br + sat_lu + sat_di + sun_br + sun_lu";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
								}
							if($result != 0){
							?> 
							<tr>
                            <td align="left"><?php echo $sl[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$sl[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
<?php }
if($date == $date3 && $meal == "Dinner"){?>
		<table align="center" style="width: 60%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($sd = mysqli_fetch_array($sund)):; 
				$result = ($sd[1]*$c_s1) + ($sd[2]*$c_s2) + ($sd[3]*$c_s3) + ($sd[4]*$patients) + ($sd[5]*$dd) + ($sd[6]*$staff);
				
					if($sd[7] == "kg" || $sd[7] == "L"){
								$result = $result/1000;
							}else{
								$result1 = round($result);
								if($result1 == $result || $result1 > $result){
									$result = $result1;
								}else{
									$result = $result1 + 1;
								}
							}
							$sql1 = "INSERT INTO report(Item_id,sun_di) VALUES('$sd[8]','$result')";
							$sql2= "Update report SET Item_id='$sd[8]', sun_di='$result' WHERE Item_id='$sd[8]'";
							$result1 = mysqli_query($conn, "SELECT Item_id FROM report WHERE Item_id='$sd[8]'");
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
							$sql4 = "UPDATE report SET lastenter= 'Sunday Dinner', total = mon_br + mon_lu + mon_di + tue_br + tue_lu + tue_di + wed_br + wed_lu + wed_di + thu_br + thu_lu + thu_di + fri_br + fri_lu + fri_di + sat_br + sat_lu + sat_di + sun_br + sun_lu + sun_di";
							
							if (mysqli_query($conn, $sql4)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
								}
							if($result != 0){
							?> 
					<tr>
                        <td align="left"><?php echo $sd[0]; ?></td>
                        <td align="left"><?php echo $result.' '.$sd[7]; ?></td></tr>
				<?php }
				
		 endwhile; ?>
			</table>

			
 <?php }	 
 		
				
}				
?>


