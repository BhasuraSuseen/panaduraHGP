
        <link rel="stylesheet" type="text/css" href="./styles/attend styl.css" media="screen" />
        <?php include 'datetime.php';?>


        <div class="attall_container">

            <div class="attcontainer">
                <div class="middle_left">
                    <div style="height: 650px; overflow-y: scroll">
                       
                            <?php include 'paraatt.php'; ?>
                    
                    </div>
                </div>
                <div class="attmiddle_right">
                    <!--<button class="button button1">GA</button>-->
                    <div class="attrecordstyl"> 
                            <table border="0" style="width: 100%">
                        <tr>Employee Attendence Day Summary</tr>
                                
                        <tr><td style="width:40%">Day</td><td><?php echo $yearmon;?><select class="attstyled-select" style="width:30%" id="day1">


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
</table>
                        <table border="0" style="width: 100%">
                            <tr><td style="width:70%">Employees Present :</td><td><strong id="st1"></strong></td></tr>
                            <tr><td style="width:70%">Employees absent :</td><td><strong id="st2"></strong></td></tr>
                            <tr><td style="width:70%">Total Employees :</td><td><strong id="st3"></strong></td></tr>
                            <tr><td style="width:60%;"><button class="attblack_btn" onclick="loadParadata(document.getElementById('day1').value)">Get Report</button></td></tr>

                        </table>
                    </div>
                    <br><br>
                    <div class="attrecordstyl"> 

                        <table border="0" style="width: 100%">
                            <tr>Employee came</tr>
                            <tr><td style="width:40%">Day:</td><td><?php echo $yearmon;?><select class="attstyled-select" style="width:30%" id="day">


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
                            <tr><td style="width:40%">Search by ID :</td><td><input type="text" id="serId"></td></tr>
                            <tr><td style="width:40%">Status:</td><td><label id="st6"></label></td></tr>
                            <tr><td><button class="attblack_btn" onclick="searchAttends(document.getElementById('day').value, document.getElementById('serId').value)" >Search</button></td></tr>
                        </table>
                        <br>
                             <a href="/attendence/reportPara.php">  <input class="attblack_btn" type="submit" value="Download Pdf"></a> 


                    </div>

                </div>
            </div>

    <script type="text/javascript" src="attendence/jst.js"></script>

