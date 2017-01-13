
        <link rel="stylesheet" type="text/css" href="./styles/attend styl.css" media="screen" />
        <?php include 'datetime.php';?>
   

    <body> 
        
        
        
        <div class="attall_container">

            <div class="attcontainer">
                <div class="attmiddle_left">
                    <div style="height: 650px">
                
                            <?php include 'ebatt.php'; ?>
                       
                    </div>
                </div>
                <div class="attmiddle_right">
                    <!--<button class="button button1">GA</button>-->
                    <div class="attrecordstyl">
                            
                        <table border="0" style="width: 100%">
                            
                            <tr><td style="width:70%">Employees Present </td><td><strong id="st1"></strong></td></tr>
                            <tr><td style="width:70%">Employees absent </td><td><strong id="st2"></strong></td></tr>
                            <tr><td style="width:70%">Total Employees </td><td><strong id="st3"></strong></td></tr>
                            <tr><td style="width:60%;"><button class="attblack_btn" onclick="loadEbdata()">Summary</button></td></tr>

                        </table>
                    </div>
                    <br><br>
                    <div class="recordstyl"> 

                        <table border="0" style="width: 100%">
                            <tr>Search Employee Attendence</tr>
                            <tr><td style="width:40%">Day</td><td><?php echo $yearmon;?><select class="attstyled-select" style="width:30%" id="day">


                                        <?php
                                        for ($x = 1; $x <= 30; $x++) {
                                            if ($x < 10) {
                                                ?>
                                                <option>0<?php echo $x; ?></option>

                                            <?php } else if ($x >= 10) { ?>

                                                <option><?php echo $x; ?></option>

                                                <?php
                                            }
                                        }
                                        ?>

                                </td></tr>
                            <tr><td style="width:30%">Search by ID </td><td><input type="text" id="serId"></td></tr>
                            <tr><td style="width:30%">Status</td><td><label id="st6"></label></td></tr>
                            <tr><td><button class="attblack_btn" onclick="searchAttends(document.getElementById('day').value, document.getElementById('serId').value)" >Search</button></td></tr>
                        </table>
                        <br>
                      <!-- <button class="attblack_btn" onclick="getpdf()">pdf</button>
 <form action="/attendence/report.php" method="post">-->
                        <a href="/attendence/report.php">  <input type="submit" value="Download Pdf"></a> 
                        
                          
                    
                    </div>

                </div>
            </div>

    </body>
        <script type="text/javascript" src="./attendence/jst.js"></script>
       


  

