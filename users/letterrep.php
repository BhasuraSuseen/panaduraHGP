<?php
require "connect.php";
session_start();
if(isset($_POST["submit2"])){
	if(isset($_POST['idrep'])){
	$date=$_POST['repdate'];
	$subject=$_POST['subject'];
	$type=$_POST['type'];
	$addr=$_POST=['addr'];
	$idrep=$_POST['idrep'];
	$user=$_SESSION['username'];
	$sql="INSERT INTO letter_rep (date,subject,type,address,letter_id) VALUES ('$date','$subject','$type','$addr','$idrep','$username')";
}
else{echo "No letters to reply";

}
} 
?>