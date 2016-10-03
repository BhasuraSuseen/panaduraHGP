<html>
<head>
<meta charset=utf-8 />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
<title>Log In</title>
<link rel="stylesheet" type="text/css" href="styles/global.css">

</head>
<body>
<div id="pop_background_login"></div>
<div id="login">
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
	$sql = "SELECT USERNAME, ADMIN FROM users WHERE USERNAME='".$username."' AND PASSWORD='".$password."'";
	$result = mysqli_query($conn,$sql);
    $count =mysqli_fetch_array($result);
        
        
        if(mysqli_num_rows($result)>0){
            $_SESSION['username']=$username;
            if($count[1]=="SA" ){
               
                header("Location: sysadmin.php");
		          die();
	      
            }elseif($count[1]=="DIR"){
                header("Location:  users/director.php");
	        }elseif($count[1]=="AO"){
                header("Location:  users/adminofficer.php");
            }elseif($count[1]=="MC"){
                header("Location:  users/mailclerk.php");
            }elseif($count[1]=="MB"){
                header("Location:  users/maileb.php");
            }elseif($count[1]=="HB"){
                header("Location:  users/hreb.php");
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

</body>
</html>
