<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="../styles/global.css" />
        <meta charset=utf-8 />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    </head>
    <body> 
        <div class="all_container">
           
            <div class="cont">
               

                <div class="middle_left">

                    <br>

                    <div style="height: 600px" >

                        <div style="overflow-y: scroll">

                            <?php include 'attendence/ebatt.php'; ?>

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
				<button onclick="searchatt()">Search</button>
                        </table>
                    </div>
                    
                    <div class="recordstyl">
                        
                    </div>
                    
                </div>
            </div>
            <div class="right_side_bar"> 

                <ul id="nav">
                <button onclick="loadEbdata()"/>
                
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

                </ul>
    </body>
    <script type="text/javascript" src="jst.js"></script>
</html>
