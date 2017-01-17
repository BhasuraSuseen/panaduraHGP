
<!DOCTYPE html>
<html>
<head>
<title>Attendance EB 3</title>
<?php
require "connect.php";
session_start();
if(($_SESSION['admin']!='AB')or($_SESSION['ebno']!=7)){
header("Location:  index.php");
}
?>
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
  <script src="scripts/prio2script.js"></script>
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
           <li  id="open_mail_2" title="Reply to letters"  class="letter_panel_list">  
                  <i> <img src="images/mailrep.ico" style="width:80%;height:auto; opacity: 0.6; padding: 5px;">
                  </i>
                  </li>
				 <li id="open_att_1" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/check.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
          <li id="open_att_2" style="border-left: 4px solid #2980b9;">  
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
		 <div id="pop_background"></div>
            <div id="pop_box_mail_1">
            <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">LETTER UPDATE </a></div>
                  <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                      <form name="mctoeb" action="attendancemaileb3.php" method="post" accept-charset="utf-8">
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
                                    <b> Reply to a letter</b>
                              <form name="replyletter" action="attendancemaileb3.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                             
                              <label>Letter ID:</label>
                               <?php  
                                  $a=mysqli_query($conn,"select letter.letter_id from letter where mceb is NOT NULL and eb ='".$_SESSION['ebno']."' and letter.letter_id not in(select letter_rep.letter_id from letter_rep)");
                                  if(mysqli_num_rows($a)>0){
                                  $select2= '<select name="idrep">';
                                  while($r=mysqli_fetch_array($a)){
                                 
                                  $select2.='<option value="' .$r[0]. '">'.$r[0].'</option>';
                                   }
                                  }
                                  else{
                                    $select2='<select><option></option></select>';
                                  }
                                  echo $select2;
                                  echo '</select>'?><br>
                              <input type="date" name="repdate" placeholder="Date replied" required><br>
                              <input type="text" name="subject" placeholder="subject of the letter"><br>
                              <input type="radio" name="type" value="Normal letter" checked>Normal Letter
                              <input type="radio" name="type" value="Registered letter">Registered Letter
                              <input type="radio" name="type" value="Fax">Fax
                              <input type="radio" name="type" value="Other">Other<br>
                              <input type="text" name="addr" placeholder="Address/ Fax number" required><br>
                              <input type="file" name="myimage" id="fileToUpload"><br>
                              <input type="submit" name="submit2" value="Enter letter">
                              <input type="reset" name="reset2" value="Reset">
                              </form>

                            <?php
                            if(isset($_POST["submit2"])){
                              if(isset($_POST['idrep'])){
                                    $idrep=$_POST['idrep'];
                                    $filename = $_FILES['myimage']['name'];
                                    $filetype = $_FILES['myimage']['type'];
                                    $filesize = $_FILES['myimage']['size']; 
                                    if($filename==''){
                                      $folder='';
                                      $newfilename='';
                                    }
                                    else{                          
                                      $folder="letterreplies/";
                                      $temp= explode(".", $filename);
                                      $newfilename=$idrep.'reply.'.end($temp);
                                    }
                                    if($_POST['subject']==''){
                                    $subject="No subject entered";
                                    }
                                    else{
                                    $subject=$_POST['subject'];
                                        }
                                      $date=$_POST['repdate'];                                    
                                      $type=$_POST['type'];
                                      $addr=($_POST['addr']); 
                                      $user=$_SESSION['username'];

                                      $sql="INSERT INTO letter_rep (date,subject,type,address,letter_id,user,folder,file) VALUES ('$date','$subject','$type','$addr','$idrep','$user','$folder','$newfilename')";
                              move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$newfilename);        
                              mysqli_query($conn,$sql);
                              $message= $idrep. " was entered";
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
            
            <div id="pop_box_att_2">
                  <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">LEAVE </a></div>
                  <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                                    <?php  include 'leave/paraLeave.php' ?> 
                  </div>
            </div>
            <div id="pop_box_report_1">
                  <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">EMPLOYEE DETAILS </a></div>
                  <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                                   <?php  include 'hrreport.php' ?> 
                  </div>
            </div>
            <div id="pop_box_att_1">
                  <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">ATTENDANCE </a></div>
                  <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                                    <?php  include 'attendence/para.php'; ?>  
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
            $('#open_att_2').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_att_2').fadeIn();
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
                $('#pop_box_att_2').fadeOut();
                $('#pop_box_report_1').fadeOut();
 
                return false;
            });
         });
        </script>
 </body>
 </html>
