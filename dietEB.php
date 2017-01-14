<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  
	<script type="text/javascript" src="attendence/jst.js"></script>
	<script  src="http://d3js.org/d3.v3.min.js"></script>
	<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
<style>
    body {
    background-color: #ECEFF1;
    font-family: 'Open Sans';
    color: #607D8B ;
    font-weight: 600; 
    }
    .node{
      fill:ECEFF1;
    }
    .link{
      stroke: #90A4AE;
      stroke-width: 10px;
    }
    .arc {
    fill: #ef5350;
  }
   .arcb {
    fill: #CFD8DC;
  }
  table {
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
      text-align: left;
      padding: 5px;
      font-weight: 600;
  }

  tr:nth-child(even) {
      background-color: #F5F5F5;
  }
  #suggesstion-box{ height: 100px; overflow-y: auto; overflow-x: hidden;display: none;}
  #letterid-list{list-style:none;margin:10px;padding:0;width:100%; }
  #letterid-list li{padding: 5px; background:#fff;border-bottom:#F0F0F0 1px solid;}
  #letterid-list li:hover{background:#fafafa;}
   </style>

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
                    <li id="open_mail_1" title="Reply to letters" style="border-left: 4px solid #c62828;">  
                        <i> <img src="images/mailrep.ico" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
                    </li>
					 <li id="open_att_1" title="enter ward and staff counts" style="border-left: 4px solid #03c9a9;">  
						<i> <img src="images/count.png" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
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
			   		
				  <?php 
                          require "connect.php";
                          session_start();
                          if($_SESSION['username']==''){
                            header("Location:  index.php");
                          }
                          echo"<a>".$_SESSION['username']."</a>";?><br>
			                   <a href="logout.php">Log Out</a>

				 
			   </div>
		    </div>
			
			
            <div id="middle_leftp1">
                <div class="current-flow-left" style="float: left; width:75%;">
                <div class="current-flow-left-top" style="float: left; width:100%;">
                <div class="current-flow-left-top-left" style="width:100%; float: left; ">
                  <div class="search-letters" style="width:100%; min-height: 80px; margin: 10px; margin-left: 20px;  background: #fff;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div style="width: 100%; float: left;background-color: #2980b9;"><a style=" font-size: 16px; color: #fff; padding: 10px;">SEARCH LETTER</a></div>
                  
                      <input type="text" id="search-box"  placeholder=" Select by letter ID" style="float: left;width:30%; margin: 10px; background:#fff;"/>
                      <input type="text" id="search-box1" placeholder=" Select by Subject" style="float: left;width:30%; margin: 10px;background:#fff;"/>
                      <input type="text" id="search-box2" placeholder=" Select by Address" style="float: left;width:30%; margin: 10px;background:#fff;" />

                    <div id="suggesstion-box" style="width: 100%; "></div>
                  
                </div>
                </div>
               
              </div>
                <div class="current-flow" style="float: left; width:100%; margin:10px; margin-left: 20px; margin-top:20px;background: #fff;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">LETTER DETAILS</a></div>
                  <div id ="lettercontent" style="width:100%; padding: 20px; overflow:auto;"><p>Hellow</p></div>
                </div>
              </div>
                <?php
                  $eb = $_SESSION["ebno"];
                  $recentletter=mysqli_query($conn,"select max(letter_id) from letter where eb ='".$eb."'");
                  $rslt=mysqli_fetch_array($recentletter);
                  $letteridtoload = $rslt[0];  ?>
                  <script src="scripts/prio2script.js"></script>
                  <script> 
                      
                   func1(<?php echo $letteridtoload ?>); 
                   func2(<?php echo $letteridtoload ?>);          
                  </script>
              <div class="current-flow-right" style="float: left; width:20%; margin-left: 20px">
                <div class="letters-details" style="width:100%; margin: 10px; margin-left: 20px;  background: #fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fff; padding: 10px; ">DISTRIBUTION</a></div>
                  
                  <div id ="svgcontent" style="width:100%; padding :10px; overflow:auto; font-size: 14px;"></div>
                </div>
              </div>          
                                                          
                      
          </div>
	
            <div class="middle_right">
            
            </div>
		</div>
	<div class="right_side_bar"> 
               <div class="right_side_bar_top">                   
          </div>
          <div class="right_side_bar_down">
              <ul id="nav">
                 <li id="open_hr_1" title="Diet Report" style="border-right: 4px solid #03c9a9;"> 

            <i> <img src="images/food-1.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
          </li>
		  <li id="open_hr_2" title="View menus" style="border-right: 4px solid #03c9a9;">  
	<i> <img src="images/menuv.png" style="width:80%;height:auto;opacity: 0.6;padding: 5px;"></i>
					</li>
           
          
              </ul>
          </div> 
            </div>
	
	
         <div id="pop_background"></div>
		
     		<div id="pop_box_report_2">
		<div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> DIET REPORT </a></div>
		<div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
	
				 
               
                    
                            <center><label  style="width: 100%" id="lbpop1"></label><br></center>
				 <?php include 'report.php';?>
		
		<center><form action="reportPDF.php" method="post">
		<button style="background-color: #263238;
                            outline: none;
                            border: none;
                            width: 100px;
                            font-size: 0.9em;
                            padding: 0.4em;
                            margin-bottom: 0.8em;  
                            color: white;" type="submit">Download</button></form></center>
				
				
					
			</div>
     			</div>
				 
				
					

     			</div>
	<div id="pop_box_diet_1">
	<div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> SELECT MENU </a></div>	
	<div style="width:100%;height:70%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">	
		 <form>
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


                                    <th>Category</th><td height="50px">  
                                        <select  id="type" name="type">
                                            <option  value="c_s1">Children S1</option>
                                            <option  value="c_s2">Children S2</option>
                                            <option  value="c_s3">Children S3</option>
                                            <option  value="patients">Patients</option>
                                            <option  value="dd">Diabetics Patients</option>
                                            <option  value="staff">Staff</option>
                                        </select></td>

                            </table><tr>
                            <td height="50px" colspan=2>	
                                <input  style="display:none"type ="submit"></td></tr>
                        </center>
                    </form>
                    <center><button style="background-color: #263238;
                            outline: none;
                            border: none;
                            width: 100px;
                            font-size: 0.9em;
                            padding: 0.4em;
                            margin-bottom: 0.8em;  
                            color: white;" onclick="menu_view(document.getElementById('dy').value, document.getElementById('type').value)">Search</button></center>
                    
		<center><label  style="width: 100%" id="lbpop"></label><br></center>
               
 	</div>
	</div>
	
	<div id="pop_box_att_1">
	<div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> DIET SCHEDULE </a></div>
	<div style="position: absolute; width:100%; background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">	
		
	  		<?php //include 'dui.php';?>
		<div class="middle_left" >
		
			<center><form name="new_count" method="post" action="dietEB.php" onsubmit="return validateForm()">
                            <table>
				    <thead><tr><th colspan=2 size="+2" color=#2980b9><b>ENTER COUNTS</b></th></tr></thead>

                                <tr><td>Meal Type</td><td>
                                        <input type="radio" id="meal" name="meal" value="Breakfast" required> Breakfast
                                        <input type="radio" id="meal" name="meal" value="Lunch"  required> Lunch
                                        <input type="radio" id="meal" name="meal" value="Dinner"  required> Dinner</td></tr><br>
                                <tr><td>Children S1 </td><td> 
                                        <input type="number" id="s1" name="children_s1" value="" size="20" pattern="[0-9]{1,}" min="0" step="1" required></td></tr>

                                <tr><td>Children S2 </td><td> 
                                        <input type="number" id="s2" name="children_s2" size="20" pattern="[0-9]{1,}" min="0" step="1" required></td></tr>

                                <tr><td>Children S3 </td><td> 
                                        <input type="number" id="s3" name="children_s3" size="20" pattern="[0-9]{1,}" min="0" step="1" required></td></tr>

                                <tr><td>Normal Patients </td><td> 
                                        <input type="number" id="patients" name="patients" size="20" pattern="[0-9]{1,}" min="0" step="1" required></td></tr>

                                <tr><td>DD Patients </td><td> 
                                        <input type="number" id="dp" name="diabetics_patients" size="20" pattern="[0-9]{1,}" min="0" step="1" required></td></tr>

                                <tr><td>Staff </td><td> 
                                        <input type="number" id="staff" name="staff" size="20" pattern="[0-9]{1,}" min="0" step="1" required></td></tr>


				    <tr><td></td><td>
					    <input type ="reset" value="Reset"></td></tr>

                            </table>
                            <tr><td><input  style="display:none"type ="submit"></td></tr>
                        </form>
				
                        <button style="
                                width: 100px;
                                " onclick="countdiet(document.getElementsByName('meal'), document.getElementById('s1').value, document.getElementById('s2').value, document.getElementById('s3').value, document.getElementById('patients').value, document.getElementById('dp').value, document.getElementById('staff').value)">Calculate</button>
                    </center>
                </div>
		<div class="middle_right" >
			<center><label style="background-color: #CFD8DC" align="center" id="lb1" ></label></center><br>
		</div>
		</div>
	</div>
    

	       
	
	<div id="pop_box_hr_3">
	<div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> LETTER UPDATE </a></div>
        <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">	
	 <form name="mctoeb" action="dietEB.php" method="post" accept-charset="utf-8">
    <b>Enter Letter EB to EB date</b><br><br>
    <label>Letter ID</label>
      <?php  
      $eb=$_SESSION['ebno'];
      $abcd=mysqli_query($conn,"select letter_id from letter where mceb is NULL and eb ='".$eb."'");
      if(mysqli_num_rows($abcd)>0){
      $select= '<select name="lid">';
      while($rsl=mysqli_fetch_array($abcd)){
     
      $select.='<option value="' .$rsl[0]. '">'.$rsl[0].'</option>';
       }
      }
       else{
        $select='<select><option></option></select>';
      }
      echo $select;
      echo '</select><br><br>'?>
      <input type="date" name="datemceb" placeholder="Date recieved from Letter EB" required><br>
      <input type="submit" name="submitt" value="Enter Date">
      <input type="reset" name="reset" value="Reset">
  </form>
		
  <?php
   if(isset($_POST["submitt"])){

    $lid=$_POST['lid'];
    $datemceb=$_POST['datemceb'];

    $sql="UPDATE letter SET mceb='$datemceb' WHERE letter_id='$lid'";
    mysqli_query($conn,$sql);
    echo $lid . "was updated";
    }
    ?>

		
		</div>           
 	</div>

	
	
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
 <script>
                    var obj;
                    function checkBrowser() {
                        if (window.XMLHttpRequest) {
                            obj = new XMLHttpRequest();
                        } else {
                            obj = new ActiveXobject("Microfoft.ActiveXobject");
                        }
                    }

                    function countdiet(meal, s1, s2, s3, patients, dp, staff) {
                        try {

                            var meal1;
                            for (var i = 0; i < meal.length; i++) {
                                if (meal[i].checked) {
                                    meal1 = meal[i].value;
                                }
                            }


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
   function report(day, type) {
                        try {
//                            alert(day);
//                            alert(type);
                            checkBrowser();
                            obj.onreadystatechange = function () {
                            //alert(obj.responseText);
                                if (obj.readyState === 4 && obj.status === 200) {
                                    var text1 = obj.responseText;
                                    document.getElementById('lbpop1').innerHTML = text1;
                                }
                            };
                            obj.open("POST", "report.php", true);
                            obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            obj.send("day=" + day + "&type=" + type);
                        }
                        catch (err) {
                        }
                    }
                </script>
  <script type="text/javascript">
  function validateForm(){
      
         if( document.new_count.s1.value == "" )
         {
            alert( "Please provide the count!" );
            document.new_count.s1.focus() ;
            return false;
         }
     if( document.new_count.s2.value == "" )
         {
            alert( "Please provide the count!" );
            document.new_count.s2.focus() ;
            return false;
         }
     if( document.new_count.s3.value == "" )
         {
            alert( "Please provide the count!" );
            document.new_count.s3.focus() ;
            return false;
         }
     if( document.new_count.norm_patients.value == "" )
         {
            alert( "Please provide the count!" );
            document.new_count.norm_patients.focus() ;
            return false;
         }
     if( document.new_count.dd_patients.value == "" )
         {
            alert( "Please provide the count!" );
            document.new_count.dd_patients.focus() ;
            return false;
         }
     if( document.new_count.staff.value == "" )
         {
            alert( "Please provide the count!" );
            document.new_count.staff.focus() ;
            return false;
         }
  }
  </script>
     
        <script>
         $(document).ready(function(){
            $('#open_hr_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_report_2').fadeIn();
                return false;
            });
            $('#open_att_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_att_1').fadeIn();
                return false;
            });
      	    $('#open_hr_2').click(function(){
                      $('#pop_background').fadeIn();
                      $('#pop_box_diet_1').fadeIn();
                      return false;
                  });
      		 $('#open_mail_1').click(function(){
                      $('#pop_background').fadeIn();
                      $('#pop_box_hr_3').fadeIn();
                      return false;
                  });
            $('#pop_background').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box_report_2').fadeOut();
                $('#pop_box_att_1').fadeOut();
            		$('#pop_box_hr_2').fadeOut();
            		$('#pop_box_hr_3').fadeOut();
 
                return false;
            });
         });
     </script>
	
	
 </body>
 </html>
