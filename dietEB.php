<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="attendence/jst.js"></script>
	<script  src="http://d3js.org/d3.v3.min.js"></script>
	<script type="text/javascript">

  

</script>
</head>
<body>

	<div class="all_container">
		<div class="left_side_bar" >
            		<div class="left_side_bar_top">                   
            		</div>
            		<div class="left_side_bar_down" >
                		<ul id="nav">
					
					<a style="margin-top: -10px;"></a>
					
					<li id="open_mail_1" title="Update Letter Details" style="border-left: 4px solid #c62828;">  
						<i> <img src="images/web.png" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_att_1" title="Establishment Branch Attendence Record" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/check.png" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_hr_2" title="Add New Employee" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/photo.png" style="width:80%;height:auto;opacity: 0.6;padding: 5px;"></i>
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
			
			
            <div id="middle_left" >
		 
               

            </div>
	
            <div class="middle_right">
            
            </div>
		</div>
	<div class="right_side_bar"> 
               <div class="right_side_bar_top">                   
          </div>
          <div class="right_side_bar_down">
              <ul id="nav">
                 <li id="open_hr_1" title="Employee Details" style="border-right: 4px solid #2980b9;"> 

            <i> <img src="images/businessman-7.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
          </li>
		  <li id="open_hr_1" title="Add New System User" style="border-left: 4px solid #455A64;"> 
						<i> <img src="images/businessman-1.png" style="width:80%;height:auto;opacity: 0.6;padding: 5px;"></i> 
					</li>
          
              </ul>
          </div> 
            </div>
	
	
         <div id="pop_background"></div>
     		<div id="pop_box_hr_1" style="position: absolute;
    background:  #ECEFF1;
    font-size: 0.9em;
    width: 60%;
	height:150%;
    margin: 5% 0 0 5%;
    padding: 20px;
    opacity: 1;
    z-index: 1500;
    display: none;">
				 
				 <?php include 'report.php';?>
				
				
					

     			</div>
	<div id="pop_box_hr_2"  style="position: absolute;
    background:  #ECEFF1;
    font-size: 0.9em;
    width: 70%;
	height:60%;
    margin: 5% 0 0 5%;
    padding: 20px;
    opacity: 1;
    z-index: 1500;
    display: none;">
		 <form>
                        <head colspan=2><font size="+2">Select Menu:</font></head>
                        <center><table>
                                <tr><th>Day</th><td height="50px"> 
                                        <select id="dy" name="day">
                                            
                                            <option>Monday</option>
                                            <option>Tuesday</option>
                                            <option>Wednesday</option>
                                            <option>Thursday</option>
                                            <option>Friday</option>
                                            <option>Saturday</option>
											<option>Sunday</option>
                                        </select></td>


                                    <th>Catogary</th><td height="50px">  
                                        <select  id="type" name="type">
                                            <option  value="c_s1">Children S1</option>
                                            <option  value="c_s2">Children S2</option>
                                            <option  value="c_s3">Children S3</option>
                                            <option  value="patients">Patients</option>
                                            <option  value="dd">Diabetics Patients</option>
                                            <option  value="staff">Staff</option>
                                        </select></td>

                            </table>
                            <td height="50px" colspan=2>	
                                <input  style="display:none"type ="submit"></td></tr>
                        </center>
                    </form>
                    <button style="background-color: #263238;
                            outline: none;
                            border: none;
                            width: 100px;
                            font-size: 0.9em;
                            padding: 0.4em;
                            margin-bottom: 0.8em;  
                            color: white;" onclick="menu_view(document.getElementById('dy').value, document.getElementById('type').value)">Search</button>
                    
                            <label  style="width: 100%" id="lbpop"></label><br>
               
 	</div>
	</div>
	
     	<div id="pop_box_att_1" style="position: absolute;
    background: #ECEFF1;
    font-size: 0.9em;
    width: 90%;
	height:70%;
    margin: 5% 0 0 5%;
    padding: 20px;
    opacity: 0.99;
    display: none;
    z-index: 1500;">
	  		<?php include 'dui.php';?>
                   
 	</div>

	</div>
	
  <div>
    
  
  </div>
     
        <script>
         $(document).ready(function(){
            $('#open_hr_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_hr_1').fadeIn();
                return false;
            });
            $('#open_att_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_att_1').fadeIn();
                return false;
            });
	    $('#open_hr_2').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_hr_2').fadeIn();
                return false;
            });
            $('#pop_background').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box_hr_1').fadeOut();
                $('#pop_box_att_1').fadeOut();
		            $('#pop_box_hr_2').fadeOut();
 
                return false;
            });
         });
     </script>
	 <script>
                    var obj;
                    function checkBrowser() {
                        if (window.XMLHttpRequest) {
                            obj = new XMLHttpRequest();
                        } else {
                            obj = new ActiveXobject("Microfoft.ActiveXobject");
                        }
                    }
                    
                    function menu_view(day, type) {
                        try {
//                            alert(day);
//                            alert(type);
                            checkBrowser();
                            obj.onreadystatechange = function () {
                            //alert(obj.responseText);
                                if (obj.readyState === 4 && obj.status === 200) {
                                    var text1 = obj.responseText;
                                    document.getElementById('lbpop').innerHTML = text1;
                                }
                            };
                            obj.open("POST", "menu_view.php", true);
                            obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            obj.send("day=" + day + "&type=" + type);
                        }
                        catch (err) {
                        }
                    }
                </script>
	
 </body>
 </html>
