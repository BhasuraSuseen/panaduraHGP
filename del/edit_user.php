<?php
require "../connect.php";
session_start();
if(isset($_GET['id'])){
	$_SESSION['id'] = $_GET['id'];
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit users</title>
<link rel="stylesheet" type="text/css" href="../styles/global.css" />
<link rel="stylesheet" type="text/css" href="edit.css" />
<script language="javascript" src="edit.js" type="text/javascript"></script>

</head>
<body>

 <div class="middle_top">
             <div class="middle_top_left">
                <a href="../sysadmin.php"><img src="../images/oms4.png"  style= "padding: 5px;"></a>
              </div>
             <div class="middle_top_middle">
              </div>
</div>
 <div class="main">
      <div class="one">
        <div class="register">
          <h3>Edit User <?php echo $_SESSION['id']; ?></h3>
          <form id="usernameform" name="edit_username" action="edit_user.php" method="post" accept-charset="utf-8" onsubmit="return checkForm(this);">
           <a id="displayText" href="javascript:toggle();">Change username</a> 
           <div id="toggleText" style="display: none">
            <div>
             
              <input type="text" id="username" spellcheck="false" placeholder="New username" name="user_name" required />
            </div>
           
           
            <div>
              <br>
              <input type="submit" value="Update username" id="create-account" class="button" name="submit" style="width:12em;" />
            </div>
             </div>
          </form>
        
		     <form id="passwordform" name="edit_user" action="edit_user.php" method="post" accept-charset="utf-8" onsubmit="return checkpass(this);">
           <a id="displayText1" href="javascript:toggle1();">Change password</a> 
           <div id="toggleText1" style="display: none">
             <div>
              
              <input type="password" id="password" placeholder="New password" name="password" required />
            </div>
            <div>
             
              <input type="password" id="password-again" placeholder="Confirm new password" name="passwordc" required />
            </div>
           
           
            <div>
              <br>
              <input type="submit" value="Update password" id="create-account" class="button" name="submit1" style="width:12em;"/>
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
$usernamecheck="SELECT * from users where USERNAME='$un' AND NIC_NO !='$id'";
$result1=mysqli_query($conn,$usernamecheck);
if(mysqli_num_rows($result1)>=1){
	
  	 $message = $un." is already taken";
  echo "<script type='text/javascript'>alert('$message');</script>";	
 }
 else{
$sql="UPDATE users SET USERNAME='$un' WHERE NIC_NO='$id'";

mysqli_query($conn,$sql);
 $message = $un." updated successfully";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
}

if(isset($_POST["submit1"])){

$pass=hash('sha256',$_POST['password']);

$id=$_SESSION['id'];

$sql="UPDATE users SET PASSWORD='$pass' WHERE NIC_NO='$id'";
mysqli_query($conn,$sql);
echo '<script language="javascript">';
echo 'alert("Password updated successfully")';
echo '</script>';	

}
?>
</html>