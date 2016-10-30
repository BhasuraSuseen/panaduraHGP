
<?php
include 'datetime.php';
include 'connect.php';

$monc_s1br = mysqli_query($conn, "SELECT item.Item_name, tue_breakfast.C_S1, item.unit FROM item INNER JOIN tue_breakfast ON item.Item_id = tue_breakfast.Item_id WHERE C_S1 <> 0.000");
$monc_s1lu  = mysqli_query($conn, "SELECT item.Item_name, tue_lunch.C_S1, item.unit FROM item INNER JOIN tue_lunch ON item.Item_id = tue_lunch.Item_id WHERE C_S1 <> 0.000");
$monc_s1di  = mysqli_query($conn, "SELECT item.Item_name, tue_dinner.C_S1, item.unit FROM item INNER JOIN tue_dinner ON item.Item_id = tue_dinner.Item_id WHERE C_S1 <> 0.000");

$monc_s2br = mysqli_query($conn, "SELECT item.Item_name, tue_breakfast.C_S2, item.unit FROM item INNER JOIN tue_breakfast ON item.Item_id = tue_breakfast.Item_id WHERE C_S2 <> 0.000");
$monc_s2lu  = mysqli_query($conn, "SELECT item.Item_name, tue_lunch.C_S2, item.unit FROM item INNER JOIN tue_lunch ON item.Item_id = tue_lunch.Item_id WHERE C_S2 <> 0.000");
$monc_s2di  = mysqli_query($conn, "SELECT item.Item_name, tue_dinner.C_S2, item.unit FROM item INNER JOIN tue_dinner ON item.Item_id = tue_dinner.Item_id WHERE C_S2 <> 0.000");

$monc_s3br = mysqli_query($conn, "SELECT item.Item_name, tue_breakfast.C_S3, item.unit FROM item INNER JOIN tue_breakfast ON item.Item_id = tue_breakfast.Item_id WHERE C_S3 <> 0.000");
$monc_s3lu  = mysqli_query($conn, "SELECT item.Item_name, tue_lunch.C_S3, item.unit FROM item INNER JOIN tue_lunch ON item.Item_id = tue_lunch.Item_id WHERE C_S3 <> 0.000");
$monc_s3di  = mysqli_query($conn, "SELECT item.Item_name, tue_dinner.C_S3, item.unit FROM item INNER JOIN tue_dinner ON item.Item_id = tue_dinner.Item_id WHERE C_S3 <> 0.000");

$monpbr = mysqli_query($conn, "SELECT item.Item_name, tue_breakfast.Patients, item.unit FROM item INNER JOIN tue_breakfast ON item.Item_id = tue_breakfast.Item_id WHERE Patients <> 0.000");
$monplu  = mysqli_query($conn, "SELECT item.Item_name, tue_lunch.Patients, item.unit FROM item INNER JOIN tue_lunch ON item.Item_id = tue_lunch.Item_id WHERE Patients <> 0.000");
$monpdi  = mysqli_query($conn, "SELECT item.Item_name, tue_dinner.Patients, item.unit FROM item INNER JOIN tue_dinner ON item.Item_id = tue_dinner.Item_id WHERE Patients <> 0.000");

$mondbr = mysqli_query($conn, "SELECT item.Item_name, tue_breakfast.DD, item.unit FROM item INNER JOIN tue_breakfast ON item.Item_id = tue_breakfast.Item_id WHERE DD <> 0.000");
$mondlu  = mysqli_query($conn, "SELECT item.Item_name, tue_lunch.DD, item.unit FROM item INNER JOIN tue_lunch ON item.Item_id = tue_lunch.Item_id WHERE DD <> 0.000");
$monddi  = mysqli_query($conn, "SELECT item.Item_name, tue_dinner.DD, item.unit FROM item INNER JOIN tue_dinner ON item.Item_id = tue_dinner.Item_id WHERE DD <> 0.000");

$monsbr = mysqli_query($conn, "SELECT item.Item_name, tue_breakfast.Staff, item.unit FROM item INNER JOIN tue_breakfast ON item.Item_id = tue_breakfast.Item_id WHERE Staff <> 0.000");
$monslu  = mysqli_query($conn, "SELECT item.Item_name, tue_lunch.Staff, item.unit FROM item INNER JOIN tue_lunch ON item.Item_id = tue_lunch.Item_id WHERE Staff <> 0.000");
$monsdi  = mysqli_query($conn, "SELECT item.Item_name, tue_dinner.Staff, item.unit FROM item INNER JOIN tue_dinner ON item.Item_id = tue_dinner.Item_id WHERE Staff <> 0.000");



?>
<html>
    <h1><?php echo $date4; ?> Menu</h1>



