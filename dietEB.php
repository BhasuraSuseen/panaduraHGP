
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script  src="http://d3js.org/d3.v3.min.js"></script>
<style>
    body {
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

</style>
</head>
<body> 

	<div class="all_container">
		  <div class="left_side_bar">
          <div class="left_side_bar_top">                   
          </div>
          <div class="left_side_bar_down">
              <ul id="nav">
                 <li id="open_mail_1" style="border-left: 4px solid #c62828;">  
						<i> <img src="images/web.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_diet_1" style="border-left: 4px solid #03C9A9;">  
						<i> <img src="images/count.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
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
              </div>
                      <div class="middle_top_right">
                        <?php 
                          require "connect.php";
                          session_start();
                          echo"<a>".$_SESSION['username']."</a>";?><br>
			                   <a href="index.php">Log Out</a>
                        </div>
              </div>
	 
			     
			
          <div id="middle_leftp1">
             
          </div>
          <div id="middle_rightp1">
 
          </div>				             
 	</div>
		<div class="right_side_bar"> 
               <div class="right_side_bar_top">                   
          </div>
          <div class="right_side_bar_down">
              <ul id="nav">
                 <li id="open_hr_1" style="border-right: 4px solid #03C9A9;"> 

						<i> <img src="images/menuv.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_diet_2" style="border-right: 4px solid #03C9A9;"> 

						<i> <img src="images/food-1.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
              </ul>
          </div> 
          	</div>
		 <div id="pop_background"></div>
            <div id="pop_box_mail_1">
			
            </div>
	</div>
     
        <script>
         $(document).ready(function(){
            $('#open_mail_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_mail_1').fadeIn();
                return false;
            });
            $('#open_diet_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_diet_1').fadeIn();
                return false;
            });
             $('#open_diet_2').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_diet_2').fadeIn();
                return false;
            });
	   
            
            $('#pop_background').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box_mail_1').fadeOut();
                $('#pop_box_diet_1').fadeOut();
		        $('#pop_box_diet_2').fadeOut();
 
                return false;
            });
         });
     </script>
 </body>
 </html>
