<?php
require "../connect.php";
$id = $_GET['id'];

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
          <h3>Edit User <?php echo $id; ?></h3>
          <form id="reg-form" name="edit_user" action="" method="post" accept-charset="utf-8" onsubmit="return checkForm(this);">
           
           
            <div>
             
              <input type="text" id="username" spellcheck="false" placeholder="New username" name="user_name"/>
            </div>
            <div>
              
              <input type="password" id="password" placeholder="New password" name="password"/>
            </div>
            <div>
             
              <input type="password" id="password-again" placeholder="Confirm new password" name="passwordc" />
            </div>
            <div>
              <br>
              <input type="submit" value="Update user" id="create-account" class="button"/>
            </div>
          </form>
        
          </div>
        </div>
      </div>
    
</body>
</html>