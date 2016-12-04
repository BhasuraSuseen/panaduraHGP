<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="attendence/attend styl.css" media="screen" />
        <?php include 'datetime.php';?>
        
        <?php
        var_dump('<script type="text/javascript" src="jst.js"></script>');
        ?>
    </head>
    <body onlord="abc('Awa Awa')"> 
        
        
        
        <div class="all_container">

            <div class="container">
                <div class="middle_left">
                    <div style="height: 650px">
                        <div style="overflow-y: scroll">
                            <?php include 'ebatt.php'; ?>
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
                            <tr><td style="width:60%;"><button class="black_btn" onclick="loadEbdata()">Get Report</button></td></tr>

                        </table>
                    </div>
                    <br><br>
                    <div class="recordstyl"> 

                        <table border="0" style="width: 100%">
                            <tr>Employee came</tr>
                            <tr><td style="width:40%">Day:</td><td><?php echo $yearmon;?><select class="styled-select" style="width:30%" id="day">


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
                            <tr><td><button class="black_btn" onclick="searchAttends(document.getElementById('day').value, document.getElementById('serId').value)" >Search</button></td></tr>
                        </table>
                        <br>
                            <button class="black_btn" style="width: 150px" type="submit" onclick="callme();">Download</button>


                    </div>

                </div>
            </div>

    </body>
    
</html>