<?php if($date4 == "Tuesday"){?>



<!--mada table 3-->
<table style="width: 100%">
    <tr><td style="background-color: white">

            <table style="background-color: #CFD8DC;width: 100%" >
                <tr><td align="left"><b>Children S1</b></td></tr></table>
            <!--Methnta fitst table eka danna-->
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
                            <td align="left"><?php echo $mcs1b[1]; ?></td>
							<td align="left"><?php echo $mcs1b[2]; ?></td>
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
                            <td align="left"><?php echo $mcs1l[1]; ?></td>
							<td align="left"><?php echo $mcs1l[2]; ?></td>
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
                            <td align="left"><?php echo $mcs1d[1]; ?></td>
							<td align="left"><?php echo $mcs1d[2]; ?></td>
							</tr>
                    <?php endwhile; ?>

                    
                </table></td>
        </tr>

                </table>
            <!--......................................-->

        </td><td>
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
					<?php while ($mcs2b = mysqli_fetch_array($monc_s2br)):; ?>
                        <tr>
                            <td align="left"><?php echo $mcs2b[0]; ?></td>
                            <td align="left"><?php echo $mcs2b[1]; ?></td>
							<td align="left"><?php echo $mcs2b[2]; ?></td>
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
                            <td align="left"><?php echo $mcs2l[1]; ?></td>
							<td align="left"><?php echo $mcs2l[2]; ?></td>
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
                            <td align="left"><?php echo $mcs2d[1]; ?></td>
							<td align="left"><?php echo $mcs2d[2]; ?></td>
							</tr>
                    <?php endwhile; ?>

                    
                </table></td>
        </tr>

                </table>

            <!--...........................................-->

        
    </tr>
</table>

<table style="width: 100%">
    <tr><td style="background-color: white">

            <table style="background-color: #CFD8DC;width: 100%" >
                <tr><td align="left"><b>Children S3</b></td></tr></table>
            <!--Methnta fitst table eka danna-->
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
                            <td align="left"><?php echo $mcs3b[1]; ?></td>
							<td align="left"><?php echo $mcs3b[2]; ?></td>
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
                            <td align="left"><?php echo $mcs3l[1]; ?></td>
							<td align="left"><?php echo $mcs3l[2]; ?></td>
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
                            <td align="left"><?php echo $mcs3d[1]; ?></td>
							<td align="left"><?php echo $mcs3d[2]; ?></td>
							</tr>
                    <?php endwhile; ?>

                    
                </table></td>
        </tr>

                </table>
            <!--......................................-->

        </td><td>
            <table style="background-color: #CFD8DC;width: 100%" >
                <tr><td align="left"><b>Patients</b></td></tr></table>
            <!--Methnta fitst table eka danna-->
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
                            <td align="left"><?php echo $mpb[1]; ?></td>
							<td align="left"><?php echo $mpb[2]; ?></td>
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
                            <td align="left"><?php echo $mpl[1]; ?></td>
							<td align="left"><?php echo $mpl[2]; ?></td>
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
                            <td align="left"><?php echo $mpd[1]; ?></td>
							<td align="left"><?php echo $mpd[2]; ?></td>
							</tr>
                    <?php endwhile; ?>

                    
                </table></td>
        </tr>

                </table>
            <!--......................................-->

        
    </tr>
</table>
<!--mada table 3-->

<table style="width: 100%">
    <tr><td style="background-color: white">

            </td><td>
            <table style="background-color: #CFD8DC;width: 100%" >
                <tr><td align="left"><b>DD Patients</b></td></tr></table>
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
					<?php while ($mdb = mysqli_fetch_array($mondbr)):; ?>
                        <tr>
                            <td align="left"><?php echo $mdb[0]; ?></td>
                            <td align="left"><?php echo $mdb[1]; ?></td>
							<td align="left"><?php echo $mdb[2]; ?></td>
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
                            <td align="left"><?php echo $mdl[1]; ?></td>
							<td align="left"><?php echo $mdl[2]; ?></td>
							</tr>
                    <?php endwhile; ?>

                    
                </table></td>


            <td><table align="left" style="background-color: #ECEFF1;width: 100%">
                    <tr>
                        <td align="left"><b>Item Name</b></td>
                        <td align="left"><b>Amount</b></td>
                    </tr>
					<?php while ($mdd = mysqli_fetch_array($monsdi)):; ?>
                        <tr>
                            <td align="left"><?php echo $mdd[0]; ?></td>
                            <td align="left"><?php echo $mdd[1]; ?></td>
							<td align="left"><?php echo $mdd[2]; ?></td>
							</tr>
                    <?php endwhile; ?>

                    
                </table></td>
        </tr>

                </table>

            <!--...........................................-->
        </td><td>
		<table style="background-color: #CFD8DC;width: 100%" >
                <tr><td align="left"><b>Staff</b></td></tr></table>
            <!--Methnta fitst table eka danna-->
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
                            <td align="left"><?php echo $msb[1]; ?></td>
							<td align="left"><?php echo $msb[2]; ?></td>
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
                            <td align="left"><?php echo $msl[1]; ?></td>
							<td align="left"><?php echo $msl[2]; ?></td>
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
                            <td align="left"><?php echo $msd[1]; ?></td>
							<td align="left"><?php echo $msd[2]; ?></td>
							</tr>
                    <?php endwhile; ?>

                    
                </table></td>
        </tr>

                </table>
           
    </tr>
</table>
<!--mada table 3-->


<?php } ?>

</html>