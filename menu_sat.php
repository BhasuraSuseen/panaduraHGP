<html>
<body>

<?php
include 'datetime.php';
include 'connect.php';

$satc_s1br = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S1Br, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE C_S1Br <> 0.000");
$satc_s1lu  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S1Lu, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE C_S1Lu <> 0.000");
$satc_s1di  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S1Di, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE C_S1Di <> 0.000");



$satc_s2br = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S2Br, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE C_S2Br <> 0.000");
$satc_s2lu  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S2Lu, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE C_S2Lu <> 0.000");
$satc_s2di  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S2DI, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE C_S2Di <> 0.000");
			
$satc_s3br = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S3Br, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE C_S3Br <> 0.000");
$satc_s3lu  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S3Lu, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE C_S3Lu <> 0.000");
$satc_s3di  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.C_S3Di, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE C_S3Di <> 0.000");

$satpbr = mysqli_query($conn, "SELECT item.Item_name, menu_sat.P_Br, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE P_Br <> 0.000");
$satplu  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.P_Lu, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE P_Lu <> 0.000");
$satpdi  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.P_Di, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE P_Di <> 0.000");

$satdbr = mysqli_query($conn, "SELECT item.Item_name, menu_sat.DD_Br, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE DD_Br <> 0.000");
$satdlu  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.DD_Lu, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE DD_Lu <> 0.000");
$satddi  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.DD_Di, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE DD_Di <> 0.000");

$satsbr = mysqli_query($conn, "SELECT item.Item_name, menu_sat.S_Br, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE S_Br <> 0.000");
$satslu  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.S_Lu, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE S_Lu <> 0.000");
$satsdi  = mysqli_query($conn, "SELECT item.Item_name, menu_sat.S_Di, item.unit FROM item INNER JOIN menu_sat ON item.Item_id = menu_sat.Item_id WHERE S_Di <> 0.000");


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
                                        <?php while ($scs1b = mysqli_fetch_array($satc_s1br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $scs1b[0]; ?></td>
                                            <td align="left"><?php echo $scs1b[1].' '.$scs1b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($scs1l = mysqli_fetch_array($satc_s1lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $scs1l[0]; ?></td>
                                            <td align="left"><?php echo $scs1l[1].' '.$scs1l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($scs1d = mysqli_fetch_array($satc_s1di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $scs1d[0]; ?></td>
                                            <td align="left"><?php echo $scs1d[1].' '.$scs1d[2]; ?></td>
                                            
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
                                        <?php while ($scs2b = mysqli_fetch_array($satc_s2br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $scs2b[0]; ?></td>
                                            <td align="left"><?php echo $scs2b[1].' '.$scs2b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($scs2l = mysqli_fetch_array($satc_s2lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $scs2l[0]; ?></td>
                                            <td align="left"><?php echo $scs2l[1].' '.$scs2l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($scs2d = mysqli_fetch_array($satc_s2di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $scs2d[0]; ?></td>
                                            <td align="left"><?php echo $scs2d[1].' '.$scs2d[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
	 	
					
		 	
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
                                        <?php while ($scs3b = mysqli_fetch_array($satc_s3br)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $scs3b[0]; ?></td>
                                            <td align="left"><?php echo $scs3b[1].' '.$scs3b[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($scs3l = mysqli_fetch_array($satc_s3lu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $scs3l[0]; ?></td>
                                            <td align="left"><?php echo $scs3l[1].' '.$scs3l[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($scs3d = mysqli_fetch_array($satc_s3di)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $scs3d[0]; ?></td>
                                            <td align="left"><?php echo $scs3d[1].' '.$scs3d[2]; ?></td>
                                            
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
                                        <?php while ($spb = mysqli_fetch_array($satpbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $spb[0]; ?></td>
                                            <td align="left"><?php echo $spb[1].' '.$spb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($spl = mysqli_fetch_array($satplu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $spl[0]; ?></td>
                                            <td align="left"><?php echo $spl[1].' '.$spl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($spd = mysqli_fetch_array($satpdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $spd[0]; ?></td>
                                            <td align="left"><?php echo $spd[1].' '.$spd[2]; ?></td>
                                            
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
                                        <?php while ($sdb = mysqli_fetch_array($satdbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $sdb[0]; ?></td>
                                            <td align="left"><?php echo $sdb[1].' '.$sdb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($sdl = mysqli_fetch_array($satdlu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $sdl[0]; ?></td>
                                            <td align="left"><?php echo $sdl[1].' '.$sdl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($sdd = mysqli_fetch_array($satddi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $sdd[0]; ?></td>
                                            <td align="left"><?php echo $sdd[1].' '.$sdd[2]; ?></td>
                                            
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
                                        <?php while ($ssb = mysqli_fetch_array($satsbr)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $ssb[0]; ?></td>
                                            <td align="left"><?php echo $ssb[1].' '.$ssb[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                            
                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($ssl = mysqli_fetch_array($satslu)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $ssl[0]; ?></td>
                                            <td align="left"><?php echo $ssl[1].' '.$ssl[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
                                    

                                <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                                        <tr>
                                            <td align="left"><b>Item Name</b></td>
                                            <td align="left"><b>Amount</b></td>
                                        </tr>
                                        <?php while ($ssd = mysqli_fetch_array($satsdi)):; ?>
                                        <tr>
                                            <td align="left"><?php echo $ssd[0]; ?></td>
                                            <td align="left"><?php echo $ssd[1].' '.$ssd[2]; ?></td>
                                            
                                        </tr>
                                        <?php endwhile; ?>


                                    </table></td>
		<?php } ?>
	


		





<body>
</html>
