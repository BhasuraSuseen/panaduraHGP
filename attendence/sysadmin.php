<!DOCTYPE html>
<html>
<head>
<style>
            *{
                margin: 0; 
                padding: 0;
                box-sizing: border-box;
            }
            body {
                background-color: #ECEFF1;
                font-family: 'Open Sans';
            }	
            h1{
                font-family: 'Open Sans';
                font-size: 30px;
                font-weight: 400;
                color: #455A64;
            }
            h1:hover{	
                color: #c62828;
                cursor: pointer;
            }
            spanh1{
                font-family: 'Open Sans';
                font-size: 30px;
                font-weight: 400;
                color: #455A64;
            }
            spanh1:hover{
                color: #2980b9;
            }
            a{
                font-family: 'Open Sans';
                font-size: 16px;
                font-weight: 600;
                color: #455A64;
            }
            a:hover{
                font-family: 'Open Sans';
                font-size: 16px;
                font-weight: 600;
                color: #2980b9;
            }
            .button {
                background-color: #ECEFF1; /* Green */
                border: none;
                color: #455A64;
                padding: 5px 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 26px;
                margin: 2px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button1 {
                background-color: #ECEFF1;
                color: #455A64;
                border: 2px solid #455A64;
                border-radius: 0%;
            }
            
            .black_btn{
                background-color: #263238;
                outline: none;
                border: none;
                width: 100px;
                font-size: 0.9em;
                padding: 0.4em;
                margin-bottom: 0.8em;  
                color: white;
            }

            .button1:hover {
                background-color: #ECEFF1 ;
                border: 2px solid #4CAF50;
                color: #4CAF50;
            }

            .button1:active{
                border: 5px solid #4CAF50;

            }
            .button1:active{
                border: 5px solid #4CAF50;

            }
            .all_container{
                width: 100%;
                height: 677px;
                border-top: 5px solid #2980b9; 
                border-bottom: 5px solid #2980b9; 
            }
            .left_side_bar{
                width: 5%;
                height: 100%;
                float: left;
                border-right: 2px solid #CFD8DC;
            }
            .left_side_bar:hover{
                border-right: 2px solid #B0BEC5;
            }
            .left_side_bar_top{
                width: 100%;
                height: 20%;
                float: left;
            }
            .left_side_bar_down{
                width: 100%;
                height: 80%;
                float: left;
            }
            .container{
                width: 90%;
                float: left; 
            }
            .right_side_bar{
                width: 5%;
                height: 100%;
                float: left;
                background-color:#CFD8DC;
                border-left: 2px solid #B0BEC5;
            }
            ul#nav li{
                list-style: none;
                fill: #455A64;
                color: #455A64;
                display: block;    
                font-size: 14px;
                text-align: center;
                background-color:#CFD8DC;
                border-left: 4px solid #B0BEC5;
                transition: 0.2s;
                text-align: center;


            }
            ul#nav li:hover{
                background-color: #B0BEC5;
                fill: #c62828;
                color:#c62828;
                border-left: 4px solid #c62828;
                cursor: pointer;

            }

            .middle_top{
                float: left;
                height:20%;
                width:100%;

                border-bottom: 2px solid #B0BEC5;
            }
            .middle_top_left{
                float: left;
                width: 25%;

            }
            .middle_top_middle{
                float: left;
                width: 50%;  

            }
            #clockbox{
                width: 100%;
                color: #455A64;
                font-weight: 100;
                font-size: 30px; 
                text-align: center;
            }
            .middle_top_right{
                float: right;
                width: 25%;
                text-align: right;
                padding-top: 8px;
                padding-right:10px;
            }
            .middle_left{
                float: left;
                height:80%;
                width:70%;
                border-right: 2px solid #B0BEC5;
                overflow-y: scroll;
            }
            .middle_right{
                float: left;
                height:80%;
                width:30%;
                overflow-y: scroll;    
            }
            #pop_background{
                position: fixed;
                width: 100%;
                height: 677px;
                top: 0;
                left:0;
                background: #000000;
                opacity: 0.2;
                display: none;
                z-index: 1000;       
            }
            #pop_box_hr_1{
                position: absolute;
                background: #ECEFF1;
                font-size: 0.9em;
                width: 54%;
                margin: 3% 0 0 5%;
                padding: 20px;
                opacity: 0.9;
                z-index: 1500;
                display: none;
                border-top: 3px solid #ef5350;
                border-bottom: 5px solid #ef5350; 
            }
            
             #pop_box_hr_2{
                position: fixed;
                padding-left: 500px;
                left: 810px;
                background: beige;
                font-size: 0.9em;
                width: 30%;
                margin: 3% 0 0 5%;
                padding: 20px;
                opacity: 0.9;
                z-index: 1500;
                display: none;
                border-top: 3px solid #ef5350;
                border-bottom: 5px solid #ef5350; 
            }

            input[type="text"], input[type="date"], input[type="number"], input[type="password"], textarea  {
                display: block;
                color: #455A64;
                outline: none;
                width: 200px;
                font-size: 0.9em;
                padding: 0.4em;
                margin-bottom: 0.8em;
                -webkit-appearance: none;
                background: none;
                border: 2px solid #cccccc ;


            }
            input[type="submit"], input[type="file"], button[type="button"], input[type="reset"]{
                background-color: #263238;
                outline: none;
                border: none;
                width: 100px;
                font-size: 0.9em;
                padding: 0.4em;
                margin-bottom: 0.8em;  
                color: white;
            }
            input[type="submit"]:hover , input[type="file"]:hover, button[type="button"]:hover, input[type="reset"]:hover{
                background-color: #263238;
                outline: none;
                border: none;
                width: 100px;
                font-size: 0.9em;
                padding: 0.4em;
                margin-bottom: 0.8em;  
                color: white;
            }
            .recordstyl{
                 background: beige;
                font-size: 1em;
                
                opacity: 0.9;
                border-top: 3px solid #ef5350;
                border-bottom: 5px solid #ef5350;
                
                
            }
        </style>

<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>

</head>
<body> 
	<div class="all_container">
		<div class="left_side_bar">
            <div class="left_side_bar_top">                   
            </div>
            <div class="left_side_bar_down">
                <ul id="nav">
                        <li class="admin_panel_list">
			    	<i> <img src="images/businessman.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>                               
                        </li>
                        <li id="open_hr_1" > 
				<i> <img src="images/businessman-1.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i> 
			</li>
                        <li class="letter_panel_list">  
				<i> <img src="images/web.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
			</li>
			 <li class="hr_panel_list">  
				<i> <img src="images/check.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
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
			  <a href="index.php"><button class="button">Log Out</button></a>
                      </div>
            </div>
			
			
            <div class="middle_left">
                <a href="ebatt.php"> Post box and news feed</a>
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
				<?php include './ebatt.php';?>		  
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