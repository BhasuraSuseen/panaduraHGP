<html>
<body>
<?php 
include 'datetime.php';
include 'connect.php';

            $wedc_s1br = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S1Br, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE C_S1Br <> 0.000");
            $wedc_s1lu  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S1Lu, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE C_S1Lu <> 0.000");
            $wedc_s1di  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S1Di, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE C_S1Di <> 0.000");

            $wedc_s2br = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S2Br, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE C_S2Br <> 0.000");
            $wedc_s2lu  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S2Lu, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE C_S2Lu <> 0.000");
            $wedc_s2di  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S2DI, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE C_S2Di <> 0.000");

            $wedc_s3br = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S3Br, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE C_S3Br <> 0.000");
            $wedc_s3lu  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S3Lu, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE C_S3Lu <> 0.000");
            $wedc_s3di  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.C_S3Di, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE C_S3Di <> 0.000");

            $wedpbr = mysqli_query($conn, "SELECT item.Item_name, menu_wed.P_Br, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE P_Br <> 0.000");
            $wedplu  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.P_Lu, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE P_Lu <> 0.000");
            $wedpdi  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.P_Di, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE P_Di <> 0.000");

            $weddbr = mysqli_query($conn, "SELECT item.Item_name, menu_wed.DD_Br, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE DD_Br <> 0.000");
            $weddlu  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.DD_Lu, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE DD_Lu <> 0.000");
            $wedddi  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.DD_Di, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE DD_Di <> 0.000");

            $wedsbr = mysqli_query($conn, "SELECT item.Item_name, menu_wed.S_Br, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE S_Br <> 0.000");
            $wedslu  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.S_Lu, item.unit FROM item INNER JOIN menu_wed ON item.Item_id = menu_wed.Item_id WHERE S_Lu <> 0.000");
            $wedsdi  = mysqli_query($conn, "SELECT item.Item_name, menu_wed.S_Di, item.unit FROM item INNER JOIN menu_wed ON item.Item_id =menu_wed.Item_id WHERE S_Di <> 0.000");


		if($type == "c_s1") {?>
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
                                        <?php while ($wcs1b = mysqli_fetch_array($wedc_s1br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs1b[0]; ?></td>
                                            <td align="left"><?php echo $wcs1b[1].' '.$wcs1b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wcs1l = mysqli_fetch_array($wedc_s1lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs1l[0]; ?></td>
                                            <td align="left"><?php echo $wcs1l[1].' '.$wcs1l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wcs1d = mysqli_fetch_array($wedc_s1di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs1d[0]; ?></td>
                                            <td align="left"><?php echo $wcs1d[1].' '.$wcs1d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
	
	  	<?php }else if($type == "c_s2"){ ?>
		 	<table style="background-color: #CFD8DC;width: 60%" >
                            <tr><td align="left"><b>Children S2</b></td></tr></table>
                        <!--elanga table eka(2) metnta-->
                        <table align="left" style="background-color: #ECEFF1;width: 60%">
                            <tr><td align="left"><b>Breakfirst</b></td>
                                <td align="left"><b>Lunch</b></td>
                                <td align="left"><b>Dinner</b></td></tr>
                            <tr><td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>

                                        </tr>
                                        <?php while ($wcs2b = mysqli_fetch_array($wedc_s2br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs2b[0]; ?></td>
                                            <td align="left"><?php echo $wcs2b[1].' '.$wcs2b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wcs2l = mysqli_fetch_array($wedc_s2lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs2l[0]; ?></td>
                                            <td align="left"><?php echo $wcs2l[1].' '.$wcs2l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>


                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wcs2d = mysqli_fetch_array($wedc_s2di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs2d[0]; ?></td>
                                            <td align="left"><?php echo $wcs2d[1].' '.$wcs2d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
	 	<?php }else if($type == "c_s3"){ ?> 
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
                                        <?php while ($wcs1b = mysqli_fetch_array($wedc_s1br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs1b[0]; ?></td>
                                            <td align="left"><?php echo $wcs1b[1].' '.$wcs1b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wcs1l = mysqli_fetch_array($wedc_s1lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs1l[0]; ?></td>
                                            <td align="left"><?php echo $wcs1l[1].' '.$wcs1l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wcs1d = mysqli_fetch_array($wedc_s1di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs1d[0]; ?></td>
                                            <td align="left"><?php echo $wcs1d[1].' '.$wcs1d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
					
		 	
		<?php } else if($type == "c_s3") { ?>
			<table style="width: 60%"><tr><td style="width:50%">
            
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
                                        <?php while ($wcs3b = mysqli_fetch_array($wedc_s3br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs3b[0]; ?></td>
                                            <td align="left"><?php echo $wcs3b[1].' '.$wcs3b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wcs3l = mysqli_fetch_array($wedc_s3lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs3l[0]; ?></td>
                                            <td align="left"><?php echo $wcs3l[1].' '.$wcs3l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wcs3d = mysqli_fetch_array($wedc_s3di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wcs3d[0]; ?></td>
                                            <td align="left"><?php echo $wcs3d[1].' '.$wcs3d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
									
						<?php } else if($day == "wednesday" && $type == "patients") { ?>
			<table style="width: 60%"><tr><td style="width:50%">
            
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
                                        <?php while ($wpb = mysqli_fetch_array($wedpbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wpb[0]; ?></td>
                                            <td align="left"><?php echo $wpb[1].' '.$wpb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wpl = mysqli_fetch_array($wedplu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wpl[0]; ?></td>
                                            <td align="left"><?php echo $wpl[1].' '.$wpl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wpd = mysqli_fetch_array($wedpdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wpd[0]; ?></td>
                                            <td align="left"><?php echo $wpd[1].' '.$wpd[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
									
									<?php } else if($type == "dd") { ?>
			<table style="width: 60%"><tr><td style="width:50%">
            
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
                                        <?php while ($wdb = mysqli_fetch_array($weddbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wdb[0]; ?></td>
                                            <td align="left"><?php echo $wdb[1].' '.$wdb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wl = mysqli_fetch_array($weddlu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wdl[0]; ?></td>
                                            <td align="left"><?php echo $wdl[1].' '.$wdl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wdd = mysqli_fetch_array($wedddi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wdd[0]; ?></td>
                                            <td align="left"><?php echo $wdd[1].' '.$wdd[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
									
									<?php } else if($type == "staff") { ?>
			<table style="width: 60%"><tr><td style="width:50%">
            
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
                                        <?php while ($wsb = mysqli_fetch_array($wedsbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wsb[0]; ?></td>
                                            <td align="left"><?php echo $wsb[1].' '.$wsb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wsl = mysqli_fetch_array($wedslu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wsl[0]; ?></td>
                                            <td align="left"><?php echo $wsl[1].' '.$wsl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($wsd = mysqli_fetch_array($wedsdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $wsd[0]; ?></td>
                                            <td align="left"><?php echo $wsd[1].' '.$wsd[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
		<?php } ?>
	

</body>
</html>
