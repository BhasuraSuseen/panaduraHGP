<!DOCTYPE html>
<html>
<head>
	<title>Mail EB</title>
</head>
<body>
<div>
<h1>HOMS</h1>
</div>
<div>
<a href="../login.php"><button class="button">Log Out</button></a>
</div>
<div style="float: right;"><b>Enter MC to EB date</b>
	<form name="mctoeb" action="maileb.php" method="post" accept-charset="utf-8">
  <label>Letter ID</label>
		  <?php  
      require "../connect.php";
      session_start();
      $eb=$_SESSION['ebno'];
			$abc=mysqli_query($conn,"select letter_id from letter where mcms is NULL and eb ='".$eb."'");
      if(mysqli_num_rows($abc)>0){
      $select= '<select name="lid">';
      while($rs=mysqli_fetch_array($abc)){
     
      $select.='<option value="' .$rs[0]. '">'.$rs[0].'</option>';
       }
      }
       else{
        $select='<select><option></option></select>';
      }
      echo $select;
      echo '</select>'?>
      <input type="date" name="datemceb" placeholder="Date recieved from MC" required>
      <input type="submit" name="submitt" value="Enter Date">
      <input type="reset" name="reset" value="Reset">
	</form>
</div>
<div><b> Reply to a letter</b>
  <form name="replyletter" action="letterrep.php" method="post" accept-charset="utf-8">
  <input type="date" name="repdate" placeholder="Date replied" required>
  <input type="text" name="subject" placeholder="subject of the letter">
  <input type="radio" name="type" value="Normal" checked>Normal Letter
  <input type="radio" name="type" value="Registered">Registered Letter
  <input type="radio" name="type" value="Fax">Fax
  <input type="radio" name="type" value="Other">Other
  <input type="text" name="addr" placeholder="Address/ Fax number">

   <?php  
      $a=mysqli_query($conn,"select letter_id from letter where mceb is NOT NULL and eb ='".$eb."'");
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
      echo '</select>'?>
  <input type="submit" name="submit2" value="Enter letter">
  <input type="reset" name="reset2" value="Reset">
</div>
</body>
<?php

 /*ms to ao date enter form */
  if(isset($_POST["submitt"])){

$lid=$_POST['lid'];
$datemceb=$_POST['datemceb'];

$sql="UPDATE letter SET mceb='$datemceb' WHERE letter_id='$lid'";
mysqli_query($conn,$sql);
echo $lid . "was updated";
}
  
?>
</html>