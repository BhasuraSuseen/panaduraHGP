<html>
<body>
<?php
            include 'datetime.php';
            include 'connect.php';
            $thuc_s1br = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S1Br, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id WHERE C_S1Br <> 0.000");
            $thuc_s1lu  = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S1Lu, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id WHERE C_S1Lu <> 0.000");
            $thuc_s1di  = mysqli_query($conn, "SELECT item.Item_name, menu_tue.C_S1Di, item.unit FROM item INNER JOIN menu_tue ON item.Item_id = menu_tue.Item_id WHERE C_S1Di <> 0.000");

			$thuc_s2br = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S2Br, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE C_S2Br <> 0.000");
            $thuc_s2lu  = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S2Lu, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE C_S2Lu <> 0.000");
            $thuc_s2di  = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S2DI, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE C_S2Di <> 0.000");
			
			$thuc_s3br = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S3Br, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE C_S3Br <> 0.000");
            $thuc_s3lu  = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S3Lu, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE C_S3Lu <> 0.000");
            $thuc_s3di  = mysqli_query($conn, "SELECT item.Item_name, menu_thu.C_S3Di, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE C_S3Di <> 0.000");

			$thupbr = mysqli_query($conn, "SELECT item.Item_name, menu_thu.P_Br, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE P_Br <> 0.000");
            $thuplu  = mysqli_query($conn, "SELECT item.Item_name, menu_thu.P_Lu, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE P_Lu <> 0.000");
            $thupdi  = mysqli_query($conn, "SELECT item.Item_name, menu_thu.P_Di, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE P_Di <> 0.000");

			$thudbr = mysqli_query($conn, "SELECT item.Item_name, menu_thu.DD_Br, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE DD_Br <> 0.000");
            $thudlu  = mysqli_query($conn, "SELECT item.Item_name, menu_thu.DD_Lu, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE DD_Lu <> 0.000");
            $thuddi  = mysqli_query($conn, "SELECT item.Item_name, menu_thu.DD_Di, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE DD_Di <> 0.000");

			$thusbr = mysqli_query($conn, "SELECT item.Item_name, menu_thu.S_Br, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE S_Br <> 0.000");
            $thuslu  = mysqli_query($conn, "SELECT item.Item_name, menu_thu.S_Lu, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE S_Lu <> 0.000");
            $thusdi  = mysqli_query($conn, "SELECT item.Item_name, menu_thu.S_Di, item.unit FROM item INNER JOIN menu_thu ON item.Item_id = menu_thu.Item_id WHERE S_Di <> 0.000");
		

	

		if($type == "c_s1") {?>
			<table style="width: 80%"><tr><td style="width:50%">
            
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
                                        <?php while ($tcs1b = mysqli_fetch_array($thuc_s1br)):; ?>
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
                                        <?php while ($tcs1l = mysqli_fetch_array($thuc_s1lu)):; ?>
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
                                        <?php while ($tcs1d = mysqli_fetch_array($thuc_s1di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs1d[0]; ?></td>
                                            <td align="left"><?php echo $tcs1d[1].' '.$tcs1d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
	
	  	<?php }else if($type == "c_s2"){ ?>
		 	<table style="width: 80%"><tr><td style="width:50%">
            
            <table style="width: 100%">
                <tr><td style="background-color: white">

                        <table style="background-color: #CFD8DC;width: 100%" >
                            <tr><td align="left"><b>Children S2</b></td></tr></table>
                        
                        <table align="left" style="background-color: #ECEFF1;width: 100%">
                            <tr><td align="left"><b>Breakfirst</b></td>
                                <td align="left"><b>Lunch</b></td>
                                <td align="left"><b>Dinner</b></td></tr>
                            <tr><td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tcs2b = mysqli_fetch_array($thuc_s2br)):; ?>
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
                                        <?php while ($tcs2l = mysqli_fetch_array($thuc_s2lu)):; ?>
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
                                        <?php while ($tcs2d = mysqli_fetch_array($thuc_s2di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs2d[0]; ?></td>
                                            <td align="left"><?php echo $tcs2d[1].' '.$tcs2d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


					
		 	
		<?php } else if( $type == "c_s3") { ?>
			<table style="width: 80%"><tr><td style="width:50%">
            
            <table style="width: 100%">
                <tr><td style="background-color: white">

                        <table style="background-color: #CFD8DC;width: 100%" >
                            <tr><td align="left"><b>Children S3</b></td></tr></table>
                        
                        <table align="left" style="background-color: #ECEFF1;width: 100%">
                            <tr><td align="left"><b>Breakfirst</b></td>
                                <td align="left"><b>Lunch</b></td>
                                <td align="left"><b>Dinner</b></td></tr>
                            <tr><td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tcs3b = mysqli_fetch_array($thuc_s3br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs3b[0]; ?></td>
                                            <td align="left"><?php echo $tcs3b[1].' '.$tcs3b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tcs3l = mysqli_fetch_array($thuc_s3lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs3l[0]; ?></td>
                                            <td align="left"><?php echo $tcs3l[1].' '.$tcs3l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tcs3d = mysqli_fetch_array($thuc_s3di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs3d[0]; ?></td>
                                            <td align="left"><?php echo $tcs3d[1].' '.$tcs3d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
									
						<?php } else if($type == "patients") { ?>
			<table style="width: 80%"><tr><td style="width:50%">
            
            <table style="width: 100%">
                <tr><td style="background-color: white">

                        <table style="background-color: #CFD8DC;width: 100%" >
                            <tr><td align="left"><b>Patients</b></td></tr></table>
                        
                        <table align="left" style="background-color: #ECEFF1;width: 100%">
                            <tr><td align="left"><b>Breakfirst</b></td>
                                <td align="left"><b>Lunch</b></td>
                                <td align="left"><b>Dinner</b></td></tr>
                            <tr><td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tpb = mysqli_fetch_array($thupbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tpb[0]; ?></td>
                                            <td align="left"><?php echo $tpb[1].' '.$tpb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tpl = mysqli_fetch_array($thuplu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tpl[0]; ?></td>
                                            <td align="left"><?php echo $tpl[1].' '.$tpl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tpd = mysqli_fetch_array($thupdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tpd[0]; ?></td>
                                            <td align="left"><?php echo $tpd[1].' '.$tpd[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
									
		<?php } else if($type == "dd") { ?>
			<table style="width: 80%"><tr><td style="width:50%">
            
            <table style="width: 100%">
                <tr><td style="background-color: white">

                        <table style="background-color: #CFD8DC;width: 100%" >
                            <tr><td align="left"><b>Diabetics Patients</b></td></tr></table>
                        
                        <table align="left" style="background-color: #ECEFF1;width: 100%">
                            <tr><td align="left"><b>Breakfirst</b></td>
                                <td align="left"><b>Lunch</b></td>
                                <td align="left"><b>Dinner</b></td></tr>
                            <tr><td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tdb = mysqli_fetch_array($thudbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tdb[0]; ?></td>
                                            <td align="left"><?php echo $tdb[1].' '.$tdb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tdl = mysqli_fetch_array($thudlu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tdl[0]; ?></td>
                                            <td align="left"><?php echo $tdl[1].' '.$tdl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tdd = mysqli_fetch_array($thuddi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tdd[0]; ?></td>
                                            <td align="left"><?php echo $tdd[1].' '.$tdd[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
									
									<?php } else if($type == "staff") { ?>
			<table style="width: 80%"><tr><td style="width:50%">
            
            <table style="width: 100%">
                <tr><td style="background-color: white">

                        <table style="background-color: #CFD8DC;width: 100%" >
                            <tr><td align="left"><b>Staff</b></td></tr></table>
                        
                        <table align="left" style="background-color: #ECEFF1;width: 100%">
                            <tr><td align="left"><b>Breakfirst</b></td>
                                <td align="left"><b>Lunch</b></td>
                                <td align="left"><b>Dinner</b></td></tr>
                            <tr><td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tsb = mysqli_fetch_array($thusbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tsb[0]; ?></td>
                                            <td align="left"><?php echo $tsb[1].' '.$tsb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tsl = mysqli_fetch_array($thuslu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tsl[0]; ?></td>
                                            <td align="left"><?php echo $tsl[1].' '.$tsl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($tsd = mysqli_fetch_array($thusdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tsd[0]; ?></td>
                                            <td align="left"><?php echo $tsd[1].' '.$tsd[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
		<?php } ?>
	
</body>
</html>
