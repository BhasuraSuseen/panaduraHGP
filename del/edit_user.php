<?php
require "../connect.php";
session_start();
if(isset($_GET['id'])){
	$_SESSION['id'] = $_GET['id'];
	echo $_SESSION['id'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit users</title>
<link rel="stylesheet" type="text/css" href="edit.css" />
<script language="javascript" src="edit.js" type="text/javascript"></script>

</head>
<body>



 <div class="main">
      <div class="one">
        <div class="register">
          <h3>Edit User <?php echo $_SESSION['id']; ?></h3>
          <form id="usernameform" name="edit_username" action="edit_user.php" method="post" accept-charset="utf-8" >
           <a id="displayText" href="javascript:toggle();">Change username</a> 
           <div id="toggleText" style="display: none">
            <div>
             
              <input type="text" id="username" spellcheck="false" placeholder="New username" name="user_name"/>
            </div>
           
           
            <div>
              <br>
              <input type="submit" value="Update username" id="create-account" class="button" name="submit" />
            </div>
             </div>
          </form>
        
		     <form id="reg-form" name="edit_user" action="edit_user.php" method="post" accept-charset="utf-8" >
           <a id="displayText1" href="javascript:toggle1();">Change password</a> 
           <div id="toggleText1" style="display: none">
             <div>
              
              <input type="password" id="password" placeholder="New password" name="password"/>
            </div>
            <div>
             
              <input type="password" id="password-again" placeholder="Confirm new password" name="passwordc" />
            </div>
           
           
            <div>
              <br>
              <input type="submit" value="Update password" id="create-account" class="button" name="submit1" />
            </div>
             </div>
          </form>        
          </div>
        </div>
      </div>
    
</body>
<?php

if(isset($_POST["submit"])){

$un=$_POST['user_name'];
$id=$_SESSION['id'];
echo $id;
$usernamecheck="SELECT * from users where USERNAME='$un' AND NIC_NO !='$id'";
echo $usernamecheck;
$result1=mysqli_query($conn,$usernamecheck);
if(mysqli_num_rows($result1)>=1){
	echo "fuck";
  	 $message = $un." is already taken";
  echo "<script type='text/javascript'>alert('$message');</script>";	
 }
 else{
$sql="UPDATE users SET USERNAME='$un' WHERE NIC_NO='$id'";
echo $sql;
mysqli_query($conn,$sql);
 $message = $un." updated successfully";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
}

if(isset($_POST["submit1"])){

$pass=md5($_POST['password']);
$id=$_SESSION['id'];

$sql="UPDATE users SET PASSWORD='$pass' WHERE NIC_NO='$id'";
mysqli_query($conn,$sql);
echo '<script language="javascript">';
echo 'alert("Password updated successfully")';
echo '</script>';	

}
?>
</html>