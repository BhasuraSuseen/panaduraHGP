<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	
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
<div>
<h1>HOMS</h1>
</div>
<div>
<a href="../login.php"><button class="button">Log Out</button></a>
<a href="../homs_home.php"><button class="button">Home</button></a>
</div>
<div id="log">

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
      require "../connect.php";
       session_start(); 
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
      echo '</select>'?></td></tr>
			<tr><td>User Type</td><td><input type="radio" name="usertype" value="SA" onclick="myFunction()"> System Administrator
  			<input type="radio" name="usertype" value="DIR" onclick="myFunction()" required> Director<input type="radio" name="usertype" value="AO" onclick="myFunction()"> Admin Officer
        <input type="radio" name="usertype" value="MC" required onclick="myFunction()"> Mail Clerk<input type="radio" name="usertype" value="MB" onclick="myFunction1()"> Mail EB
        <input type="radio" name="usertype" value="DC" required onclick="myFunction()"> Diet CLerk<input type="radio" name="usertype" value="HB" onclick="myFunction()"> HR EB</td></tr>
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

<div style="text-align:center;">
<?php



 

$sql = "SELECT USERNAME,ADMIN,NIC_NO FROM users WHERE USERNAME!='asd'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table width=100%><tr><th>User Name</th>
	<th>Administrator</th><th>NIC</th><th></th><th></th></tr>";
   
	while($row = mysqli_fetch_assoc($result)) {
		
        echo "<tr><td>".$row["USERNAME"]."</td><td>" . $row["ADMIN"]. "</td><td>" . $row["NIC_NO"]."</td><td><input type='submit' value='Update' name='submit'></td><td><input type='submit' value='Delete' name='submit'></td></tr>" ;
		
	
	}

}
 echo"</table>";
 ?>
</div>
<?php
 if(isset($_POST["submit"])){
 	 
   if(isset($_POST['ebno'])){
    $ebno = $_POST['ebno']; 
 
   }

  
  else{
    if ($_POST['usertype']=="HB") {
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

mysqli_close($conn);
?>
</div>
</body>
</html>