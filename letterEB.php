<!DOCTYPE html>
<html>
<head>
<title>Letter EB</title>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="del/styles.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script  src="http://d3js.org/d3.v3.min.js"></script>
<script src="scripts/prio1script.js"></script>
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
</head>
<body> 

	<div class="all_container">
		  <div class="left_side_bar">
          <div class="left_side_bar_top">                   
          </div>
          <div class="left_side_bar_down">
              <ul id="nav">
                  <li  id="open_mail_1" title="Update Letter Details"  class="letter_panel_list">  
				   <i> <img src="images/web.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;">
                   </i>
			       </li>
			        <li  id="open_mail_2" title="Reply to letters" class="letter_panel_list">  
				   <i> <img src="images/mailrep.ico" style="width:80%;height:auto; opacity: 0.6; padding: 5px;">
                   </i>
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
                    
                   
          <div id="middle_leftp1">
  <div class="current-flow-left" style="float: left; width:65%;">
  <div class="search-letters" style="width:100%; min-height: 80px; margin: 10px; margin-left: 20px;  background: #fff;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div style="width: 100%; background-color: #2980b9;"><a style=" font-size: 16px; color: #fff; padding: 10px;">SEARCH LETTER</a></div>
	
      <input type="text" id="search-box"  placeholder=" Select by letter ID" style="float: left;width:30%; margin: 10px; background:#fff;"/>
      <input type="text" id="search-box1" placeholder=" Select by Subject" style="float: left;width:30%; margin: 10px;background:#fff;"/>
      <input type="text" id="search-box2" placeholder=" Select by Address" style="float: left;width:30%; margin: 10px;background:#fff;" />

		<div id="suggesstion-box" style="width: 100%; "></div>
  
</div>
  <div class="current-flow" style="width:100%; margin:10px; margin-left: 20px; margin-top:20px;background: #fff;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">CURRENT FLOW</a></div>
    <div id ="svgcontent" style="width:100%; overflow:auto;"></div>
  </div>
