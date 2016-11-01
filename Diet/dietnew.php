<html>
<body>

<?php
            include 'datetime.php';
            include 'connect.php';
            $tuec_s1br = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S1Br, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id WHERE C_S1Br <> 0.000");
            $tuec_s1lu  = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S1Lu, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id WHERE C_S1Lu <> 0.000");
            $tuec_s1di  = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S1Di, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id WHERE C_S1Di <> 0.000");

			$tuec_s2br = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S2Br, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id WHERE C_S2Br <> 0.000");
            $tuec_s2lu  = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S2Lu, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id WHERE C_S2Lu <> 0.000");
            $tuec_s2di  = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S2DI, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id WHERE C_S2Di <> 0.000");

?>
<form action="" method="POST">
						Day 
						<select name="day">
		     				<option  value="sunday">Sunday</option>
		      				<option  value="monday">Monday</option>
		      				<option  value="tuesday">Tuesday</option>
		     				<option value="wednesday">Wednesday</option>
							<option value="wednesday">Thursday</option>
							<option  value="wednesday">Friday</option>
							<option  value="wednesday">Saturday</option>
      					</select>  
						
						
						Catogary 
						<select  name="type">
	         				<option value="c_s1">Children S1</option>
	          				<option  value="c_s2">Children S2</option>
	          				<option value="c-s3">Children S3</option>
	         				<option  value="patients">Patients</option>
							<option  value="dd">Diabetics Patients</option>
							<option  value="staff">Staff</option>
      					</select>
      					
						<input type="submit" value="Submit" name="submit">
						
</form>

	<?php
	if(isset($_POST['submit'])){?>
		<?php $day = $_POST['day'];?>
		<?php $type = $_POST['type'];?>

		<?php if($day == "tuesday" && $type == "c_s1") {?>
			<table style="width: 60%"><tr><td style="width:50%">
            
            <table style="width: 100%">
                <tr><td style="background-color: white">

                        <table style="background-color: #CFD8DC;width: 100%" >
                            <tr><td align="left"><b>Children S1</b></td></tr></table>
                        
                        <table align="left" style="background-color: #ECEFF1;width: 100%">
                            <tr><td align="left"><b>Breakfirst</b></td>
                                <td align="left"><b>Lunch</b></td>
                                <td align="left"><b>Dinner</b></td></tr>
                            <tr><td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tcs1b = mysqli_fetch_array($tuec_s1br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs1b[0]; ?></td>
                                            <td align="left"><?php echo $tcs1b[1].' '.$tcs1b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tcs1l = mysqli_fetch_array($tuec_s1lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs1l[0]; ?></td>
                                            <td align="left"><?php echo $tcs1l[1].' '.$tcs1l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tcs1d = mysqli_fetch_array($tuec_s1di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs1d[0]; ?></td>
                                            <td align="left"><?php echo $tcs1d[1].' '.$tcs1d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
	
	  	<?php }else if($day == "tuesday" && $type == "c_s2"){ ?>
		 	<table style="background-color: #CFD8DC;width: 100%" >
                            <tr><td align="left"><b>Children S2</b></td></tr></table>
                        <!--elanga table eka(2) metnta-->
                        <table align="left" style="background-color: #ECEFF1;width: 100%">
                            <tr><td align="left"><b>Breakfirst</b></td>
                                <td align="left"><b>Lunch</b></td>
                                <td align="left"><b>Dinner</b></td></tr>
                            <tr><td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>

                                        </tr>
                                        <?php while ($tcs2b = mysqli_fetch_array($tuec_s2br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs2b[0]; ?></td>
                                            <td align="left"><?php echo $tcs2b[1].' '.$tcs2b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tcs2l = mysqli_fetch_array($tuec_s2lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs2l[0]; ?></td>
                                            <td align="left"><?php echo $tcs2l[1].' '.$tcs2l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>


                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tcs2d = mysqli_fetch_array($tuec_s2di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs2d[0]; ?></td>
                                            <td align="left"><?php echo $tcs2d[1].' '.$tcs2d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
	 	<?php } ?> 
	<?php }

	?>

</body>
</html>