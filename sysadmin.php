<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body> 
	<div class="all_container">
		<div class="left_side_bar">
            <div class="left_side_bar_top">                   
            </div>
            <div class="left_side_bar_down">
                <ul id="nav">
                        <li id="open_hr_1" >
			    	<i> <img src="images/businessman.png"></i>                               
                        </li>
                        <li> 
				<i> <img src="images/businessman-1.png"></i> 
			</li>
                        <li>  
				<i> <img src="images/web.png"></i>
			</li>
			 <li>  
				<i> <img src="images/check.png"></i>
			</li>
                </ul>
           </div>
        </div>
		<div class="container">
            <div class="middle_top">
			    <div class="middle_top_left">
                    <h1>#<spanh1>OMS</spanh1></h1>
                </div>
                <div class="middle_top_middle">
                <script type="text/javascript">
                            tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
                            tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

                            function GetClock(){
                            var d=new Date();
                            var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
                            if(nyear<1000) nyear+=1900;
                            var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

                            if(nhour==0){ap=" AM";nhour=12;}
                            else if(nhour<12){ap=" AM";}
                            else if(nhour==12){ap=" PM";}
                            else if(nhour>12){ap=" PM";nhour-=12;}

                            if(nmin<=9) nmin="0"+nmin;
                            if(nsec<=9) nsec="0"+nsec;

                            document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
                            }

                            window.onload=function(){
                            GetClock();
                            setInterval(GetClock,1000);
                            }
                            </script>
                            <div id="clockbox"></div>
                      </div>
                      <div class="middle_top_right">
                          <a>Bhasura Suseen</a>
                      </div>
            </div>
			
			
            <div class="middle_left">
                <a> art is the simplest imagination</a>
            </div>
            <div class="middle_right">
                <button class="button button1">GA</button>
            </div>
		</div>
		<div class="right_side_bar"> 
            <svg xmlns="http://www.w3.org/2000/svg" class="search-panel-query-icon" width="24px" height="24px" viewBox="0 0 24 24"  >
                <path fill="#455A64" d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
             </svg>
             
        </div>
    <div id="pop_background"></div>
    <div id="pop_box_hr_1">
        <form name="new_user" action="admin.php" method="post" accept-charset="utf-8" onsubmit="return checkForm(this);">
			<table>
			<thead>
			<tr>
			<th colspan=2>Enter New User Details </th></thead>
			</tr>
			<tr><td>User Name</td><td> 
			<input type="text" name="user_name" size="20" required></td></tr>
			<tr><td>Password</td><td> 
			<input type="password" name="password" size="20" required></td></tr>
			<tr><td>Confirm Password</td><td> 
			<input type="password" name="passwordc" size="20" required></td></tr>
			<tr><td>NIC</td><td> 
			<input type="text" name="nic" size="20" required></td></tr>
			<tr><td>User Type</td><td><input type="radio" name="usertype" value="1"> Administrator
  			<input type="radio" name="usertype" value="0" required=""> User</td></tr>
			<tr><td colspan=2 align="center">
			<input type="submit" value="Add new user" name="submit">
			<input type="reset" value="Reset"></td>
			</tr></table>
			</form>
    </div>
	</div>
    
       <script>
        $(document).ready(function(){
           $('#open_hr_1').click(function(){
               $('#pop_background').fadeIn();
               $('#pop_box_hr_1').fadeIn();
               return false;
           });
           $('#pop_background').click(function(){
               $('#pop_background').fadeOut();
               $('#pop_box_hr_1').fadeOut();

               return false;
           });
        });
    </script>
</body>
</html>
