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
     
      $select.='<option name="lid2" value="' .$rs[0]. '">'.$rs[0].'</option>';
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
     
			$ab=mysqli_query($conn,"select letter_id from letter where NOT(mcms is NULL or msao is NULL) AND aomc is NULL");
			echo mysqli_num_rows($ab);

      if(mysqli_num_rows($ab)==0){
      $select= '<select name="select">';
      while($rd=mysqli_fetch_array($ab)){
     
      $select.='<option name="lid1" value="' .$rd[0]. '">'.$rd[0].'</option>';
       
      }
      }
      echo $select;
      echo '</select>';?>
      <input type="date" name="dateaomc" placeholder="Date from to AO" required><br>
      <input type="text" name="sub" placeholder="Subject">
      <input type="submit" name="submittt" value="Enter Date">
      <input type="reset" name="reset" value="Reset">

	</form>

</div>
</body>
<?php
 if(isset($_POST["submit"])){
 	$id= $_POST['let_id'];
 	$date= $_POST['fdate'];
 	$type=$_POST['lettype'];
 	$addr=$_POST['address'];

 	/*check if the given id already exists*/
 	$letidheck="select * from letter where letter_id='$id'";
  	$result=mysqli_query($conn,$letidheck);
	if(mysqli_num_rows($result)>=1){
   	echo $id." is already taken";
  	}	
 	else{
 		$sql="INSERT INTO letter (letter_id,date,address,type) VALUES('$id','$date',$addr','$type')";
 		mysqli_query($conn,$sql);
 		echo $id . "was entered successfully";
 	}
 	
 }
 /*ac to mc date and subject enter form */
  if(isset($_POST["submittt"])){
$sub=$_POST['subject'];
$lid1=$_POST['lid1'];
$dateaomc=$_POST['dateaomc'];

$sql2="UPDATE letter SET subject ='$sub', aomc='$dateaomc' WHERE letter_id='$lid1'";
mysqli_query($conn,$sql2);
echo $lid1 . "was updated";


  }
  else{
  	echo "Letter was not updated";
  }

  /*mc to ms date enter form */

?>
</html>