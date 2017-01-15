
<!DOCTYPE html>
<html>
	<title>Director</title>
<head>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script  src="http://d3js.org/d3.v3.min.js"></script>
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
  
   .arcc {
    fill: #B0BEC5;
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
<script src="scripts/prio1script.js"></script>
</head>
<body> 

	<div class="all_container">
		  <div class="left_side_bar">
          <div class="left_side_bar_top">                   
          </div>
          <div class="left_side_bar_down">
              <ul id="nav">
                    
				            <li id="open_hr_1" style="border-left: 4px solid #2980b9;"> 

						<i> <img src="images/businessman-7.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_diet_1" style="border-left: 4px solid #03C9A9;"> 

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
              <?php
            
                //mail clerk 1 letter count//
                $mcsql1="select * from letter where date is NOT NULL and mcms IS NULL";
                $a=mysqli_query($conn,$mcsql1);
                $a1=mysqli_num_rows($a);
                //echo $a1;
                //medical spurintendant letter count//
                $mssql1="select * from letter where mcms is NOT NULL and msao IS NULL";
                $b=mysqli_query($conn,$mssql1);
                $b1=mysqli_num_rows($b);
                //echo $b1;
                //admin officer letter count//
                $aosql1="select * from letter where msao is NOT NULL and aomc IS NULL";
                $c=mysqli_query($conn,$aosql1);
                $c1=mysqli_num_rows($c);
                //echo $c1;
                //mail clerk letter count 2//
                $mcsql2="select * from letter where aomc is NOT NULL and mceb IS NULL";
                $d=mysqli_query($conn,$mcsql2);
                $d1=mysqli_num_rows($d);
                //echo $d1;
                //eb1 letter count//
                $eb1sql="select * from letter where mceb is NOT NULL and eb='1'";
                $eb1=mysqli_query($conn,$eb1sql);
                $eb11=mysqli_num_rows($eb1);
                //echo $eb11;
                //eb2 letter count//
                $eb2sql="select * from letter where mceb is NOT NULL and eb='2'";
                $eb2=mysqli_query($conn,$eb2sql);
                $eb22=mysqli_num_rows($eb2);
                //echo $eb22;
                //eb3 letter count//
                $eb3sql="select * from letter where mceb is NOT NULL and eb='3'";
                $eb3=mysqli_query($conn,$eb3sql);
                $eb33=mysqli_num_rows($eb3);
                //echo $eb33;
                //eb4 letter count//
                $eb4sql="select * from letter where mceb is NOT NULL and eb='4'";
                $eb4=mysqli_query($conn,$eb4sql);
                $eb44=mysqli_num_rows($eb4);
                //echo $eb44;
                //eb5 letter count//
                $eb5sql="select * from letter where mceb is NOT NULL and eb='5'";
                $eb5=mysqli_query($conn,$eb5sql);
                $eb55=mysqli_num_rows($eb5);
                //echo $eb55;
                //eb6 letter count//
                $eb6sql="select * from letter where mceb is NOT NULL and eb='6'";
                $eb6=mysqli_query($conn,$eb6sql);
                $eb66=mysqli_num_rows($eb6);
                //echo $eb66;
                //eb7 letter count//
                $eb7sql="select * from letter where mceb is NOT NULL and eb='7'";
                $eb7=mysqli_query($conn,$eb7sql);
                $eb77=mysqli_num_rows($eb7);
                //echo $eb77;
                //eb8 letter count//
                $eb8sql="select * from letter where mceb is NOT NULL and eb='8'";
                $eb8=mysqli_query($conn,$eb8sql);
                $eb88=mysqli_num_rows($eb8);
                //echo $eb88;
                ?>  
                    
                    
          </div>
          <div id="middle_leftp1">
  <div class="current-flow-left" style="float: left; width:65%;">
  <div class="search-letters" style="width:100%; min-height: 80px; margin: 10px; margin-left: 20px;  background: #fff;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div style="width: 100%; background-color: #2980b9;"><a style=" font-size: 16px; color: #fff; padding: 10px;">SEARCH LETTER</a></div>
	
      <input type="text" id="search-box"  placeholder=" Select by letter ID" style="float: left;width:28%; margin: 10px; background:#fff;"/>
      <input type="text" id="search-box1" placeholder=" Select by Subject" style="float: left;width:28%; margin: 10px;background:#fff;"/>
      <input type="text" id="search-box2" placeholder=" Select by Address" style="float: left;width:28%; margin: 10px;background:#fff;" />

		<div id="suggesstion-box" style="width: 100%; "></div>
  
</div>
  <div class="current-flow" style="width:100%; margin:10px; margin-left: 20px; margin-top:20px;background: #fff;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">CURRENT FLOW</a></div>
    <div id ="svgcontent" style="width:100%; overflow:auto;"></div>
  </div>
</div>
          <?php
                require "connect.php";
                
                $recentletter=mysqli_query($conn,"select max(letter_id) from letter");
                $rslt=mysqli_fetch_array($recentletter);
                mysqli_close($conn); 
                $letteridtoload = $rslt[0];  ?>
                
                <script> 
                    
                 func1(<?php echo $letteridtoload ?>); 
                 func2(<?php echo $letteridtoload ?>);          
                </script>
<div class="current-flow-right" style="float: left; width:30%; margin-left: 20px">
  <div class="letters-details" style="width:100%; margin: 10px; margin-left: 20px;  background: #fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fff; padding: 10px; ">LETTER DETAILS</a></div>
    
    <div id ="lettercontent" style="width:100%; padding :10px; overflow:auto; font-size: 14px;"></div>
  </div>
</div>          
			             				           				
				
          </div>
          <div id="middle_rightp1">
 
          </div>				             
 	</div>
		<div class="right_side_bar"> 
               
          	</div>
		 <div id="pop_background"></div>
            <div id="pop_box_hr_1">
      
        <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> HR REPORT</a></div>
        <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
         <?php include 'hrreport.php';?> 
        </div>    
      </div>
		<div id="pop_box_mail_2">
      
                <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> DIET REPORT </a></div>
                <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                   <label  style="width: 100%" id="lbpop1"></label><br>
				 <?php include 'report.php';?>
		
		
                </div>    
</div>
		    
                       
            
	</div>
     
        <script>
         $(document).ready(function(){
            $('#open_hr_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_hr_1').fadeIn();
                return false;
            });
		$('#open_diet_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_mail_2').fadeIn();
                return false;
            });
            $('#pop_background').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box_hr_1').fadeOut();
 				$('#pop_box_mail_2').fadeOut();
                return false;
            });
         });
        </script>
 </body>
 </html>
