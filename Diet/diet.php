<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="master/styles/global.css" />
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
			
			
            <div class="middle_left" >
		
        <center><head><font size="+3" color=#2980b9><b>DIET SCHEDULE</b></font></head></center>

		
		
		<center><form name="new_count" method="post" action="diet.php">
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
						<input type="text" name="s1" value="" size="20" pattern="[0-9]{1,}" required></td></tr>
						
						<tr><td>Children S2 count</td><td> 
						<input type="text" name="s2" size="20" pattern="[0-9]{1,}" required></td></tr>
						
						<tr><td>Children S3 count</td><td> 
						<input type="text" name="s3" size="20" pattern="[0-9]{1,}" required></td></tr>
						
						<tr><td>Normal Patients count</td><td> 
						<input type="text" name="norm_patients" size="20" pattern="[0-9]{1,}" required></td></tr>
						
						<tr><td>DD Patients count</td><td> 
						<input type="text" name="dd_patients" size="20" pattern="[0-9]{1,}" required></td></tr>
						
						<tr><td>Staff count</td><td> 
						<input type="text" name="staff" size="20" pattern="[0-9]{1,}" required></td></tr>
						

						<tr><td colspan=2 align="center">
						<input type="submit" value="Submit" name="submit">
						<input type="reset" value="Reset"></td></tr>
						</table>
						</form></center>
						</div>
			 
		<!--<iframe src="vertical-timeline/timeline.php" style="float: left; width:100%;height:500px; padding: 5px; overflow: hidden;"></iframe>
		-->
           
     		
   
	

     
        
	
 </body>
 </html>
