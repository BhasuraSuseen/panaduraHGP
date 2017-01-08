	<?php
	require "connect.php";
	if(isset($_POST["submit"])){
    if(isset($_POST['nic'])){
 	 
   if(isset($_POST['ebno'])){
    $ebno = $_POST['ebno']; 
 
   }

  
  else{
    if ($_POST['usertype']=="NB") {
         $ebno =4;
       }
   elseif ($_POST['usertype']=="SA") {
        $ebno = 1;
        }
   elseif ($_POST['usertype']=="MC") {
        $ebno = 2;
     
   }
    elseif ($_POST['usertype']=="DC") {
        $ebno = 3;
   
   }
   else{
        $ebno = 0;
   }
  }
   $user = $_POST['user_name'];
   $id = $_POST['nic']; 
 	 $pass = hash('sha256',$_POST['password']);
 	 $admin = $_POST['usertype'];
 	 $passc = hash('sha256',$_POST['passwordc']);
 	 if ($pass == $passc){
 	 /*checking if the user name is taken */
  $usernamecheck="select * from users where USERNAME='$user'";
  $result1=mysqli_query($conn,$usernamecheck);
if(mysqli_num_rows($result1)>=1){
   echo $user." is already taken";
  		
 }
 else{
 	/*checking if the user is in the database*/
 		$idcheck="select * from employee where NIC_NO='$id'";
   		$result2=mysqli_query($conn,$idcheck);
   		if(mysqli_num_rows($result2)>=1){
   			/*checking if the user has an account already*/
  				$idcheck2="select * from users where NIC_NO='$id'";
  				$result3=mysqli_query($conn,$idcheck2);
  				if(mysqli_num_rows($result3)>=1){
   				echo $user." has an account already";}
   				else{
   					$sql1="INSERT INTO users (USERNAME,PASSWORD,ADMIN,NIC_NO,EB) VALUES ('$user','$pass','$admin','$id','$ebno')";
   					mysqli_query($conn,$sql1);
   					
            header("Location:sysadmin.php");
   				}
   		}		
   		else{echo "Please enter a valid Employee ID number";}
		 
		 
 }
}
else{echo "passwords do not match";}
}
else{
  $message="Can't select an employee";
  echo  "<script type='text/javascript'>alert('$message');</script>";
  }
}
?>