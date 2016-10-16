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
                            <svg viewBox="0 0 512.011 512.011" style="enable-background:new 0 0 512.011 512.011;" xml:space="preserve">
<g>
	
			<path d="M110.939,170.668h290.133c4.71,0,8.533-3.823,8.533-8.533V76.801c0-46.652-26.795-76.8-68.267-76.8H179.206
				c-43.785,0-76.8,33.016-76.8,76.8v85.333C102.406,166.845,106.229,170.668,110.939,170.668z M119.472,76.801
				c0-34.611,25.122-59.733,59.733-59.733h162.133c37.752,0,51.2,30.857,51.2,59.733v76.8H119.472V76.801z"/>
			<path d="M366.939,85.335h-68.267c-0.299,0-0.555,0.145-0.845,0.171c-3.9-19.533-21.163-34.304-41.822-34.304
				c-20.659,0-37.922,14.771-41.822,34.304c-0.29-0.026-0.546-0.171-0.845-0.171h-68.267c-4.71,0-8.533,3.823-8.533,8.533
				c0,4.71,3.823,8.533,8.533,8.533h68.267c0.299,0,0.555-0.145,0.845-0.171c3.9,19.533,21.163,34.304,41.822,34.304
				c20.659,0,37.922-14.771,41.822-34.304c0.29,0.026,0.546,0.171,0.845,0.171h68.267c4.71,0,8.533-3.823,8.533-8.533
				C375.472,89.157,371.649,85.335,366.939,85.335z M256.006,119.468c-14.114,0-25.6-11.486-25.6-25.6s11.486-25.6,25.6-25.6
				s25.6,11.486,25.6,25.6S270.12,119.468,256.006,119.468z"/>
			<path d="M120.991,255.02c4.378,18.611,18.91,76.877,34.048,99.584c10.974,16.452,36.668,54.997,100.966,54.997
				s89.993-38.545,100.966-54.997c15.138-22.707,29.67-80.973,34.048-99.584c10.718-3.055,18.586-12.937,18.586-24.619v-34.133
				c0-4.71-3.823-8.533-8.533-8.533c-4.71,0-8.533,3.823-8.533,8.533v34.133c0,4.702-3.831,8.533-8.533,8.533
				c-4.002,0-7.467,2.782-8.328,6.682c-0.085,0.401-4.804,21.376-11.563,44.621c-0.179-0.009-0.333-0.102-0.512-0.102
				c-0.631,0-63.753-0.188-104.422-16.461c-2.048-0.802-4.301-0.802-6.349,0c-40.602,16.247-103.663,16.461-104.294,16.461
				c-0.222,0-0.41,0.111-0.631,0.128c-6.767-23.253-11.486-44.245-11.571-44.646c-0.862-3.9-4.326-6.682-8.329-6.682
				c-4.702,0-8.533-3.831-8.533-8.533v-34.133c0-4.71-3.823-8.533-8.533-8.533c-4.71,0-8.533,3.823-8.533,8.533v34.133
				C102.406,242.083,110.273,251.965,120.991,255.02z M256.006,290.749c37.282,13.918,87.509,16.06,102.912,16.384
				c-5.001,15.292-10.615,29.696-16.145,37.999c-10.257,15.386-31.599,47.403-86.767,47.403c-55.168,0-76.51-32.017-86.767-47.403
				c-5.53-8.294-11.145-22.699-16.137-37.99C168.334,306.817,218.63,304.701,256.006,290.749z"/>
			<path d="M511.571,500.771l-8.533-25.6c-10.436-31.275-37.7-48.307-151.151-48.503c-6.98-3.482-32.333-16.171-32.333-16.171
				c-3.063-1.519-6.758-1.075-9.37,1.161l-54.178,46.438l-54.178-46.438c-2.603-2.236-6.315-2.688-9.37-1.161l-32.333,16.179
				c-7.791,0.009-15.138,0.111-22.135,0.282c-0.486-0.085-0.93-0.29-1.451-0.29c-0.683,0-1.28,0.239-1.92,0.384
				c-92.134,2.637-116.036,19.345-125.645,48.12l-8.533,25.6c-1.493,4.471,0.93,9.301,5.402,10.795
				c4.48,1.502,9.301-0.93,10.795-5.402l8.533-25.6c4.668-13.978,10.923-32.597,102.835-36.198v0.58
				c-14.677,3.814-25.6,17.067-25.6,32.922c0,18.825,15.309,34.133,34.133,34.133s34.133-15.309,34.133-34.133
				c0-15.855-10.923-29.107-25.6-32.922v-1.041c5.436-0.102,11.034-0.162,16.99-0.162h0.077c1.323,0,2.637-0.307,3.814-0.896
				l29.073-14.549l52.446,44.962v30.208c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533V473.26l52.446-44.962
				c21.291,10.641,29.047,14.447,32.888,15.181v0.256c124.681,0,131.78,21.291,136.969,36.83l8.533,25.6
				c1.195,3.576,4.523,5.837,8.098,5.837c0.887,0,1.801-0.137,2.697-0.435C510.64,510.073,513.064,505.243,511.571,500.771z
				 M153.606,477.868c0,9.412-7.654,17.067-17.067,17.067c-9.412,0-17.067-7.654-17.067-17.067s7.654-17.067,17.067-17.067
				C145.951,460.801,153.606,468.456,153.606,477.868z"/>
			<path d="M281.606,221.868c-4.71,0-8.533,3.823-8.533,8.533s3.823,8.533,8.533,8.533h8.533c0,4.71,3.823,8.533,8.533,8.533
				s8.533-3.823,8.533-8.533h8.533c4.71,0,8.533-3.823,8.533-8.533s-3.823-8.533-8.533-8.533H281.606z"/>
			<path d="M196.272,221.868c-4.71,0-8.533,3.823-8.533,8.533s3.823,8.533,8.533,8.533h8.533c0,4.71,3.823,8.533,8.533,8.533
				c4.71,0,8.533-3.823,8.533-8.533h8.533c4.71,0,8.533-3.823,8.533-8.533s-3.823-8.533-8.533-8.533H196.272z"/>
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

                            <?php include 'attendence/paraatt.php'; ?>

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
                            <tr><td style="width:40%">Date:</td><td><select style="width:60%" id="date"><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option>
                                                                    <option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option>13<option></option>
                                                                    <option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option>
                                                                    <option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
                                                                    <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></td></tr>
                            <tr><td style="width:40%">Search by name:</td><td><input type="text" id="sername"></td></tr>
                            <tr><td style="width:40%">Search by ID :</td><td><input type="text" id="serId"></td></tr>
                            <tr><td style="width:40%">Status:</td><td><input type="text" id="status"></td></tr>
                            <tr><td style="width: 60%"<br><br></td><td><button onclick="searchAttends(document.getElementById('date').value,document.getElementById('sername').value,document.getElementById('serid').value)" >Search</button></td></tr>
                        </table>
                        
                    </div>
                    
<!--                    <div class="recordstyl">
                       ...;dfdsfsdfdf 
                    </div>-->
                    
                </div>
            </div>
            <div class="right_side_bar"> 

                <br>
                <br>
                <ul id="nav">
                <button onclick="loadParadata()"/>
                
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
                 
               
                </ul>
    </body>
    <script type="text/javascript" src="jst.js"></script>
</html>
