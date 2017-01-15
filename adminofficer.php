
<!DOCTYPE html>
<html>
<head>
<?php

session_start();
if($_SESSION['username']==''){
header("Location:  index.php");
}
?>
<title>Adminstrative Officer</title>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="scripts/prio1script.js"></script>
</head>
<body> 

	<div class="all_container">
		  <div class="left_side_bar">
          <div class="left_side_bar_top">                   
          </div>
          <div class="left_side_bar_down">
            <ul id="nav" >
                   <li title="Update letter details" id="open_mail_1" style="border-left: 4px solid #c62828;">  
  						          <i> <img src="images/web.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
  				        </li>
          				 <li title="Delete letter" id="open_mail_2" style="border-left: 4px solid #c62828;">  
          						  <i> <img src="images/maildel.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
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
                          echo"<a>".$_SESSION['username']."</a>";?><br>
			                   <a href="logout.php">Log Out</a>
                        </div>
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
               <div class="right_side_bar_top">                   
          </div>
          <div class="right_side_bar_down">
              <ul id="nav">
                 <li title="Employee Details" id="open_report_1" style="border-right: 4px solid #2980b9;"> 

      						<i> <img src="images/businessman-7.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
      					</li>
      					 <li title="Diet Report" id="open_diet_1" style="border-right: 4px solid #03C9A9;"> 

      						<i> <img src="images/food-1.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
      					</li>
              </ul>
          </div> 
          	</div>
		 <div id="pop_background"></div>
            <div id="pop_box_mail_1">
            <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> LETTER UPDATE </a></div>
                <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
        			<form name="mstoao" action="adminofficer.php" method="post" accept-charset="utf-8">
        				<b>Enter Medical Supirintendent to Admin Officer date</b></br><br>
        				  <label>Letter ID</label>
        						  <?php  
        				     			require "connect.php";
        							$abc=mysqli_query($conn,"select letter_id from letter where msao is NULL and mcms is NOT NULL");
        				    
        		    		     if(mysqli_num_rows($abc)>0){
        				      $select= '<select name="select">';
        				      while($rs=mysqli_fetch_array($abc)){
        				     
        				      $select.='<option value="' .$rs[0]. '">'.$rs[0].'</option>';
        				       }
        				      }
        				      else{
        				        $select='<select><option></option></select>';
        				      }
        				      echo $select;
        				      echo '</select><br><br>'
        					
        		    			?>
        				      <input type="date" name="datemsao" placeholder="Date from MS" required><br>
        				      <input type="submit" name="submitt" value="Enter Date">
        				      <input type="reset" name="reset" value="Reset">
        					</form>
        				
        				<?php
        				
        				 /*ms to ao date enter form */
        				  if(isset($_POST["submitt"])){
                    if(isset($_POST['select'])){
        				$lid=$_POST['select'];
        				$datemsao=$_POST['datemsao'];
        				
        				$sql="UPDATE letter SET msao='$datemsao' WHERE letter_id='$lid'";
        				mysqli_query($conn,$sql);
        				$message= $lid. " was entered";
                echo  "<script type='text/javascript'>alert('$message');</script>";
        				}
        	      else{
                  $message="No letters to forward";
                  echo  "<script type='text/javascript'>alert('$message');</script>";
          
                    }

                }
                        
        				?>
        				
          </div>
          </div>
	</div>
  <div id="pop_box_mail_2" style="width: 60%">
            <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> LETTER DELETE </a></div>
                <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                <?php include "del_let/list_letter.php"; ?>
                </div>
  </div>
  <div id="pop_box_report_1">
      
                <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> EMPLOYEE DETAILS </a></div>
                <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                    <?php include 'hrreport.php';?>
                </div>    
</div>
<div id="pop_box_report_2">
      
                <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> DIET REPORT </a></div>
                <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                   <label  style="width: 100%" id="lbpop1"></label><br>
				 <?php include 'report.php';?>
		
		
                </div>
	 </div>
        
    
        
 </body>
 </html>
