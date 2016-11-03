<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="globalstyles.css" />
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
			<div id="pop_background"></div>
     		<div id="pop_box_diet_1">
			<form action="diet.php" method="post"  accept-charset="utf-8">
            <head colspan=2><font size="+2">Select Menu:</font></head>
			<center><table>
			<tr><th>Day</th><td height="50px"> 
            <select id="myText1" name="day">
                <option name="day" value="sunday">Sunday</option>
                <option name="day" value="monday">Monday</option>
                <option name="day" value="tuesday">Tuesday</option>
                <option name="day" value="wednesday">Wednesday</option>
                <option name="day" value="wednesday">Thursday</option>
                <option name="day" value="wednesday">Friday</option>
                <option name="day" value="wednesday">Saturday</option>
            </select></td>


            <th>Catogary</th><td height="50px">  
            <select  id="myText2" name="type">
                <option name="type" value="c_s1">Children S1</option>
                <option name="type" value="c_s2">Children S2</option>
                <option name="type" value="c_s3">Children S3</option>
                <option name="type" value="patients">Patients</option>
                <option name="type" value="dd">Diabetics Patients</option>
                <option name="type" value="staff">Staff</option>
            </select></td>
			<td height="50px" colspan=2>	
            <input type="submit" value="Submit" name="submit"></td></tr>
			</table></center>
        </form>
		
		</div>
		
		<script>
			$(document).ready(function(){
            $('#open_hr_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_diet_1').fadeIn();
                return false;
            });
            $('#pop_background').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box_diet_1').fadeOut();
 
                return false;
            });
         });
		</script>
			 
		<!--<iframe src="vertical-timeline/timeline.php" style="float: left; width:100%;height:500px; padding: 5px; overflow: hidden;"></iframe>
		-->
           
     		
   
	

     
        
	
 </body>
 </html>
