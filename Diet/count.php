<?php
include './datetime.php';
include './connect.php';

$monb = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");
$monl = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");
$mond = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");

$tueb = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id");
$tuel = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id");
$tued = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id");

$wedb = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id");
$wedl = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id");
$wedd = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id");

$thub = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id");
$thul = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id");
$thud = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id");

$frib = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id");
$fril = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id");
$frid = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id");

$date = $date3;
$meal = $_POST['meal'];
$c_s1 = $_POST['children_s1'];
$c_s2 = $_POST['children_s2'];
$c_s3 = $_POST['children_s3'];
$patients = $_POST['patients'];
$dd = $_POST['diabetics_patients'];
$staff = $_POST['staff'];

    $sql = "INSERT INTO counts(Date,meal,C_S1,C_S2,C_S3,Patients,DD,Staff) VALUES('$date','$meal','$c_s1','$c_s2','$c_s3','$patients','$dd','$staff')";
    if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

 
if($date4 == "Monday"){
 if($date == $date3 && $meal == "BR"){?>
		<table align="left" style="width: 20%">
		<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($mb = mysqli_fetch_array($monb)):; ?>
				
				<?php $result = ($mb[1]*$c_s1) + ($mb[2]*$c_s2) + ($mb[3]*$c_s3) + ($mb[4]*$patients) + ($mb[5]*$dd) + ($mb[6]*$staff);?>
				
				<?php if($result != 0){?>
					
					<tr>
                            <td align="left"><?php echo $mb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$mb[7]; ?></td></tr>	
				<?php } ?>
				
		<?php endwhile; ?>
		<table>
		
 <?php } 

if($date == $date3 && $meal == "Lu"){?>
					<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					<?php  while ($ml = mysqli_fetch_array($monl)):; 
						$result = ($ml[1]*$c_s1) + ($ml[2]*$c_s2) + ($ml[3]*$c_s3) + ($ml[4]*$patients) + ($ml[5]*$dd) + ($ml[6]*$staff);
						if($result != 0){?>
                        <tr>
                            <td align="left"><?php echo $ml[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$ml[7]; ?></td></tr>	
						<?php } ?>
                     <?php endwhile; ?>
						</table>
 <?php } 
 if($date == $date3 && $meal == "Di"){ ?>
		<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($md = mysqli_fetch_array($mond)):; 
				
				$result = ($md[1]*$c_s1) + ($md[2]*$c_s2) + ($md[3]*$c_s3) + ($md[4]*$patients) + ($md[5]*$dd) + ($md[6]*$staff);
				if($result != 0){?>
					<tr>
                            <td align="left"><?php echo $md[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$md[7]; ?></td></tr>
				<?php }
				
		 endwhile; ?>
			</table>
 <?php }	 
				
}?>				

<?php if($date4 == "Tuesday"){
 if($date == $date3 && $meal == "BR"){?>
			<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php while ($tb = mysqli_fetch_array($tueb)):; 
						$result = ($tb[1]*$c_s1) + ($tb[2]*$c_s2) + ($tb[3]*$c_s3) + ($tb[4]*$patients) + ($tb[5]*$dd) + ($tb[6]*$staff);
				if($result != 0){?>
					<tr>
                            <td align="left"><?php echo $tb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$tb[7]; ?></td></tr>
				<?php }
				
		 endwhile;?>
			</table>
 <?php }
if($date == $date3 && $meal == "Lu"){?>
					<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($tl = mysqli_fetch_array($tuel)):; 
						$result = ($tl[1]*$c_s1) + ($tl[2]*$c_s2) + ($tl[3]*$c_s3) + ($tl[4]*$patients) + ($tl[5]*$dd) + ($tl[6]*$staff);
						if($result != 0){?>
							<tr>
                            <td align="left"><?php echo $tl[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$tl[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
<?php }
if($date == $date3 && $meal == "Di"){?>
		<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($td = mysqli_fetch_array($tued)):; 
				$result = ($td[1]*$c_s1) + ($td[2]*$c_s2) + ($td[3]*$c_s3) + ($td[4]*$patients) + ($td[5]*$dd) + ($td[6]*$staff);
				if($result != 0){?>
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
 if($date == $date3 && $meal == "BR"){?>
			<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php while ($wb = mysqli_fetch_array($wedb)):; 
						$result = ($wb[1]*$c_s1) + ($wb[2]*$c_s2) + ($wb[3]*$c_s3) + ($wb[4]*$patients) + ($wb[5]*$dd) + ($wb[6]*$staff);
				if($result != 0){?>
					<tr>
                            <td align="left"><?php echo $wb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$wb[7]; ?></td></tr>
				<?php }
				
		 endwhile;?>
			</table>
 <?php }
if($date == $date3 && $meal == "Lu"){?>
					<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($wl = mysqli_fetch_array($wedl)):; 
						$result = ($wl[1]*$c_s1) + ($wl[2]*$c_s2) + ($wl[3]*$c_s3) + ($wl[4]*$patients) + ($wl[5]*$dd) + ($wl[6]*$staff);
						if($result != 0){?>
							<tr>
                            <td align="left"><?php echo $wl[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$wl[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
<?php }
	if($date == $date3 && $meal == "Di"){?>
					<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($wd = mysqli_fetch_array($wedd)):; 
						$result = ($wd[1]*$c_s1) + ($wd[2]*$c_s2) + ($wd[3]*$c_s3) + ($wd[4]*$patients) + ($wd[5]*$dd) + ($wd[6]*$staff);
						if($result != 0){?>
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
 if($date == $date3 && $meal == "BR"){?>
			<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php while ($tb = mysqli_fetch_array($thub)):; 
						$result = ($tb[1]*$c_s1) + ($tb[2]*$c_s2) + ($tb[3]*$c_s3) + ($tb[4]*$patients) + ($tb[5]*$dd) + ($tb[6]*$staff);
				if($result != 0){?>
					<tr>
                            <td align="left"><?php echo $tb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$tb[7]; ?></td></tr>
				<?php }
				
		 endwhile;?>
			</table>
 <?php }
if($date == $date3 && $meal == "Lu"){?>
					<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($tl = mysqli_fetch_array($thul)):; 
						$result = ($tl[1]*$c_s1) + ($tl[2]*$c_s2) + ($tl[3]*$c_s3) + ($tl[4]*$patients) + ($tl[5]*$dd) + ($tl[6]*$staff);
						if($result != 0){?>
							<tr>
                            <td align="left"><?php echo $tl[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$tl[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
<?php }
if($date == $date3 && $meal == "Di"){?>
		<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($td = mysqli_fetch_array($thud)):; 
				$result = ($td[1]*$c_s1) + ($td[2]*$c_s2) + ($td[3]*$c_s3) + ($td[4]*$patients) + ($td[5]*$dd) + ($td[6]*$staff);
				if($result != 0){?>
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
 if($date == $date3 && $meal == "BR"){?>
			<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
				 <?php while ($fb = mysqli_fetch_array($frib)):; 
						$result = ($fb[1]*$c_s1) + ($fb[2]*$c_s2) + ($fb[3]*$c_s3) + ($fb[4]*$patients) + ($fb[5]*$dd) + ($fb[6]*$staff);
				if($result != 0){?>
					<tr>
                            <td align="left"><?php echo $fb[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$fb[7]; ?></td></tr>
				<?php }
				
		 endwhile;?>
			</table>
 <?php }
if($date == $date3 && $meal == "Lu"){?>
					<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					 <?php while ($fl = mysqli_fetch_array($fril)):; 
						$result = ($fl[1]*$c_s1) + ($fl[2]*$c_s2) + ($fl[3]*$c_s3) + ($fl[4]*$patients) + ($fl[5]*$dd) + ($fl[6]*$staff);
						if($result != 0){?>
							<tr>
                            <td align="left"><?php echo $fl[0]; ?></td>
                            <td align="left"><?php echo $result.' '.$fl[7]; ?></td></tr>
						<?php }
                     endwhile; ?>
					 </table>
<?php }
if($date == $date3 && $meal == "Di"){?>
		<table align="left" style="width: 20%">
					<tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
		 <?php while ($fd = mysqli_fetch_array($frid)):; 
				$result = ($fd[1]*$c_s1) + ($fd[2]*$c_s2) + ($fd[3]*$c_s3) + ($fd[4]*$patients) + ($fd[5]*$dd) + ($fd[6]*$staff);
				if($result != 0){?>
					<tr>
                        <td align="left"><?php echo $fd[0]; ?></td>
                        <td align="left"><?php echo $result.' '.$fd[7]; ?></td></tr>
				<?php }
				
		 endwhile; ?>
			</table>
 <?php }	 
 		
				
}				
?>


