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
        <meta charset=utf-8 />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    </head>
    <body> 
        <div class="all_container">
            <div class="left_side_bar">
                <div class="left_side_bar_top">                   
                </div>
                <div class="left_side_bar_down" style="position: relative;top: -95px;">
                    <ul id="nav">
                        <li id="open_hr_1" >
                           <svg version="1.1" id="Capa_1"  x="0px" y="0px" viewBox="0 0 489.792 489.792" style="enable-background:new 0 0 489.792 489.792;" xml:space="preserve">
<g>
	<g>
		<g>
			<circle cx="244.896" cy="136.846" r="103.8"/>
			<circle cx="348.696" cy="367.046" r="15.5"/>
			<path d="M166.796,308.646c-7.4-7-16.3-11.3-25.7-11.3c-9.7,0-18.7,4.3-26,11.7C129.096,305.946,146.896,304.846,166.796,308.646z
				"/>
			<path d="M489.396,419.046c-12.1-78.1-60.6-144.2-127.5-180.4c3.1,22.2,6.2,59.5-1.2,92.5c14.8,5.1,25.7,19,25.7,35.8
				c0,20.6-16.7,37.7-37.7,37.7c-20.6,0-37.7-16.7-37.7-37.7c0-17.9,12.4-32.7,29.2-36.5c10.1-38.9,1.9-89-0.4-102.2
				c-2.7-1.2-5.4-2.3-8.2-3.1c-22.5,21.8-52.9,35.4-86.7,35.4c-33,0-63.4-13.2-85.5-34.6c-3.5,7.4-10.1,25.3-8.9,52.1
				c33,6.2,58.3,44.3,58.3,90.6c0,17.1-3.5,33.8-10.1,48.2c-3.5,10.5-18.7,14.8-25.7,14.8c-10.5,0-19-8.6-19-19s8.6-19,19-19
				c3.1,0,7.4,0.8,12.1,2.3c7.7-25.5,1.9-51.3-1.9-61.4c-37.3-16.3-71.5-5.1-84,0c-3.5,10.1-9.9,33.6-1.9,61.4
				c4.7-1.9,8.9-2.7,12.1-2.7c10.5,0,19,8.6,19,19s-8.6,19-19,19c-6.6,0-21.4-4.3-25.3-14l0,0c-7-14.8-10.5-31.5-10.5-49
				c0-45.5,24.9-83.2,57.1-90.2c-0.8-17.5,1.6-32.3,4.3-43.1c-70.9,35.7-122.2,103.3-134.6,184.1c-3.1,19.8,12.4,37.7,32.3,37.7
				h424.1C476.996,456.846,492.496,438.946,489.396,419.046z"/>
		</g>
	</g>
</g>

</svg>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="middle_top">
                    <div class="middle_top_left">
                        <h1>#<span>OMS</span></h1>
                    </div>
                    <div class="middle_top_middle">
                        <script type="text/javascript">
                            tday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                            tmonth = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                            function GetClock() {
                                var d = new Date();
                                var nday = d.getDay(), nmonth = d.getMonth(), ndate = d.getDate(), nyear = d.getYear();
                                if (nyear < 1000)
                                    nyear += 1900;
                                var nhour = d.getHours(), nmin = d.getMinutes(), nsec = d.getSeconds(), ap;

                                if (nhour == 0) {
                                    ap = " AM";
                                    nhour = 12;
                                }
                                else if (nhour < 12) {
                                    ap = " AM";
                                }
                                else if (nhour == 12) {
                                    ap = " PM";
                                }
                                else if (nhour > 12) {
                                    ap = " PM";
                                    nhour -= 12;
                                }

                                if (nmin <= 9)
                                    nmin = "0" + nmin;
                                if (nsec <= 9)
                                    nsec = "0" + nsec;

                                document.getElementById('clockbox').innerHTML = "" + tday[nday] + ", " + tmonth[nmonth] + " " + ndate + ", " + nyear + " " + nhour + ":" + nmin + ":" + nsec + ap + "";
                            }

                            window.onload = function() {
                                GetClock();
                                setInterval(GetClock, 1000);
                            }
                        </script>
                        <div id="clockbox"></div>
                    </div>
                    <div class="middle_top_right">
                        <a>User name</a>
                    </div>
                </div>


                <div class="middle_left">

                    <br>

                    <div style="height: 600px">

                        <div style="overflow-y: scroll">

                            <?php include './doctoratt.php'; ?>

                        </div>


                    </div>



                </div>
                <div class="middle_right">
                    <!--<button class="button button1">GA</button>-->
                    <div class="recordstyl"> 
                        <table border="0" style="width: 100%">
                            <tr><td style="width:70%">Employees Present :</td><td><strong id="st1"></strong></td></tr>
                            <tr><td style="width:70%">Employees absent :</td><td><strong id="st2"></strong></td></tr>
                            <tr><td style="width:70%">Total Employees :</td><td><strong id="st3"></strong></td></tr>
                        </table>
                    </div>
                    <br><br>
                    <div class="recordstyl"> 
                       
                        <table border="0" style="width: 100%">
                            <tr>Employee came</tr>
                            <tr><td style="width:40%">Date:</td><td></td></tr>
                            <tr><td style="width:40%">Search by name:</td><td><input type="text" name="sername"></td></tr>
                            <tr><td style="width:40%">Search by ID :</td><td><input type="text" name="serId"></td></tr>
                            <tr><td style="width:40%">Status:</td><td><input type="text" name="status"></td></tr>
                        </table>
                    </div>
                    
                    <div class="recordstyl">
                        
                    </div>
                    
                </div>
            </div>
            <div class="right_side_bar"> 

                <br>
                <br>
                <ul id="nav">
                <button onclick="loadDrdata()"/>
                
