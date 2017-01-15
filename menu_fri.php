<html>
<body>
<?php
            include 'datetime.php';
            include 'connect.php';
            $fric_s1br = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S1Br, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE C_S1Br <> 0.000");
            $fric_s1lu  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S1Lu, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE C_S1Lu <> 0.000");
            $fric_s1di  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S1Di, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE C_S1Di <> 0.000");

			$fric_s2br = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S2Br, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE C_S2Br <> 0.000");
            $fric_s2lu  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S2Lu, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE C_S2Lu <> 0.000");
            $fric_s2di  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S2DI, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE C_S2Di <> 0.000");
			
			$fric_s3br = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S3Br, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE C_S3Br <> 0.000");
            $fric_s3lu  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S3Lu, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE C_S3Lu <> 0.000");
            $fric_s3di  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.C_S3Di, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE C_S3Di <> 0.000");

			$fripbr = mysqli_query($conn, "SELECT item.Item_name, menu_fri.P_Br, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE P_Br <> 0.000");
            $friplu  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.P_Lu, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE P_Lu <> 0.000");
            $fripdi  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.P_Di, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE P_Di <> 0.000");

			$fridbr = mysqli_query($conn, "SELECT item.Item_name, menu_fri.DD_Br, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE DD_Br <> 0.000");
            $fridlu  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.DD_Lu, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE DD_Lu <> 0.000");
            $friddi  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.DD_Di, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE DD_Di <> 0.000");

			$frisbr = mysqli_query($conn, "SELECT item.Item_name, menu_fri.S_Br, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE S_Br <> 0.000");
            $frislu  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.S_Lu, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE S_Lu <> 0.000");
            $frisdi  = mysqli_query($conn, "SELECT item.Item_name, menu_fri.S_Di, item.unit FROM item INNER JOIN menu_fri ON item.Item_id = menu_fri.Item_id WHERE S_Di <> 0.000");
		

	

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
                                        <?php while ($fcs1b = mysqli_fetch_array($fric_s1br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fcs1b[0]; ?></td>
                                            <td align="left"><?php echo $fcs1b[1].' '.$fcs1b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fcs1l = mysqli_fetch_array($fric_s1lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fcs1l[0]; ?></td>
                                            <td align="left"><?php echo $fcs1l[1].' '.$fcs1l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fcs1d = mysqli_fetch_array($fric_s1di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fcs1d[0]; ?></td>
                                            <td align="left"><?php echo $fcs1d[1].' '.$fcs1d[2]; ?></td>
                                            
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
                                        <?php while ($fcs2b = mysqli_fetch_array($fric_s2br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fcs2b[0]; ?></td>
                                            <td align="left"><?php echo $fcs2b[1].' '.$fcs2b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fcs2l = mysqli_fetch_array($fric_s2lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fcs2l[0]; ?></td>
                                            <td align="left"><?php echo $fcs2l[1].' '.$fcs2l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fcs2d = mysqli_fetch_array($fric_s2di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fcs2d[0]; ?></td>
                                            <td align="left"><?php echo $fcs2d[1].' '.$fcs2d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>
		 	
		<?php } else if($type == "c_s3") { ?>
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
                                        <?php while ($fcs3b = mysqli_fetch_array($fric_s3br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fcs3b[0]; ?></td>
                                            <td align="left"><?php echo $fcs3b[1].' '.$fcs3b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fcs3l = mysqli_fetch_array($fric_s3lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fcs3l[0]; ?></td>
                                            <td align="left"><?php echo $fcs3l[1].' '.$fcs3l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fcs3d = mysqli_fetch_array($fric_s3di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fcs3d[0]; ?></td>
                                            <td align="left"><?php echo $fcs3d[1].' '.$fcs3d[2]; ?></td>
                                            
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
                                        <?php while ($fpb = mysqli_fetch_array($fripbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fpb[0]; ?></td>
                                            <td align="left"><?php echo $fpb[1].' '.$fpb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fpl = mysqli_fetch_array($friplu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fpl[0]; ?></td>
                                            <td align="left"><?php echo $fpl[1].' '.$fpl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fpd = mysqli_fetch_array($fripdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fpd[0]; ?></td>
                                            <td align="left"><?php echo $fpd[1].' '.$fpd[2]; ?></td>
                                            
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
                                        <?php while ($fdb = mysqli_fetch_array($fridbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fdb[0]; ?></td>
                                            <td align="left"><?php echo $fdb[1].' '.$fdb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fdl = mysqli_fetch_array($fridlu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fdl[0]; ?></td>
                                            <td align="left"><?php echo $fdl[1].' '.$fdl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fdd = mysqli_fetch_array($friddi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fdd[0]; ?></td>
                                            <td align="left"><?php echo $fdd[1].' '.$fdd[2]; ?></td>
                                            
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
                                        <?php while ($fsb = mysqli_fetch_array($frisbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fsb[0]; ?></td>
                                            <td align="left"><?php echo $fsb[1].' '.$fsb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fsl = mysqli_fetch_array($frislu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fsl[0]; ?></td>
                                            <td align="left"><?php echo $fsl[1].' '.$fsl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($fsd = mysqli_fetch_array($frisdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $fsd[0]; ?></td>
                                            <td align="left"><?php echo $fsd[1].' '.$fsd[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
		<?php } ?>
	
</body>
</html>
