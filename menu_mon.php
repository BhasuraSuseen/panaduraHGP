<html>
<body>

<?php
include 'datetime.php';
include 'connect.php';

$monc_s1br = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Br, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S1Br <> 0.000");
$monc_s1lu  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Lu, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S1Lu <> 0.000");
$monc_s1di  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Di, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S1Di <> 0.000");



$monc_s2br = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S2Br, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S2Br <> 0.000");
$monc_s2lu  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S2Lu, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S2Lu <> 0.000");
$monc_s2di  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S2DI, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S2Di <> 0.000");
			
$monc_s3br = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S3Br, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S3Br <> 0.000");
$monc_s3lu  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S3Lu, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S3Lu <> 0.000");
$monc_s3di  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S3Di, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S3Di <> 0.000");

$monpbr = mysqli_query($conn, "SELECT item.Item_name, menu_mon.P_Br, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE P_Br <> 0.000");
$monplu  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.P_Lu, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE P_Lu <> 0.000");
$monpdi  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.P_Di, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE P_Di <> 0.000");

$mondbr = mysqli_query($conn, "SELECT item.Item_name, menu_mon.DD_Br, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE DD_Br <> 0.000");
$mondlu  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.DD_Lu, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE DD_Lu <> 0.000");
$monddi  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.DD_Di, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE DD_Di <> 0.000");

$monsbr = mysqli_query($conn, "SELECT item.Item_name, menu_mon.S_Br, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE S_Br <> 0.000");
$monslu  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.S_Lu, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE S_Lu <> 0.000");
$monsdi  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.S_Di, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE S_Di <> 0.000");


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
		 	<table style="width: 60%"><tr><td style="width:50%">
            
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
                                        <?php while ($mcs2b = mysqli_fetch_array($monc_s2br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mcs2b[0]; ?></td>
                                            <td align="left"><?php echo $mcs2b[1].' '.$mcs2b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($mcs2l = mysqli_fetch_array($monc_s2lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mcs2l[0]; ?></td>
                                            <td align="left"><?php echo $mcs2l[1].' '.$mcs2l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($mcs2d = mysqli_fetch_array($monc_s2di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mcs2d[0]; ?></td>
                                            <td align="left"><?php echo $mcs2d[1].' '.$mcs2d[2]; ?></td>
                                            
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
                                        <?php while ($mcs3b = mysqli_fetch_array($monc_s3br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mcs3b[0]; ?></td>
                                            <td align="left"><?php echo $mcs3b[1].' '.$mcs3b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($mcs3l = mysqli_fetch_array($monc_s3lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mcs3l[0]; ?></td>
                                            <td align="left"><?php echo $mcs3l[1].' '.$mcs3l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($mcs3d = mysqli_fetch_array($monc_s3di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mcs3d[0]; ?></td>
                                            <td align="left"><?php echo $mcs3d[1].' '.$mcs3d[2]; ?></td>
                                            
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
                                        <?php while ($mpb = mysqli_fetch_array($monpbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mpb[0]; ?></td>
                                            <td align="left"><?php echo $mpb[1].' '.$mpb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($mpl = mysqli_fetch_array($monplu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mpl[0]; ?></td>
                                            <td align="left"><?php echo $mpl[1].' '.$mpl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($mpd = mysqli_fetch_array($monpdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mpd[0]; ?></td>
                                            <td align="left"><?php echo $mpd[1].' '.$mpd[2]; ?></td>
                                            
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
                                        <?php while ($mdb = mysqli_fetch_array($mondbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mdb[0]; ?></td>
                                            <td align="left"><?php echo $mdb[1].' '.$mdb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($mdl = mysqli_fetch_array($mondlu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mdl[0]; ?></td>
                                            <td align="left"><?php echo $mdl[1].' '.$mdl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($mdd = mysqli_fetch_array($monddi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $mdd[0]; ?></td>
                                            <td align="left"><?php echo $mdd[1].' '.$mdd[2]; ?></td>
                                            
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
                                        <?php while ($msb = mysqli_fetch_array($monsbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $msb[0]; ?></td>
                                            <td align="left"><?php echo $msb[1].' '.$msb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($msl = mysqli_fetch_array($monslu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $msl[0]; ?></td>
                                            <td align="left"><?php echo $msl[1].' '.$msl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($msd = mysqli_fetch_array($monsdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $msd[0]; ?></td>
                                            <td align="left"><?php echo $msd[1].' '.$msd[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
		<?php } ?>
	


		





<body>
</html>