<svg viewBox="0 0 463 463" enable-background="new 0 0 463 463" >

      <path d="m359.5,16h-96c-0.089,0-0.176,0.01-0.264,0.013-7.203-9.708-18.746-16.013-31.736-16.013s-24.533,6.305-31.736,16.013c-0.088-0.003-0.175-0.013-0.264-0.013h-96c-26.191,0-47.5,21.309-47.5,47.5v352c0,26.191 21.309,47.5 47.5,47.5h256c26.191,0 47.5-21.309 47.5-47.5v-352c0-26.191-21.309-47.5-47.5-47.5zm-128-1c13.51,0 24.5,10.991 24.5,24.5v8c0,4.142 3.357,7.5 7.5,7.5h32c4.687,0 8.5,3.813 8.5,8.5s-3.813,8.5-8.5,8.5h-128c-4.687,0-8.5-3.813-8.5-8.5s3.813-8.5 8.5-8.5h32c4.143,0 7.5-3.358 7.5-7.5v-8c0-13.509 10.99-24.5 24.5-24.5zm-64,72h128c12.958,0 23.5-10.542 23.5-23.5 0-0.168-0.009-0.333-0.013-0.5h40.513c0.275,0 0.5,0.224 0.5,0.5v352c0,0.276-0.225,0.5-0.5,0.5h-256c-0.275,0-0.5-0.224-0.5-0.5v-352c0-0.276 0.225-0.5 0.5-0.5h40.513c-0.004,0.167-0.013,0.332-0.013,0.5 0,12.958 10.542,23.5 23.5,23.5zm224.5,328.5c0,17.92-14.579,32.5-32.5,32.5h-256c-17.921,0-32.5-14.58-32.5-32.5v-352c0-17.92 14.579-32.5 32.5-32.5h89.431c-0.604,2.74-0.931,5.582-0.931,8.5v0.5h-24.5c-7.023,0-13.332,3.101-17.641,8h-46.359c-8.547,0-15.5,6.953-15.5,15.5v352c0,8.547 6.953,15.5 15.5,15.5h256c8.547,0 15.5-6.953 15.5-15.5v-352c0-8.547-6.953-15.5-15.5-15.5h-46.359c-4.31-4.899-10.619-8-17.641-8h-24.5v-0.5c0-2.918-0.328-5.76-0.931-8.5h89.431c17.921,0 32.5,14.58 32.5,32.5v352z"/>
      <path d="m231.5,63c4.143,0 7.5-3.358 7.5-7.5v-16c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v16c0,4.142 3.357,7.5 7.5,7.5z"/>
      <path d="m223.5,175h96c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-96c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
      <path d="m138.196,162.197c-2.929,2.929-2.929,7.678 0,10.606l16,16c1.465,1.464 3.385,2.197 5.304,2.197s3.839-0.732 5.304-2.197l32-32c2.929-2.929 2.929-7.678 0-10.606-2.93-2.929-7.678-2.929-10.607,0l-26.697,26.697-10.696-10.697c-2.93-2.929-7.678-2.929-10.608,0z"/>
      <path d="m223.5,255h96c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-96c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
      <path d="m186.196,226.197l-26.696,26.697-10.696-10.697c-2.93-2.929-7.678-2.929-10.607,0s-2.929,7.678 0,10.606l16,16c1.465,1.464 3.385,2.197 5.304,2.197s3.839-0.732 5.304-2.197l32-32c2.929-2.929 2.929-7.678 0-10.606-2.931-2.929-7.679-2.929-10.609,0z"/>
      <path d="m223.5,335h96c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-96c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
      <path d="m186.196,306.197l-26.696,26.697-10.696-10.697c-2.93-2.929-7.678-2.929-10.607,0s-2.929,7.678 0,10.606l16,16c1.465,1.464 3.385,2.197 5.304,2.197s3.839-0.732 5.304-2.197l32-32c2.929-2.929 2.929-7.678 0-10.606-2.931-2.929-7.679-2.929-10.609,0z"/>
    
</svg>

            
            
     ...........      
</button> 
                
                
                <button id="btn1"/>
                <svg version="1.1" id="Capa_1"  x="0px" y="0px"
	 viewBox="0 0 250.313 250.313" style="enable-background:new 0 0 250.313 250.313;" xml:space="preserve">

	<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76
		c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911
		c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38
		c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146
		c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236
		C170.146,140.044,140.043,170.146,102.911,170.146z"/>

        </svg>
            ...........
            </button> 
               
                </ul>
    </body>
    <script type="text/javascript" src="jst.js"></script>
</html>
