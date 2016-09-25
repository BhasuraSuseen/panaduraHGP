<!DOCTYPE html>
<html>
<head>
	<title>Mail Clerk Home</title>
</head>

<body>
<div>
<h1>HOMS</h1>
</div>
<div>
<a href="../login.php"><button class="button">Log Out</button></a>
</div>
<div style="float: left; align-content: left;"><b>New Letter Details</b>
	<!--entering details of letters into databse for the first time -->
	<form name="new_letter" action="mailclerk.php" method="post" accept-charset="utf-8">
	<input type="number" name="let_id" placeholder="Letter ID" required><br>
	<input type="date" name="fdate" placeholder="Date received" required><br>
	<input type="text" name="sub" placeholder="Subject"><br>
	<input type="text" name="address" placeholder="Address"><br>
	<input type="radio" name="lettype" value="Post Card" required>Post Card
	<input type="radio" name="lettype" value="Normal Letter" required>Normal Letter
	<input type="radio" name="lettype" value="Registered Post" required>Registered Post
	<input type="radio" name="lettype" value="Other" required>Other<br>
	<input type="submit" value="Add new letter" name="submit">
	<input type="reset" value="Reset">
	</form>
</div>
<div style="float: right;"><b>Enter MC to MS date</b>
	<form name="mctoms" action="mailclerk.php" method="post" accept-charset="utf-8">
		  <?php  
      require "../connect.php";
			$abc=mysqli_query($conn,"select letter_id from letter where mcms is NULL");
      if(mysqli_num_rows($abc)>0){
      $select= '<select name="select">';
      while($rs=mysqli_fetch_array($abc)){
     
      $select.='<option name="nic" value="' .$rs[0]. '">'.$rs[0].'</option>';
       }
      }
      
      echo $select;
      echo '</select>'?>
      <input type="date" name="datemcms" placeholder="Date sent to MS" required>
      <input type="submit" name="submitt" value="Enter Date">
      <input type="reset" name="reset" value="Reset">

	</form>
	<!--methana enter karanne AO to MC date -->
	<b>Enter AO to MC date</b>
	<form name="mctoms" action="mailclerk.php" method="post" accept-charset="utf-8">
		  <?php  
     
			$ab=mysqli_query($conn,"select letter_id from letter where NOT(mcms is NULL or msao is NULL) and aomc is NULL");
      if(mysqli_num_rows($ab)>0){
      $select= '<select name="select">';
      while($rd=mysqli_fetch_array($ab)){
     
      $select.='<option name="nic" value="' .$rd[0]. '">'.$rd[0].'</option>';
       }
      }
      
      echo $select;
      echo '</select>'?>
      <input type="date" name="dateaomc" placeholder="Date from to AO" required>
      <input type="submit" name="submittt" value="Enter Date">
      <input type="reset" name="reset" value="Reset">

	</form>
</div>
</body>
</html>