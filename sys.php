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

  f

</script>
</head>
<body>

	<div class="all_container">
		<div class="left_side_bar" >
            		<div class="left_side_bar_top">                   
            		</div>
            		<div class="left_side_bar_down" >
                		<ul id="nav">
					<li class="admin_panel_list" title="System User Update" style="border-left: 4px solid #455A64;">
						<i> <img src="images/users.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>                               
					</li>
					<a style="margin-top: -10px;"></a>
					<li id="open_hr_1" title="Add New System User" style="border-left: 4px solid #455A64;"> 
						<i> <img src="images/businessman-1.png" style="width:80%;height:auto;opacity: 0.6;padding: 5px;"></i> 
					</li>
					<li id="open_mail_1" title="Update Letter Details" style="border-left: 4px solid #c62828;">  
						<i> <img src="images/web.png" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_att_1" title="Establishment Branch Attendence Record" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/check.png" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_hr_2" title="Add New Employee" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/photo.png" style="width:80%;height:auto;opacity: 0.6;padding: 5px;"></i>
					</li>
           <li id="open_hr_2" title="Get Employee Details" style="border-left: 4px solid #2980b9;">  
            <i> <img src="images/user_refresh.png" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
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
          
              </ul>
          </div> 
            </div>
	
	
         <div id="pop_background"></div>
     		<div id="pop_box_hr_1">
				 
   
<!--script to disable and enable eb type drop down menu -->
					
					

     			</div>
	<div id="pop_box_hr_2">
		<a href="#"> pop box hr2</a>
		<div id="pop_box_hr_data_record_left">
                 
                
                
               
 	</div>
	</div>
	
     	<div id="pop_box_att_1">
	  				
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
	
 </body>
 </html>