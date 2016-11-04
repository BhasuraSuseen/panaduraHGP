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

		
		
		<center><form>
						<table>
						<thead>
						<tr>
						<th colspan=2>Enter Counts</th></tr>
						</thead>
	
						<tr><td>Meal Type</td><td>
						<input type="radio" id="meal" name="meal" value="BR" onclick="myFunction()" required> Breakfast
						<input type="radio" id="meal" name="meal" value="Lu" onclick="myFunction()" required> Lunch
						<input type="radio" id="meal" name="meal" value="Di" onclick="myFunction()" required> Dinner</td></tr><br>
						<tr><td>Children S1 </td><td> 
						<input type="text" id="s1" name="children_s1" value="" size="20" pattern="[0-9]{1,}" required></td></tr>
						
						<tr><td>Children S2 </td><td> 
						<input type="text" id="s2" name="children_s2" size="20" pattern="[0-9]{1,}" required></td></tr>
						
						<tr><td>Children S3 </td><td> 
						<input type="text" id="s3" name="children_s3" size="20" pattern="[0-9]{1,}" required></td></tr>
						
						<tr><td>Normal Patients </td><td> 
						<input type="text" id="patients" name="patients" size="20" pattern="[0-9]{1,}" required></td></tr>
						
						<tr><td>DD Patients </td><td> 
						<input type="text" id="dp" name="diabetics_patients" size="20" pattern="[0-9]{1,}" required></td></tr>
						
						<tr><td>Staff </td><td> 
						<input type="text" id="staff" name="staff" size="20" pattern="[0-9]{1,}" required></td></tr>
						

						<tr><td colspan=2 align="center">
                                      
                                    <input type ="reset" value="Reset"></td></tr>
						
						</table>
							<input  style="display:none"type ="submit"></td></tr>
						</form>
							 <button style="background-color: #263238;
                                            outline: none;
                                            border: none;
                                            width: 100px;
                                            font-size: 0.9em;
                                            padding: 0.4em;
                                            margin-bottom: 0.8em;  
                                            color: white;" onclick="count(document.getElementsByName('meal'), document.getElementById('s1').value, document.getElementById('s2').value, document.getElementById('s3').value, document.getElementById('patients').value, document.getElementById('dp').value, document.getElementById('staff').value)">Calculate</button>
						</center>
						</div>
						<div class="middle_right">
							<label id="lb1"></label><br>


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
 <script>
    var obj;
    function checkBrowser() {
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else {
            obj = new ActiveXobject("Microfoft.ActiveXobject");
        }
    }

    function count(meal, s1, s2, s3, patients, dp, staff) {
        try {

            var meal1;
            for (var i = 0; i < meal.length; i++) {
                if (meal[i].checked) {
                    meal1 = meal[i].value;
                }
            }
//        alert(meal1);
//        alert(s1);
//        alert(s2);
//        alert(s3);
//        alert(patients);
//        alert(dp);
//        alert(staff);

            checkBrowser();
            obj.onreadystatechange = function () {

                //alert(obj.responseText);
                if (obj.readyState === 4 && obj.status === 200) {
                    var text = obj.responseText;
                    document.getElementById('lb1').innerHTML = text;
                }
            };
            obj.open("POST", "count.php", true);
            obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            obj.send("meal=" + meal1 + "&children_s1=" + s1 + "&children_s2=" + s2 + "&children_s3=" + s3 + "&patients=" + patients + "&diabetics_patients=" + dp + "&staff=" + staff);
        }
        catch (err) {
        }
    }
</script>

