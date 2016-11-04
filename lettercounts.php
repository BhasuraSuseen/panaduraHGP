<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require "connect.php";
//mail clerk 1 letter count//
$mcsql1="select * from letter where date is NOT NULL and mcms IS NULL";
$a=mysqli_query($conn,$mcsql1);
$a1=mysqli_num_rows($a);
//echo $a1;
//medical spurintendant letter count//
$mssql1="select * from letter where mcms is NOT NULL and msao IS NULL";
$b=mysqli_query($conn,$mssql1);
$b1=mysqli_num_rows($b);
//echo $b1;
//admin officer letter count//
$aosql1="select * from letter where msao is NOT NULL and aomc IS NULL";
$c=mysqli_query($conn,$aosql1);
$c1=mysqli_num_rows($c);
//echo $c1;
//mail clerk letter count 2//
$mcsql2="select * from letter where aomc is NOT NULL and mceb IS NULL";
$d=mysqli_query($conn,$mcsql2);
$d1=mysqli_num_rows($d);
//echo $d1;
//eb1 letter count//
$eb1sql="select * from letter where mceb is NOT NULL and eb='1'";
$eb1=mysqli_query($conn,$eb1sql);
$eb11=mysqli_num_rows($eb1);
//echo $eb11;
//eb2 letter count//
$eb2sql="select * from letter where mceb is NOT NULL and eb='2'";
$eb2=mysqli_query($conn,$eb2sql);
$eb22=mysqli_num_rows($eb2);
//echo $eb22;
//eb3 letter count//
$eb3sql="select * from letter where mceb is NOT NULL and eb='3'";
$eb3=mysqli_query($conn,$eb3sql);
$eb33=mysqli_num_rows($eb3);
//echo $eb33;
//eb4 letter count//
$eb4sql="select * from letter where mceb is NOT NULL and eb='4'";
$eb4=mysqli_query($conn,$eb4sql);
$eb44=mysqli_num_rows($eb4);
//echo $eb44;
//eb5 letter count//
$eb5sql="select * from letter where mceb is NOT NULL and eb='5'";
$eb5=mysqli_query($conn,$eb5sql);
$eb55=mysqli_num_rows($eb5);
//echo $eb55;
//eb6 letter count//
$eb6sql="select * from letter where mceb is NOT NULL and eb='6'";
$eb6=mysqli_query($conn,$eb6sql);
$eb66=mysqli_num_rows($eb6);
//echo $eb66;
//eb7 letter count//
$eb7sql="select * from letter where mceb is NOT NULL and eb='7'";
$eb7=mysqli_query($conn,$eb7sql);
$eb77=mysqli_num_rows($eb7);
//echo $eb77;
//eb8 letter count//
$eb8sql="select * from letter where mceb is NOT NULL and eb='8'";
$eb8=mysqli_query($conn,$eb8sql);
$eb88=mysqli_num_rows($eb8);
//echo $eb88;

?>
 <form name="letterclerk" action="lettercounts.php" method="post" accept-charset="utf-8">
<?php
//code for mail clerk,admin officer and director
//can use the following code for all the users, copy paste the code for priority one users and replace the eb number for priority two users.
$p1letters=mysqli_query($conn,"select letter_id from letter");
echo "<label>Select letter ID </label>";
if(mysqli_num_rows($p1letters)>0){
      $select= '<select name="letid">';
      while($rs=mysqli_fetch_array($p1letters)){
     
      $select.='<option value="' .$rs[0]. '">'.$rs[0].'</option>';
       }
      }
      else{
        $select='<select><option></option></select>';
      }

      echo $select;
      echo '</select>'
?>
<input type="submit" name="submit" value="Search Details">
<?php
 if(isset($_POST["submit"])){
 	$letid=$_POST['letid'];
 $letdetailsq=mysqli_query($conn,"select * from letter where letter_id='$letid'");
 $array=mysqli_fetch_assoc($letdetailsq);
 echo "<br><label>Letter ID : <label>". $array["letter_id"]."<br>";
 echo "<label>Date recived : <label>". $array["date"]."<br>";
 echo "<label>Subject : <label>". $array["subject"]."<br>";
 echo "<label>Recived from : <label>". $array["address"]."<br>";
 echo "<label>Type : <label>". $array["type"]."<br>";
 echo "<label>Letter Clerk to Medical Superintendent date : <label>". $array["mcms"]."<br>";
 echo "<label>Medical Superintendent to Admin Officer date : <label>". $array["msao"]."<br>";
 echo "<label>Admin Officer to Letter Clerk date : <label>". $array["aomc"]."<br>";
 }
	?>
</form>
</body>
</html>
