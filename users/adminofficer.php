<!DOCTYPE html>
<html>
<head>
	<title>Admin Officer</title>
</head>
<body>
<div>
<h1>HOMS</h1>
</div>
<div>
<a href="../login.php"><button class="button">Log Out</button></a>
</div>
<div style="float: right;"><b>Enter MS to AO date</b>
	<form name="mstoao" action="adminofficer.php" method="post" accept-charset="utf-8">
		  <?php  
      require "../connect.php";
			$abc=mysqli_query($conn,"select letter_id from letter where mcms is NULL");
      if(mysqli_num_rows($abc)>0){
      $select= '<select name="select">';
      while($rs=mysqli_fetch_array($abc)){
     
      $select.='<option name="lid" value="' .$rs[0]. '">'.$rs[0].'</option>';
       }
      }
      
      echo $select;
      echo '</select>'?>
      <input type="date" name="datemsao" placeholder="Date sent to MS" required>
      <input type="submit" name="submitt" value="Enter Date">
      <input type="reset" name="reset" value="Reset">
	</form>
</div>
</body>
<?php

 /*ms to ao date enter form */
  if(isset($_POST["submitt"])){

$lid=$_POST['lid'];
$datemsao=$_POST['datemsao'];

$sql="UPDATE letter SET msao='$datemsao' WHERE letter_id='$lid'";
mysqli_query($conn,$sql);
echo $lid . "was updated";
}
  
?>
</html>