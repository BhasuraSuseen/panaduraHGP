<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="vertical-timeline/js/modernizr.js"></script> <!-- Modernizr -->
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
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
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
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
</head>
<body>
<?php 
require "connect.php";
			   		 session_start();?>
	<div class="all_container">
		<div class="left_side_bar" >
            		<div class="left_side_bar_top">                   
            		</div>
            		<div class="left_side_bar_down" >
                		<ul id="nav">
					<li class="admin_panel_list" style="border-left: 4px solid #455A64;">
						<i> <img src="images/users.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>                               
					</li>
					<li id="open_hr_1" style="border-left: 4px solid #455A64;"> 
						<i> <img src="images/businessman-1.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i> 
					</li>
					<li id="open_mail_1" style="border-left: 4px solid #c62828;">  
						<i> <img src="images/web.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_att_1" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/check.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_hr_2" style="border-left: 4px solid #2980b9;">  
						<i> <img src="images/businessman.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
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
			   		 
			   		echo"<a><spanuser>".$_SESSION['username']."</spanuser></a>";
			   			 ?>
				  
				  <a href="index.php"><button class="button">Log Out</button></a>
			   </div>
		    </div>
			
			
            <div class="middle_left" >
		
                <a href="attendence/ebatt.php"> Post box and news feed</a><br>
		<a href="attendence/eb.php"> Post box and news feed</a><br>
		<a href="letter_flow_graph.php"> vertical timeline</a>
			 
		<!--<iframe src="vertical-timeline/timeline.php" style="float: left; width:100%;height:500px; padding: 5px; overflow: hidden;"></iframe>
		-->
            </div>
            <div class="middle_right">
            
            </div>
		</div>
		<div class="right_side_bar" id="open_att_1">
			
           
            
        </div>
	
	
         <div id="pop_background"></div>
     		<div id="pop_box_hr_1">
				  <form name="new_user" action="sysadmin.php" method="post" accept-charset="utf-8" onsubmit="return checkForm(this);">
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

			      echo $select;
			      echo '</select>';
			?>
						</td></tr>
						<tr><td>User Type</td><td><input type="radio" name="usertype" value="SA" onclick="myFunction()"> System Administrator
  						<input type="radio" name="usertype" value="DIR" onclick="myFunction()" required> Director<input type="radio" name="usertype" value="AO" onclick="myFunction()"> Admin Officer
        				<input type="radio" name="usertype" value="MC" required onclick="myFunction()"> Mail Clerk<input type="radio" name="usertype" value="AB" onclick="myFunction1()"> Attendance EB
       					<input type="radio" name="usertype" value="DC" required onclick="myFunction()"> Diet Clerk<input type="radio" name="usertype" value="NB" onclick="myFunction()">Normal Mail EB</td></tr>
     					<tr><td>EB type</td><td> <select id="myText" name="ebno">
         				<option name="ebno" value="5">Type 1</option>
          				<option name="ebno" value="6">Type 2</option>
          				<option name="ebno" value="7">Type 3</option>
         				<option name="ebno" value="8">Type 4</option>
      					</select>  </td></tr>

						<tr><td colspan=2 align="center">
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
	<?php
	if(isset($_POST["submit"])){
 	 
   if(isset($_POST['ebno'])){
    $ebno = $_POST['ebno']; 
 
   }

  
  else{
    if ($_POST['usertype']=="NB") {
         $ebno =4;
       }
   elseif ($_POST['usertype']=="SA") {
        $ebno = 1;
        }
   elseif ($_POST['usertype']=="MC") {
        $ebno = 2;
     
   }
    elseif ($_POST['usertype']=="DC") {
        $ebno = 3;
   
   }
   else{
        $ebno = 0;
   }
  }
   $user = $_POST['user_name'];
   $id = $_POST['nic']; 
 	 $pass = md5($_POST['password']);
 	 $admin = $_POST['usertype'];
 	 $passc = md5($_POST['passwordc']);
 	 if ($pass == $passc){
 	 /*checking if the user name is taken */
  $usernamecheck="select * from users where USERNAME='$user'";
  $result1=mysqli_query($conn,$usernamecheck);
if(mysqli_num_rows($result1)>=1){
   echo $user." is already taken";
  		
 }
 else{
 	/*checking if the user is in the database*/
 		$idcheck="select * from employee where NIC_NO='$id'";
   		$result2=mysqli_query($conn,$idcheck);
   		if(mysqli_num_rows($result2)>=1){
   			/*checking if the user has an account already*/
  				$idcheck2="select * from users where NIC_NO='$id'";
  				$result3=mysqli_query($conn,$idcheck2);
  				if(mysqli_num_rows($result3)>=1){
   				echo $user." has an account already";}
   				else{
   					$sql1="INSERT INTO users (USERNAME,PASSWORD,ADMIN,NIC_NO,EB) VALUES ('$user','$pass','$admin','$id','$ebno')";
   					mysqli_query($conn,$sql1);
   					echo $user . "was entered successfully";
   				}
   		}		
   		else{echo "Please enter a valid Employee ID number";}
		 
		 
 }
}
else{echo "passwords do not match";}
}

?>
     			</div>
	<div id="pop_box_hr_2">
		<a href="#"> pop box hr2</a>
		<div id="pop_box_hr_data_record_left">
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
                    
             </div>
             <div id="pop_box_hr_data_record_right">
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
	
     	<div id="pop_box_att_1">
	  	<?php include 'attendence/eb.php'; ?>			
 	</div>
	
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
