<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="vertical-timeline/js/modernizr.js"></script> <!-- Modernizr -->
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="attendence/jst.js"></script>
		<script type="text/javascript"></script>
</head>
<body>
	<div class="all_container">
		<div class="left_side_bar" >
            		<div class="left_side_bar_top">                   
            		</div>
            		<div class="left_side_bar_down" >
                		<ul id="nav">
					
					<li id="open_hr_1" style="border-left: 4px solid #455A64;"> 
						<i> <img src="images/food-1.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i> 
					</li>
					
				</ul>
           		</div>
        	</div>
			
		<div class="container">
		    <div class="middle_top">
			<div class="middle_top_left">
				<img src="images/oms4.png"  style= "padding: 5px;">
			</div>
			<div class="middle_top_middle">			
				    <div id="clockbox"></div>
			      	    </div>
			   <div class="middle_top_right">
			   </div>
		    </div>
			<?php
			$cs1 = $cs2 = $cs3 = $pt = $dd = $st = "";
			$cs1err = $cs2err = $cs3err = $pterr = $dderr = $sterr = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["s1"])) {
					$cs1err = "Count is required";
				} else {
					$cs1 = test_input($_POST["s1"]);
    // check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$cs1)) {
					$cs1err = "Only numbers allowed";
				}
				}
				if (empty($_POST["s2"])) {
					$cs2err = "Count is required";
				} else {
					$cs2 = test_input($_POST["s2"]);
    // check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$cs2)) {
					$cs2err = "Only numbers allowed";
				}
				}
				if (empty($_POST["s3"])) {
					$cs3err = "Count is required";
				} else {
					$cs3 = test_input($_POST["s3"]);
    // check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$cs3)) {
					$cs3err = "Only numbers allowed";
				}
				}
				if (empty($_POST["norm_patients"])) {
					$pterr = "Count is required";
				} else {
					$pt = test_input($_POST["norm_patients"]);
    // check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$pt)) {
					$pterr = "Only numbers allowed";
				}
				}
				if (empty($_POST["dd_patients"])) {
					$dderr = "Count is required";
				} else {
					$dd = test_input($_POST["dd_patients"]);
    // check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$dd)) {
					$dderr = "Only numbers allowed";
				}
				}
				if (empty($_POST["staff"])) {
					$sterr = "Count is required";
				} else {
					$st = test_input($_POST["staff"]);
    // check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$st)) {
					$sterr = "Only numbers allowed";
				}
				}
				function test_input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
			}
			?>
			
			
            <div class="middle_left" >
		
        <a href="attendence/ebatt.php"> Post box and news feed</a><br>
		<a href="attendence/eb.php"> Post box and news feed</a><br>
		<a href="letter_flow_graph.php"> vertical timeline</a>

		
		
		<center><form name="new_count" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<table>
						<thead>
						<tr>
						<th colspan=2>Enter Counts</th></tr>
						</thead>
	
						<tr><td>Meal Type</td><td>
						<input type="radio" name="mealtype" value="breakfast" onclick="myFunction()" required> Breakfast
						<input type="radio" name="mealtype" value="lunch" onclick="myFunction()" required> Lunch
						<input type="radio" name="mealtype" value="dinner" onclick="myFunction()" required> Dinner</td></tr><br>
						<tr><td>Children S1 count</td><td> 
						<input type="text" name="s1" value="" size="20" required></td></tr>
						<span class="error"><?php echo $cs1err;?></span><br><br>
						<tr><td>Children S2 count</td><td> 
						<input type="text" name="s2" value="<?php echo $cs2;?>" size="20" required></td></tr>
						<span class="error"><?php echo $cs2err;?></span><br><br>
						<tr><td>Children S3 count</td><td> 
						<input type="text" name="s3" value="<?php echo $cs3;?>" size="20" required></td></tr>
						<span class="error"><?php echo $cs3err;?></span><br><br>
						<tr><td>Normal Patients count</td><td> 
						<input type="text" name="norm_patients" value="<?php echo $pt;?>" size="20" required></td></tr>
						<span class="error"><?php echo $pterr;?></span><br><br>
						<tr><td>DD Patients count</td><td> 
						<input type="text" name="dd_patients" value="<?php echo $dd;?>" size="20" required></td></tr>
						<span class="error"><?php echo $dderr;?></span><br><br>
						<tr><td>Staff count</td><td> 
						<input type="text" name="staff" value="<?php echo $st;?>" size="20" required></td></tr>
						<span class="error"><?php echo $sterr;?></span><br><br>

						<tr><td colspan=2 align="center">
						<input type="submit" value="Submit" name="submit">
						<input type="reset" value="Reset"></td></tr>
						</table>
						</form></center>
						</div>
			 
		<!--<iframe src="vertical-timeline/timeline.php" style="float: left; width:100%;height:500px; padding: 5px; overflow: hidden;"></iframe>
		-->
           
     		
   
	

     
        <script>
         $(document).ready(function(){
            $('#open_hr_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_dietcounts').fadeIn();
                return false;
            });
        });
     </script>
	
 </body>
 </html>
