<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
  <link rel="stylesheet" type="text/css" href="del/styles.css" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="attendence/jst.js"></script>
	<script  src="http://d3js.org/d3.v3.min.js"></script>
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
<?php 
require "connect.php";
			   		 session_start();
             if($_SESSION['username']==''){
            header("Location:  index.php");
          }
            ?>
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
					 <li id="open_att_1" title="Establishment Branch Attendence Record" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/check.png" style="width:80%;height:auto;opacity: 0.6; padding: 5px;"></i>
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
			
			
            <div id="middle_left" >
		 
               <!-- <a href="attendence/ebatt.php"> Post box and news feed</a><br>
		<a href="attendence/eb.php"> Post box and news feed</a><br>
		<a href="letter_flow_graph.php"> vertical timeline</a>
			 
		<iframe src="vertical-timeline/timeline.php" style="float: left; width:100%;height:500px; padding: 5px; overflow: hidden;"></iframe>
		-->


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
	
	</div>
         <div id="pop_background"></div>
         <div id="pop_box_mail_2">
          
         <div style="width: 100%; background-color: #2980b9;"><a style=" font-size: 16px; color: #fff; padding: 10px;"> DELETE / EDIT USER PROFILE</a></div>  
         <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">  
                <?php include "del/list_user.php"  ?>       
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
            <tr><td>User Type</td><td><input type="radio" name="usertype" value="SA" onclick="myFunction()"> System Administrator<br>
              <input type="radio" name="usertype" value="DIR" onclick="myFunction()" required> Director<br><input type="radio" name="usertype" value="AO" onclick="myFunction()"> Admin Officer<br>
                <input type="radio" name="usertype" value="MC" required onclick="myFunction()"> Mail Clerk<br><input type="radio" name="usertype" value="AB" onclick="myFunction1()"> Attendance EB<br>
                <input type="radio" name="usertype" value="DC" required onclick="myFunction()"> Diet Clerk<br><input type="radio" name="usertype" value="NB" onclick="myFunction()">Normal Mail EB</td></tr>
              <tr><td>EB type</td><td> <select id="myText" name="ebno">
                <option name="ebno" value="5">Type 1</option>
                  <option name="ebno" value="6">Type 2</option>
                  <option name="ebno" value="7">Type 3</option>
                <option name="ebno" value="8">Type 4</option>
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
     			
          
  
	<div id="pop_box_hr_2">
  
  <div style="width: 100%; background-color: #2980b9;"><a style=" font-size: 16px; color: #fff; padding: 10px;"> RECORD EMPLOYEE DETALIS</a></div>
		<div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">  
                 <form action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
                    <input type="text" name="nic" placeholder="NIC NO ">
                    Select Employee photo to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
                <iframe class="iframe1" name="iframe"></iframe>
                
                <form action="hr.php" method="post" target="iframehr">
                    <input type="text" name="fname" placeholder="First Name">
                    <input type="text" name="lname" placeholder="Last Name">
                    Birth Date
                    <input type="date" name="bdate" placeholder="Birth Date yyyy-mm-dd">
                    <input type="text" name="address" placeholder="Address">
                    <input type="int" name="cnumber" placeholder="Contact NO">
                    <input type="text" name="gender" placeholder="Gender M/F">
                    <input type="text" name="nic" placeholder="NIC NO ">
                    
                    <input type="text" name="etype" placeholder="Employee type">
                    
             
                    First Employment Date
                    <input type="Date" name="fedate" placeholder="FE Date ">
                    Employment Commencement Date
                    <input type="Date" name="ecdate" placeholder="EC Date ">
                    Socond Grade Promotion Date
                    <input type="Date" name="sgpdate" placeholder="SGP Date ">
                    First Grade Promotion Date
                    <input type="Date" name="fgpdate" placeholder="FGP Date ">
                    Special Grade Promotion Date
                    <input type="Date" name="cgpdate" placeholder="CGP Date ">
                    <input type="number" name="salary" placeholder="Salary"> 
                    Salary Incremental Date
                    <input type="Date" name="sidate" placeholder="SI Date ">
                    <input type="text" name="remarks" placeholder="Remarks">
                    
                                       
                    <input type="submit" value="Save" name = "submit">
                </form>
                <iframe class="iframehr" name="iframehr"></iframe>

			<!--?php include 'employee_hr/hr.php'; ?-->
 	    
      </div>
      </div>
	</div>
	 <div id="pop_box_mail_1">
          
        <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px; "> LETTER UPDATE</a></div>
        <div style="width:100%;background: #fff;padding: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <form name="mctoeb" action="#" method="post" accept-charset="utf-8">
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
     	<div id="pop_box_att_1">
      
      <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> RECORD ATTENDANCE / LEAVE </a></div>
      <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
	  	<?php include 'attendence/eb.php'; ?>	
      </div>		
 	</div>

    
        <script>
         $(document).ready(function(){
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
            $('#pop_background').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box_hr_1').fadeOut();
                $('#pop_box_att_1').fadeOut();
		            $('#pop_box_hr_2').fadeOut();
		    $('#pop_box_mail_1').fadeOut();
        $('#pop_box_mail_2').fadeOut();
 
                return false;
            });
         });
     </script>
	
 </body>
 </html>
