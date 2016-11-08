<html>
<head>
<meta charset=utf-8 />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
<title>Log In</title>
<link rel="stylesheet" type="text/css" href="styles/global.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
<div id="pop_background_login"></div>
<div id="login">
<div class="login_left"><img src="images/oms4.png"  style= "padding: 2px;"><br> <b>Hospital Office Management System<br> For Panadura Base Hospital</b>
<br>  T:P No: 038 2232261-62 <br>Fax: 038 2232770 <br> Address: Base Hospital, Panadura
</div>    
<div class="login_right">
<h1>Log in</h1>
<form action="" method="post">
    <label for="email">Username</label>
    <input type="text" placeholder="Username" name="username" required>
	  <br>
    <label for="password">Password</label>
    <input type="password"  placeholder="Password" name="password" required>
    <br>

    <input  type="submit" name="submit" value ="Log In" class="button">
      </form>
      
 <?php
    require "connect.php";
	session_start();
	if(isset($_POST["submit"])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$sql = "SELECT USERNAME, ADMIN, EB FROM users WHERE USERNAME='".$username."' AND PASSWORD='".$password."'";
	$result = mysqli_query($conn,$sql);
    $count =mysqli_fetch_array($result);
     mysqli_close($conn);   
        
        if(mysqli_num_rows($result)>0){
            $_SESSION['username']=$username;
            $_SESSION['ebno']=$count[2];
            if($count[1]=="SA" ){
               
                header("Location: sysadmin.php");
		          die();
	      
            }elseif($count[1]=="DIR"){
                header("Location:  users/director.php");
	        }elseif($count[1]=="AO"){
                header("Location:  users/adminofficer.php");
            }elseif($count[1]=="AB"){
                    if ($count[2]==5) {
                      header("Location:  letterEB.php");
                    }
                    elseif ($count[2]==6) {
                      header("Location:  attendancemaileb2.php");
                    }
                    elseif ($count[2]==7) {
                      header("Location:  attendancemaileb3.php");
                    }
                    elseif ($count[2]==8) {
                      header("Location:  attendancemaileb4.php");
                    }
            }elseif($count[1]=="MC"){
                header("Location: letterEB.php");
            }elseif($count[1]=="NB"){
                header("Location:  normalmaileb.php");
            }elseif($count[1]=="DC"){
                header("Location:  users/dietclerk.php");
            }
            else{
                echo "User not found";
            }
	}else{
            echo "Invalid user name or password"; 
        }
        
    }
	?>
	</div>
	</div>

</body>
</html>