</div>
			 <?php
                
                $recentletter=mysqli_query($conn,"select max(letter_id) from letter");
                $rslt=mysqli_fetch_array($recentletter);
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
            <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> LETTER CREATE / UPDATE </a></div>
                <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 

                        <b>New Letter Details</b>
                        <!--entering details of letters into databse for the first time -->
                        <form name="new_letter" action="letterEB.php" method="post" accept-charset="utf-8">
                        <!--input type="number" name="let_id" placeholder="Letter ID" required--><!--br-->
                        <input type="date" name="fdate" placeholder="Date received" required>
                        <input type="text" name="address" placeholder="Address">
                        <input type="radio" name="lettype" value="Post Card" required>Post Card
                        <input type="radio" name="lettype" value="Normal Letter" required>Normal Letter
                        <input type="radio" name="lettype" value="Registered Post" required>Registered Post
                        <input type="radio" name="lettype" value="Other" required>Other<br>
                        <input type="submit" value="Add new letter" name="submit">
                        <input type="reset" value="Reset">
                        <!--input type="submit" value="Last letter ID" name="submit1"-->
                        </form>
                        <br>
                        <b>Enter Letter Clerk to Medical Supirintendantad date</b>
                        <form name="mctoms" action="letterEB.php" method="post" accept-charset="utf-8">
                              <label>Letter ID</label>
                          <?php  
                          
                                $abc=mysqli_query($conn,"select letter_id from letter where mcms is NULL");
                          if(mysqli_num_rows($abc)>0){
                          $select= '<select name="lid2">';
                          while($rs=mysqli_fetch_array($abc)){
                         
                          $select.='<option value="' .$rs[0]. '">'.$rs[0].'</option>';
                           }
                          }
                          else{
                          $select='<select><option></option></select>';
                            }
                          echo $select;
                          echo '</select>'?>
                          <input type="date" name="datemcms" placeholder="Date sent to MS" required>
                          <input type="submit" name="submitt" value="Enter Date">
                          <input type="reset" name="reset" value="Reset">
                          	<br><br>
                        </form>

                        <!--methana enter karanne AO to MC date -->
                        <b>Enter AO to MC date</b>
                        <form name="mctoms" action="letterEB.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"> 
                        <label>Letter ID</label>
                         <?php  
     
                                $ab=mysqli_query($conn,"select letter_id from letter where aomc is NULL and msao IS NOT NULL");
                         
                          if(mysqli_num_rows($ab)>0){
                          $select1= '<select name="lid1">';
                          while($rd=mysqli_fetch_array($ab)){
                         
                          $select1.='<option value="' .$rd[0]. '">'.$rd[0].'</option>';
                           
                          }
                          }
                          else{
                            $select1='<select><option></option></select>';
                          }
                          echo $select1;
                          echo '</select>';?>
                          <label>Forward to EB NO.</label>
                          <select name="eb" >
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          </select>
                          <input type="date" name="dateaomc" placeholder="Date from AO" required>
                          <input type="text" name="sub" placeholder="Subject">
                          <input type="text" name="reci" placeholder="Recipient">
                          <input type="file" name="myimage" id="fileToUpload"><br>
                          <input type="submit" name="submittt" value="Enter details">
                          <input type="reset" name="reset" value="Reset">
                        </form>
                        	<br>
                        <form name="mctoeb" action="letterEB.php" method="post" accept-charset="utf-8">
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
						      <input type="submit" name="submitttt" value="Enter Date">
						      <input type="reset" name="reset" value="Reset">
						  </form>
                        <?php
                   
                        	if(isset($_POST["submit"])){
                            $date= $_POST['fdate'];
                            $type=$_POST['lettype'];
                            $addr=$_POST['address'];
                         
                                $sql="INSERT INTO letter (date, address,type) VALUES ('$date', '$addr','$type')";
                           		$newid="SELECT letter_id FROM letter ORDER BY letter_id DESC LIMIT 1";
                                mysqli_query($conn,$sql);
                               	$newidd=mysqli_query($conn,$newid);
                               	$newiddd=mysqli_fetch_array($newidd);
                                 $message3="New letter entered \\nLetter id:".$newiddd[0];
                                 echo $newiddd[0];
                                 echo $sql;
                               echo  "<script type='text/javascript'>alert('$message3');</script>";
                       	}
                            
                 
                         /*ao to mc date and subject enter form */
      if(isset($_POST["submittt"])){
        	if(isset($_POST['lid1'])){
        		$lid1=$_POST['lid1'];
                $filename = $_FILES["myimage"]["name"];
		        $filetype = $_FILES["myimage"]["type"];
		        $filesize = $_FILES["myimage"]["size"]; 
		        if($filename==''){
		        	$folder='';
		        	$newfilename='';
		        }
		        else{                          
				$folder="lettercopies/";
				$temp= explode(".", $filename);
				$newfilename=$lid1.'.'.end($temp);
				}
				
				if($_POST['sub']==''){
               		 $sub="No subject entered";
            	}
                else{
                	$sub=$_POST['sub'];
                }
                if($_POST['reci']==''){
                	$reci="No recipient entered";	
                }
                else{
                	$reci=$_POST['reci'];
                }
                $dateaomc=$_POST['dateaomc'];
                $eb=$_POST['eb'];
                $sql2="UPDATE letter SET subject ='$sub',recipient='$reci',aomc='$dateaomc',eb='$eb',path='$folder',imgname='$newfilename'  WHERE letter_id='$lid1'";
                move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$newfilename);
                mysqli_query($conn,$sql2);
                 $message1= $lid1. " was forwarded";
                 echo  "<script type='text/javascript'>alert('$message1');</script>";
	               
	           	
              	}
	         else{
	             $message1= "No letters to forward";
	             echo  "<script type='text/javascript'>alert('$message1');</script>";
	          	 }

        }


                      /*mc to ms date enter form */
                          if(isset($_POST["submitt"])){
                            if(isset($_POST['lid2'])){
                        $lid2=$_POST['lid2'];
                        $datemcms=$_POST['datemcms'];
                        $sql3="UPDATE letter SET mcms='$datemcms'WHERE letter_id='$lid2'";
                        mysqli_query($conn,$sql3);
                         $message= $lid2. " was forwarded";
                        echo  "<script type='text/javascript'>alert('$message');</script>";
                        }
                        else{
                           $message= "No letters to forward";
                            echo  "<script type='text/javascript'>alert('$message');</script>";
                        }
                         } 
                        ?>
                          <?php
						   if(isset($_POST["submitttt"])){
                if(isset($_POST['lid'])){

						$lid=$_POST['lid'];
						$datemceb=$_POST['datemceb'];

						$sql="UPDATE letter SET mceb='$datemceb' WHERE letter_id='$lid'";
						mysqli_query($conn,$sql);
						 $message2= $lid. " was entered";
             echo  "<script type='text/javascript'>alert('$message2');</script>";
						}
            else{
               $message2="No letters to forward";
              echo  "<script type='text/javascript'>alert('$message2');</script>";
            }
          }
						?>
            </div>
	</div>
  </div>
  <div id="pop_box_mail_2" >
            <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> LETTER REPLY </a></div>
                <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                 <b> Reply to a letter</b>
                              <form name="replyletter" action="sysadmin.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                             
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
     
        <script>
         $(document).ready(function(){
            $('#open_mail_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_hr_1').fadeIn();
                return false;
            });
            $('#open_mail_2').click(function(){
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
