<html>
<body>

<?php
include 'datetime.php';
include 'connect.php';

$monc_s1br = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Br, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S1Br <> 0.000");
$monc_s1lu  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Lu, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S1Lu <> 0.000");
$monc_s1di  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Di, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S1Di <> 0.000");

$monc_s2br = mysqli_query($conn, "SELECT item.Item_name, mon_breakfast.C_S2, item.unit FROM item INNER JOIN mon_breakfast ON item.Item_id = mon_breakfast.Item_id WHERE C_S2 <> 0.000");
$monc_s2lu  = mysqli_query($conn, "SELECT item.Item_name, mon_lunch.C_S2, item.unit FROM item INNER JOIN mon_lunch ON item.Item_id = mon_lunch.Item_id WHERE C_S2 <> 0.000");
$monc_s2di  = mysqli_query($conn, "SELECT item.Item_name, mon_dinner.C_S2, item.unit FROM item INNER JOIN mon_dinner ON item.Item_id = mon_dinner.Item_id WHERE C_S2 <> 0.000");

$monc_s3br = mysqli_query($conn, "SELECT item.Item_name, mon_breakfast.C_S3, item.unit FROM item INNER JOIN mon_breakfast ON item.Item_id = mon_breakfast.Item_id WHERE C_S3 <> 0.000");
$monc_s3lu  = mysqli_query($conn, "SELECT item.Item_name, mon_lunch.C_S3, item.unit FROM item INNER JOIN mon_lunch ON item.Item_id = mon_lunch.Item_id WHERE C_S3 <> 0.000");
$monc_s3di  = mysqli_query($conn, "SELECT item.Item_name, mon_dinner.C_S3, item.unit FROM item INNER JOIN mon_dinner ON item.Item_id = mon_dinner.Item_id WHERE C_S3 <> 0.000");

$monpbr = mysqli_query($conn, "SELECT item.Item_name, mon_breakfast.Patients, item.unit FROM item INNER JOIN mon_breakfast ON item.Item_id = mon_breakfast.Item_id WHERE Patients <> 0.000");
$monplu  = mysqli_query($conn, "SELECT item.Item_name, mon_lunch.Patients, item.unit FROM item INNER JOIN mon_lunch ON item.Item_id = mon_lunch.Item_id WHERE Patients <> 0.000");
$monpdi  = mysqli_query($conn, "SELECT item.Item_name, mon_dinner.Patients, item.unit FROM item INNER JOIN mon_dinner ON item.Item_id = mon_dinner.Item_id WHERE Patients <> 0.000");

$mondbr = mysqli_query($conn, "SELECT item.Item_name, mon_breakfast.DD, item.unit FROM item INNER JOIN mon_breakfast ON item.Item_id = mon_breakfast.Item_id WHERE DD <> 0.000");
$mondlu  = mysqli_query($conn, "SELECT item.Item_name, mon_lunch.DD, item.unit FROM item INNER JOIN mon_lunch ON item.Item_id = mon_lunch.Item_id WHERE DD <> 0.000");
$monddi  = mysqli_query($conn, "SELECT item.Item_name, mon_dinner.DD, item.unit FROM item INNER JOIN mon_dinner ON item.Item_id = mon_dinner.Item_id WHERE DD <> 0.000");

$monsbr = mysqli_query($conn, "SELECT item.Item_name, mon_breakfast.Staff, item.unit FROM item INNER JOIN mon_breakfast ON item.Item_id = mon_breakfast.Item_id WHERE Staff <> 0.000");
$monslu  = mysqli_query($conn, "SELECT item.Item_name, mon_lunch.Staff, item.unit FROM item INNER JOIN mon_lunch ON item.Item_id = mon_lunch.Item_id WHERE Staff <> 0.000");
$monsdi  = mysqli_query($conn, "SELECT item.Item_name, mon_dinner.Staff, item.unit FROM item INNER JOIN mon_dinner ON item.Item_id = mon_dinner.Item_id WHERE Staff <> 0.000");


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
                                        <?php while ($mcs1b = mysqli_fetch_array($monc_s1br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mcs1b[0]; ?></td>
                                            <td align="left"><?php echo $mcs1b[1].' '.$mcs1b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($mcs1l = mysqli_fetch_array($monc_s1lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mcs1l[0]; ?></td>
                                            <td align="left"><?php echo $mcs1l[1].' '.$mcs1l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($mcs1d = mysqli_fetch_array($monc_s1di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mcs1d[0]; ?></td>
                                            <td align="left"><?php echo $mcs1d[1].' '.$mcs1d[2]; ?></td>
                                            
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
                                        <?php while ($tcs3b = mysqli_fetch_array($tuec_s3br)):; ?>
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
                                        <?php while ($tcs3l = mysqli_fetch_array($tuec_s3lu)):; ?>
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
                                        <?php while ($tcs3d = mysqli_fetch_array($tuec_s3di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tcs3d[0]; ?></td>
                                            <td align="left"><?php echo $tcs3d[1].' '.$tcs3d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
									
						<?php } else if($type == "patients") { ?>
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
                                        <?php while ($tpb = mysqli_fetch_array($tuepbr)):; ?>
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
                                        <?php while ($tpl = mysqli_fetch_array($tueplu)):; ?>
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
                                        <?php while ($tpd = mysqli_fetch_array($tuepdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tpd[0]; ?></td>
                                            <td align="left"><?php echo $tpd[1].' '.$tpd[2]; ?></td>
                                            
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
                                        <?php while ($tdb = mysqli_fetch_array($tuedbr)):; ?>
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
                                        <?php while ($tdl = mysqli_fetch_array($tuedlu)):; ?>
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
                                        <?php while ($tdd = mysqli_fetch_array($tueddi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tdd[0]; ?></td>
                                            <td align="left"><?php echo $tdd[1].' '.$tdd[2]; ?></td>
                                            
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
                                        <?php while ($tsb = mysqli_fetch_array($tuesbr)):; ?>
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
                                        <?php while ($tsl = mysqli_fetch_array($tueslu)):; ?>
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
                                        <?php while ($tsd = mysqli_fetch_array($tuesdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $tsd[0]; ?></td>
                                            <td align="left"><?php echo $tsd[1].' '.$tsd[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
		<?php } ?>
	


		





<body>
</html>
