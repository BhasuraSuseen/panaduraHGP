
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<link rel="stylesheet" type="text/css" href="del/styles.css" />
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
                 <li id="open_mail_1" title="Update Letter Details" style="border-left: 4px solid #c62828;">  
						<i> <img src="images/web.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
           <li  id="open_mail_2" title="Reply to Letters"  class="letter_panel_list">  
                  <i> <img src="images/mailrep.ico" style="width:80%;height:auto; opacity: 0.6; padding: 5px;">
                  </i>
                  </li>
				 <li id="open_att_1" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/check.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
          <li id="open_hr_2" style="border-left: 4px solid #2980b9;">  
            <i> <img src="images/leave.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
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
             
          </div>
          <div id="middle_rightp1">
 
          </div>				             
 	</div>
		<div class="right_side_bar"> 
               <div class="right_side_bar_top">                   
          </div>
          <div class="right_side_bar_down">
              <ul id="nav">
                 <li id="open_report_1" style="border-right: 4px solid #2980b9;"> 

						<i> <img src="images/businessman-7.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
					
              </ul>
          </div> 
          	</div>
     </div>
		 <div id="pop_background"></div>
            <div id="pop_box_mail_1">
            <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">LETTER UPDATE </a></div>
                  <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                			<form name="mctoeb" action="attendancemaileb1.php" method="post" accept-charset="utf-8">
                    <b>Enter Letter EB to EB date</b><br>
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
                      echo '</select>'?>
                      <input type="date" name="datemceb" placeholder="Date recieved from Letter EB" required>
                      <input type="submit" name="submitt" value="Enter Date">
                      <input type="reset" name="reset" value="Reset">
                  </form>
                  <?php
                   if(isset($_POST["submitt"])){
                    if(isset($_POST['lid'])){

                $lid=$_POST['lid'];
                $datemceb=$_POST['datemceb'];

                $sql="UPDATE letter SET mceb='$datemceb' WHERE letter_id='$lid'";
                mysqli_query($conn,$sql);
                $message= $lid. " was updated";
                  echo  "<script type='text/javascript'>alert('$message');</script>";
                }
                else{
                  $message="No letters to reply";
                  echo  "<script type='text/javascript'>alert('$message');</script>";
                  
                }

                }
                ?>
                </div>
            </div>
            <div id="pop_box_mail_2">
                <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">LETTER REPLY FORM </a></div>
                          <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                                    <?php echo "include here"; ?> 
                          </div>
            </div>
            <div id="pop_box_att_1">
                  <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">ATTENDANCE </a></div>
                  <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                                    <?php  include 'attendence/doctor.php'; ?> 
                  </div>
            </div>
            <div id="pop_box_hr_2">
                  <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">LEAVE </a></div>
                  <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                                    <?php  include 'leave/doctorLeave.php'; ?> 
                  </div>
            </div>
            <div id="pop_box_report_1">
                  <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">EMPLOYEE DETAILS </a></div>
                  <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                                    <?php echo "include here"; ?> 
                  </div>
            </div>
	
    
        <script>
         $(document).ready(function(){
            $('#open_mail_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_mail_1').fadeIn();
                return false;
            });
            $('#open_mail_2').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_mail_2').fadeIn();
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
            $('#open_report_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_report_1').fadeIn();
                return false;
            });

            $('#pop_background').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box_mail_1').fadeOut();
                $('#pop_box_mail_2').fadeOut();
                $('#pop_box_att_1').fadeOut();
                $('#pop_box_hr_2').fadeOut();
                $('#pop_box_report_1').fadeOut();
 
                return false;
            });
         });
        </script>
 </body>
 </html>
