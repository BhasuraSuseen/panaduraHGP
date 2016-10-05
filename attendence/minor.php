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
                            <svg version="1.1" id="Layer_1" x="0px" y="0px"
	 viewBox="0 0 510.776 510.776" style="enable-background:new 0 0 510.776 510.776;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M508.188,65.012L495.706,52.53L458.25,15.074L445.768,2.583c-3.443-3.443-9.031-3.443-12.482,0
				c-3.452,3.452-3.452,9.039,0,12.491l6.241,6.241l-56.17,56.179L352.143,46.28c-3.31-3.31-9.172-3.31-12.482,0l-24.973,24.973
				c-3.443,3.443-3.443,9.031,0,12.482l6.25,6.241l-42.425,42.417l23.993,23.993l43.264-41.569l12.615,12.606l-41.657,39.53
				l24.964,24.964l41.666-39.521l12.359,12.359l-43.282,41.56l25.953,25.953l42.417-42.425l6.241,6.241
				c1.721,1.73,3.981,2.586,6.241,2.586c2.26,0,4.52-0.856,6.241-2.586L464.5,171.12c1.66-1.651,2.586-3.893,2.586-6.241
				c0-2.339-0.927-4.582-2.586-6.241l-31.214-31.214l56.179-56.17l6.241,6.241c1.73,1.721,3.99,2.586,6.241,2.586
				c2.26,0,4.52-0.865,6.241-2.586C511.639,74.043,511.639,68.455,508.188,65.012z M445.777,164.879l-12.491,12.482l-6.241-6.241
				l-24.964-24.964L364.625,108.7L339.66,83.735l-6.241-6.241l12.482-12.491l31.214,31.214l37.447,37.447L445.777,164.879z
				 M420.804,114.941l-24.964-24.964l56.17-56.179l24.973,24.973L420.804,114.941z"/>
			<path d="M252.272,158.637l37.447,37.447c3.452,3.452,3.452,9.039,0,12.482c-1.721,1.73-3.981,2.586-6.241,2.586
				s-4.52-0.856-6.241-2.586l-37.447-37.447l-18.732,18.732l37.455,37.455c3.443,3.443,3.443,9.031,0,12.482
				c-1.73,1.721-3.981,2.586-6.241,2.586s-4.52-0.865-6.241-2.586l-37.456-37.455l-18.723,18.723l37.455,37.455
				c3.443,3.443,3.443,9.031,0,12.482c-1.73,1.721-3.99,2.586-6.241,2.586c-2.26,0-4.52-0.865-6.241-2.586l-37.455-37.455
				l-25.009,25.009c-18.503,18.503-20.268,47.342-5.57,67.999l-11.838,11.838l37.447,37.447l11.829-11.838
				c9.145,6.506,19.836,9.896,30.596,9.896c13.55,0,27.101-5.164,37.411-15.475L365.9,244.75l-99.867-99.875L252.272,158.637z"/>
			<path d="M102.632,370.699c-7.821,7.821-9.057,19.668-3.919,28.884L2.589,495.707c-3.452,3.452-3.452,9.039,0,12.482
				c1.721,1.73,3.981,2.586,6.241,2.586c2.26,0,4.52-0.856,6.241-2.586l96.124-96.124c3.655,2.039,7.689,3.16,11.776,3.16
				c6.197,0,12.394-2.357,17.108-7.08l19.836-19.836l-37.447-37.447L102.632,370.699z"/>
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

                            <?php include './minoratt.php'; ?>

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
                <button onclick="loadMinordata()"/>
                
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
