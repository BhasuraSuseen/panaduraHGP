<!DOCTYPE html>
<html>
<head>
<?php 
require "connect.php";
             session_start();
             if($_SESSION['admin']!='SA'){
            header("Location:  index.php");
          }
            ?>
<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
  <link rel="stylesheet" type="text/css" href="del/styles.css" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
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
  <script src="http://d3js.org/d3.v3.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="scripts/prio2script.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="attendence/jst.js"></script>
	<script type="text/javascript">

  function checkForm(form)
  {
    if(form.user_name.value == "") {
      alert("Error: Username cannot be blank!");
      form.user_name.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.user_name.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.user_name.focus();
      return false;
    }

    if(form.password.value != "" && form.password.value == form.passwordc.value) {
      if(form.password.value.length < 8) {
        alert("Error: Password must contain at least eight characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.user_name.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }

    alert(form.user_name.value + " was entered successfully");
    return true;
  }

</script>
<title>System Administrator</title>
</head>
<body>

	<div class="all_container">
		<div class="left_side_bar" >
            		<div class="left_side_bar_top">
				      
            		</div>
            		<div class="left_side_bar_down" >
                		<ul id="nav">
					<li id="admin_panel_list" title="System User Update" style="border-left: 4px solid #455A64;">
						<i> <img src="images/users.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>                               
					</li>
					<a style="margin-top: -10px;"></a>
					<li id="open_hr_1" title="Add New System User" style="border-left: 4px solid #455A64;"> 
						<i> <img src="images/businessman-1.png" style="width:80%;height:auto;opacity: 0.6;padding: 5px;"></i> 
					</li>
					<li id="open_mail_1" title="Update Letter Details" style="border-left: 4px solid #c62828;">  
						<i> <img src="images/web.png" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
					</li>
          <li id="open_mail_3" title="Reply to letters" style="border-left: 4px solid #c62828;">  
            <i> <img src="images/mailrep.ico" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
          </li>
					 <li id="open_att_1" title="Establishment Branch Attendence Record" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/check.png" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
					</li>
           <li id="open_att_2" title="Establishment Branch Attendence Record" style="border-left: 4px solid #2980b9;">  
            <i> <img src="images/leave.png" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
          </li>
					 <li id="open_hr_2" title="Add New Employee" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/photo.png" style="width:80%;height:auto;opacity: 0.6;padding: 5px;"></i>
					</li>
           <li id="open_hr_3" title="View and Edit Employee Details" style="border-left: 4px solid #2980b9;">  
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
			   		<?php
			   		 
			   		echo"<a>".$_SESSION['username']."</a>";
			   			 ?><br>
				  
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
                  <div id ="lettercontent" style="width:100%; padding: 20px; overflow:auto;"></div>
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
	
            <div class="middle_right">
            
            </div>
		</div>
	<div class="right_side_bar"> 
               <div class="right_side_bar_top">                   
          </div>
          <div class="right_side_bar_down">
              <ul id="nav">
                 <li id="open_report_1" title="Employee Details" style="border-right: 4px solid #2980b9;"> 

            <i> <img src="images/businessman-7.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
          </li>
          
              </ul>
          </div> 
            </div>
	
	</div>
         <div id="pop_background"></div>
         <div id="pop_box_report_1">
      
                <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> EMPLOYEE DETAILS </a></div>
                <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                  <?php include 'hrreport.php'?>
                </div>    
        </div>
         <div id="pop_box_mail_2">
      
          
               <div style="width: 100%; background-color: #2980b9;"><a style=" font-size: 16px; color: #fff; padding: 10px;"> DELETE / EDIT USER PROFILE</a></div>  
               <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">  
                      <?php include "del/list_user.php"  ?>       
               </div>
         </div>
         <div id="pop_box_hr_3" style ="width:90%">
                <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> UPDATE EMPLOYEE DETAILS </a></div>
                <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                   <?php include 'hrupdate.php' ?>
                </div>    
        </div>
     		<div id="pop_box_hr_1">
        
        <div style="width: 100%; background-color: #2980b9;"><a style=" font-size: 16px; color: #fff; padding: 10px;"> CREATE SYSTEM USER</a></div>
        <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
	 <form name="new_user" action="newuser.php" method="post" accept-charset="utf-8" onsubmit="return checkForm(this);">
            <table>
            <thead>
            <tr>
            <th colspan=2>Enter New User Details </th></thead>
            </tr>
            <tr><td>User Name</td><td> 
            <input type="text" name="user_name" size="20" required></td></tr>
            <tr><td>Password</td><td> 
            <input type="password" name="password" size="20" required></td></tr>
            <tr><td>Confirm Password</td><td> 
            <input type="password" name="passwordc" size="20" required></td></tr>
            <tr><td>NIC</td><td>
            <?php  
            
          $abc=mysqli_query($conn,"select employee.NIC_NO from employee where employee.NIC_NO not in(select employee.NIC_NO from employee inner join users on employee.NIC_NO=users.NIC_NO)");
            if(mysqli_num_rows($abc)>0){
            $select= '<select name="nic">';
            while($rs=mysqli_fetch_array($abc)){

            $select.='<option value="' .$rs[0]. '">'.$rs[0].'</option>';
             }
            }
              else{
                            $select='<select><option></option></select>';
                          }

            echo $select;
            echo '</select>';
       
      ?>
            </td></tr>
            <tr><td style="vertical-align:top;">User Type</td><td><input type="radio" name="usertype" value="SA" onclick="myFunction()"> System Administrator<br>
              <input type="radio" name="usertype" value="DIR" onclick="myFunction()" required> Director<br><input type="radio" name="usertype" value="AO" onclick="myFunction()"> Admin Officer<br>
                <input type="radio" name="usertype" value="MC" required onclick="myFunction()"> Mail Clerk<br><input type="radio" name="usertype" value="AB" onclick="myFunction1()"> Attendance EB<br>
                <input type="radio" name="usertype" value="DC" required onclick="myFunction()"> Diet Clerk<br><input type="radio" name="usertype" value="NB" onclick="myFunction()">Normal Mail EB</td></tr>
              <tr><td>EB type</td><td> <select id="myText" name="ebno">
                <option name="ebno" value="5">Doctor (EB5)</option>
                  <option name="ebno" value="6">Nurse (EB6)</option>
                  <option name="ebno" value="7">Para Medic (EB7)</option>
                <option name="ebno" value="8">Minor staff (EB8)</option>
                </select>  </td></tr>

            <tr><td colspan=2 align="center"><br>
            <input type="submit" value="Add new user" name="submit">
            <input type="reset" value="Reset"></td>
            </tr></table>
            </form>
   
<!--script to disable and enable eb type drop down menu -->
          <script>
          function myFunction() {
              document.getElementById("myText").disabled = true;
          }
          function myFunction1(){
            document.getElementById("myText").disabled = false;
          }
          </script>
          </thead>
          </div>
          </div>
     			
          
  
	<div id="pop_box_hr_2"> <!--popout of employee details recording-->
  
  
<div style="width: 100%; background-color: #2980b9;"><a style=" font-size: 16px; color: #fff; padding: 10px;"> RECORD EMPLOYEE DETAILS</a></div>
		<div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">  
                 <form action="sysadmin.php" method="post" enctype="multipart/form-data"> 
               

                    <table style="width: 90%"><tr>
                    
                            <td>First Name<br><input style="width: 100%" type="text" name="fname" required></td>
                            <td>Last Name<br><input style="width: 100%" type="text" name="lname" required></td>
                        </tr></table>
                    <table style="width: 90%"><tr>
                    Birth Date<br>
                    <td><input type="date" name="bdate" style="width: 30%" required></td>
                        </tr>
                    </table>
                    <table style="width: 90%">
                        <tr><td> Address
                                <input type="text" name="address" style="width: 100%" required></td></tr></table>
                        <table style="width: 90%">
                    <tr><td>NIC No<input type="text" name="nic" style="width: 100%" minlength="10" maxlength="10" required></td>
                            <td>Contact No<br><input type="number" name="cnumber"  style="width: 100%" min="0" max="9999999999" required></td>
                            <td>Gender <br><select type="text" name="gender"  style="width: 100%" required>
				    <option>Male</option>
				    <option>Female</option>
				    </select></td>
                    </tr></table>
                    Employee Type<br>
                    <select name="etype"> 
                    <option value="doctor">Doctor</option>
                    <option value="para">Para Medic</option>
                    <option value="nurce">Nurse</option>
                    <option value="minor">Minor Staff</option>
                    <option value="eb">Other Staff</option>
                    </select>
                    
                    <table style="width: 90%"><tr><td> <!-- table strating to record other details-->
                                First Employment Date<br>
                    <input type="Date" name="fedate" placeholder="FE Date " style="width: 100%" required></td>
                            <td>Employment Commencement Date<br>
                                <input type="Date" name="ecdate" style="width: 100%" required></td></tr>
                        <tr> <td>Second Grade Promotion Date<br>
                    <input type="Date" name="sgpdate" style="width: 100%" ></td>
                            <td> First Grade Promotion Date<br>
                                <input type="Date" name="fgpdate" style="width: 100%"></td></tr>
                        <tr><td>    Special Grade Promotion Date<br>
                                <input type="Date" name="cgpdate" style="width: 100%"></td>
                    <td>Salary<br>
                        <input type="number" name="salary" style="width: 100%"></td></tr> 
                        <tr><td>Salary Incremental Date<br>
                        <input type="Date" name="sidate" style="width: 100%"></td>
                    <td>Remarks<br><input type="text" name="remarks" style="width: 100%"></td>
                    </tr></table>
                                       
                    <input type="submit" value="Save" name="enter"> <!--button creation-->
                </form>

             <?php


              if(isset($_POST["enter"])){
                $nic=$_POST['nic'];
              
                  
              $sql = "INSERT INTO employee (NIC_NO, F_Name, L_Name, B_Date, Address, Contact_NO, Gender, E_Type, 
              FE_Date, EC_Date, FGP_Date, SGP_Date, CGP_Date, Salary, SI_Date, Remarks)
              VALUES ('{$_POST["nic"]}', '{$_POST["fname"]}', '{$_POST["lname"]}', '{$_POST["bdate"]}', '{$_POST["address"]}', '{$_POST["cnumber"]}', '{$_POST["gender"]}'
              , '{$_POST["etype"]}', '{$_POST["fedate"]}', '{$_POST["ecdate"]}', '{$_POST["fgpdate"]}', '{$_POST["sgpdate"]}', '{$_POST["cgpdate"]}', '{$_POST["salary"]}', '{$_POST["sidate"]}', '{$_POST["remarks"]}')";
              if (mysqli_query($conn, $sql)) {
                  $successmessage="New employee was entered";
                  echo  "<script type='text/javascript'>alert('$successmessage');</script>";
                 
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              }
        
              ?>
 	    
    </div>
	</div>
	 <div id="pop_box_mail_1">
          
        <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px; "> LETTER UPDATE</a></div>
        <div style="width:100%;background: #fff;padding: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <form name="mctoeb" action="#" method="post" accept-charset="utf-8">
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
          <input type="date" name="datemceb" placeholder="Date received from Letter EB" required><br>
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
         $message= $lid. " was forwarded";
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
  <div id="pop_box_mail_3">
                <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;">LETTER REPLY FORM </a></div>
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
      <div id="pop_box_att_2">
      
        <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> RECORD LEAVE</a></div>
        <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
        <?php  include 'leave/ebLeave.php'; ?> 
        </div>    
      </div>
  
     	<div id="pop_box_att_1">
      
      <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> RECORD ATTENDANCE</a></div>
      <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
	  	<?php include 'attendence/eb.php'; ?>	
      </div>		
 	</div>
  

    
        <script>
         $(document).ready(function(){
             $('#open_report_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_report_1').fadeIn();
                return false;
            });
            $('#admin_panel_list').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_mail_2').fadeIn();
                return false;
            });
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
            $('#open_att_2').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_att_2').fadeIn();
                return false;
            });
	         $('#open_hr_2').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_hr_2').fadeIn();
                return false;
            });
	          $('#open_mail_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_mail_1').fadeIn();
                return false;
            });
            $('#open_mail_3').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_mail_3').fadeIn();
                return false;
            });
            $('#open_hr_3').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_hr_3').fadeIn();
                return false;
            });
            $('#pop_background').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box_report_1').fadeOut();
                $('#pop_box_hr_1').fadeOut();
                $('#pop_box_att_1').fadeOut();
                $('#pop_box_att_2').fadeOut();
		            $('#pop_box_hr_2').fadeOut();
		            $('#pop_box_mail_1').fadeOut();
                $('#pop_box_mail_2').fadeOut();
                $('#pop_box_hr_3').fadeOut();
                $('#pop_box_mail_3').fadeOut();
 
                return false;
            });
         });
     </script>
	
 </body>
 </html>
