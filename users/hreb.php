<!DOCTYPE html>
<html>
<head>
  <title>HR EB</title>
</head>
<body>
<div>
<h1>HOMS</h1>
</div>
<div>
<a href="../login.php"><button class="button">Log Out</button></a>
</div>
<div style="float: right;"><b>Enter MC to EB date</b>
  <form name="mstoao" action="dietclerk.php" method="post" accept-charset="utf-8">
  <label>Letter ID</label>
      <?php  
      require "../connect.php";
      $abc=mysqli_query($conn,"select letter_id from letter where mceb is NULL and aomc IS NOT NULL and eb= 4");
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
      <input type="date" name="datemceb" placeholder="Date received from Mail Clerk" required>
      <input type="submit" name="submit" value="Enter Date">
      <input type="reset" name="reset" value="Reset">
  </form>
</div>
</body>
<?php

 /*ms to ao date enter form */
  if(isset($_POST["submit"])){

$lid=$_POST['lid'];
$datemceb=$_POST['datemceb'];

$sql="UPDATE letter SET mceb='$datemceb' WHERE letter_id='$lid'";
mysqli_query($conn,$sql);
echo $lid . "was updated";
}
  
?>
</html>