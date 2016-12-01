<!DOCTYPE html>
<html>
<head>
	<title>Letter reply</title>
 <?php
 require "../connect.php";
 session_start();
 ?> 
</head>

<body>

<div><b> Reply to a letter</b>
  <form name="replyletter" action="replyletter.php" method="post" accept-charset="utf-8">
  <input type="date" name="repdate" placeholder="Date replied" required>
  <input type="text" name="subject" placeholder="subject of the letter">
  <input type="radio" name="type" value="Normal letter" checked>Normal Letter
  <input type="radio" name="type" value="Registered letter">Registered Letter
  <input type="radio" name="type" value="Fax">Fax
  <input type="radio" name="type" value="Other">Other
  <input type="text" name="addr" placeholder="Address/ Fax number">

   <?php  
      $a=mysqli_query($conn,"select letter.letter_id from letter where mceb is NOT NULL and eb ='".$_SESSION['ebno']."' and letter.letter_id not in(select letter_rep.letter_id from letter_rep)");
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
if(isset($_POST["submit2"])){
  if(isset($_POST['idrep'])){
  $date=$_POST['repdate'];
  $subject=$_POST['subject'];
  $type=$_POST['type'];
  $addr=($_POST['addr']); 
  $idrep=$_POST['idrep'];
  $user=$_SESSION['username'];
  $sql="INSERT INTO letter_rep (date,subject,type,address,letter_id,user) VALUES ('$date','$subject','$type','$addr','$idrep','$user')";

  mysqli_query($conn,$sql);
  $message= $idrep. " was entered";
  echo  "<script type='text/javascript'>alert('$message');</script>";
}
else{
  $message="No letters to reply";
  echo  "<script type='text/javascript'>alert('$message');</script>";
  
}

}

?>
</html>