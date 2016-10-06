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
                    <svg version="1.1" id="Layer_1"  x="0px" y="0px"
	 viewBox="0 0 512.003 512.003" style="enable-background:new 0 0 512.003 512.003;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M426.671,196.268c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v25.6c0,78.012,18.193,113.442,18.876,114.739
				c3.729,7.509,9.822,25.617,4.838,33.647c-2.142,3.456-6.938,5.214-14.268,5.214h-69.18c-4.719,0-8.533,3.823-8.533,8.533
				s3.814,8.533,8.533,8.533h69.18c16.998,0,25.045-7.245,28.792-13.321c11.298-18.278-2.483-47.01-4.156-50.355
				c-0.171-0.333-17.015-33.783-17.015-106.991V196.268z"/>
			<path d="M136.538,196.268c0-4.71-3.823-8.533-8.533-8.533s-8.533,3.823-8.533,8.533c0,36.625,26.871,106.965,35.029,123.281
				c10.394,20.77,55.834,72.986,101.504,72.986s91.119-52.216,101.504-72.986c8.158-16.316,35.029-86.656,35.029-123.281
				c0-4.71-3.814-8.533-8.533-8.533c-4.719,0-8.533,3.823-8.533,8.533c0,19.337-8.858,50.833-17.801,76.689
				c-16.666-0.478-65.109-2.995-98.492-16.35c-2.048-0.802-4.301-0.802-6.349,0c-33.425,13.372-81.98,15.88-98.492,16.35
				C145.404,247.101,136.538,215.604,136.538,196.268z M256.004,273.682c32.546,12.151,75.017,15.326,95.531,16.154
				c-3.712,9.719-7.066,17.613-9.301,22.084c-7.654,15.317-48.154,63.548-86.229,63.548s-78.575-48.23-86.229-63.548
				c-2.236-4.471-5.589-12.356-9.301-22.076C180.911,289.017,223.407,285.851,256.004,273.682z"/>
			<path d="M213.338,238.935c4.71,0,8.533-3.823,8.533-8.533v-5.615c0.546,0.529,0.922,0.964,0.964,1.024
				c1.519,2.918,4.497,4.591,7.578,4.591c1.323,0,2.671-0.307,3.934-0.964c4.181-2.176,5.803-7.33,3.627-11.511
				c-2.534-4.873-10.581-13.124-24.636-13.124c-14.054,0-22.101,8.252-24.636,13.124c-2.125,4.087-0.555,8.969,3.456,11.23
				c4.011,2.287,9.165,0.811,11.563-3.123c0.077-0.128,0.495-0.623,1.084-1.195v5.564
				C204.804,235.112,208.627,238.935,213.338,238.935z"/>
			<path d="M298.671,238.935c4.719,0,8.533-3.823,8.533-8.533v-5.615c0.546,0.529,0.922,0.964,0.964,1.024
				c1.519,2.918,4.497,4.591,7.578,4.591c1.323,0,2.671-0.307,3.934-0.964c4.173-2.176,5.803-7.33,3.627-11.511
				c-2.534-4.873-10.59-13.124-24.636-13.124c-14.046,0-22.101,8.252-24.636,13.124c-2.125,4.087-0.546,8.969,3.456,11.23
				c3.994,2.261,9.156,0.819,11.554-3.123c0.085-0.128,0.503-0.623,1.092-1.195v5.564
				C290.138,235.112,293.952,238.935,298.671,238.935z"/>
			<path d="M511.561,500.771c-0.76-2.278-19.644-56.107-108.817-73.933c-4.463-0.896-8.849,1.869-9.95,6.289l-15.454,61.807H134.669
				l-15.454-61.807c-1.101-4.412-5.444-7.168-9.95-6.289C20.1,444.665,1.208,498.493,0.44,500.771
				c-1.485,4.446,0.913,9.233,5.359,10.744c4.437,1.527,9.276-0.87,10.82-5.291c0.64-1.843,16.06-43.836,88.047-60.919
				l15.061,60.237c0.947,3.797,4.361,6.46,8.277,6.46h256c3.917,0,7.322-2.662,8.277-6.46l15.053-60.237
				c71.996,17.084,87.424,59.068,88.047,60.86c1.186,3.576,4.514,5.837,8.09,5.837c0.888,0,1.801-0.137,2.697-0.435
				C510.639,510.073,513.054,505.243,511.561,500.771z"/>
			<path d="M136.794,428.742c1.152,4.565,5.786,7.356,10.351,6.204l28.518-7.134c10.291,13.594,41.515,50.057,80.341,50.057
				s70.05-36.463,80.341-50.057l28.527,7.134c4.548,1.152,9.199-1.638,10.342-6.204c1.143-4.574-1.638-9.207-6.212-10.351
				l-34.133-8.533c-3.507-0.87-7.159,0.546-9.156,3.533c-0.324,0.478-32.179,47.411-69.709,47.411s-69.385-46.933-69.7-47.411
				c-2.005-2.987-5.666-4.403-9.173-3.533l-34.133,8.533C138.432,419.534,135.65,424.168,136.794,428.742z"/>
			<path d="M92.958,392.535h69.18c4.71,0,8.533-3.823,8.533-8.533s-3.823-8.533-8.533-8.533h-69.18
				c-7.322,0-12.126-1.758-14.268-5.214c-4.983-8.03,1.109-26.138,5.06-34.142c0.759-1.801,18.654-45.047,18.654-114.244v-25.6
				c0-4.71-3.823-8.533-8.533-8.533c-4.71,0-8.533,3.823-8.533,8.533v25.6c0,65.417-17.101,107.119-17.084,107.119
				c-1.604,3.217-15.386,31.949-4.088,50.227C67.913,385.29,75.96,392.535,92.958,392.535z"/>
			<path d="M93.871,170.668h324.267c4.719,0,8.533-3.823,8.533-8.533V76.801c0-46.652-26.803-76.8-68.267-76.8H162.138
				c-43.785,0-76.8,33.016-76.8,76.8v85.333C85.338,166.845,89.161,170.668,93.871,170.668z M102.404,76.801
				c0-34.611,25.122-59.733,59.733-59.733h196.267c37.751,0,51.2,30.857,51.2,59.733v76.8h-307.2V76.801z"/>
			<path d="M281.604,76.801h-17.067V59.735c0-4.71-3.823-8.533-8.533-8.533c-4.71,0-8.533,3.823-8.533,8.533v17.067h-17.067
				c-4.71,0-8.533,3.823-8.533,8.533c0,4.71,3.823,8.533,8.533,8.533h17.067v17.067c0,4.71,3.823,8.533,8.533,8.533
				c4.71,0,8.533-3.823,8.533-8.533V93.868h17.067c4.719,0,8.533-3.823,8.533-8.533C290.138,80.624,286.323,76.801,281.604,76.801z"
				/>
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

                            <?php include './nurceatt.php'; ?>

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
                <button onclick="loadNurcedata()"/>
                
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
