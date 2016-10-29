
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/atend styl.css" />

    </head>
    <body> 
        <div class="all_container">

            <div class="middle_left">
                <?php include 'attendence/ebatt.php'; ?>

            </div>
      
        <div class="middle_right">
            <!--<button class="button button1">GA</button>-->
            <div class="recordstyl"> 
                <table border="0" style="width: 100%">
                    <tr><td style="width:70%">Employees Present :</td><td><strong id="st1"></strong></td></tr>
                    <tr><td style="width:70%">Employees absent :</td><td><strong id="st2"></strong></td></tr>
                    <tr><td style="width:70%">Total Employees :</td><td><strong id="st3"></strong></td></tr>
                    <tr><td style="width:60%;"><button class="black_btn" onclick="loadParadata()">Get Report</button></td></tr>
                </table>
            </div>
            <br><br>
            <div class="recordstyl"> 

                <table border="0" style="width: 100%">
                    <tr>Employee came</tr>
                    <tr><td style="width:40%">Day:</td><td><?php echo $yearmon;?><select style="width:30%" id="day">


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

                    <tr><td style="width:40%">Search by ID :</td><td><input type="text" name="serId"></td></tr>
                    <tr><td style="width:40%">Status:</td><td><input type="text" name="status"></td></tr>
                    <button class="black_btn" onclick="searchatt()">Search</button>
                </table>
            </div>

        </div>
    </div>

</body>
<script type="text/javascript" src="jst.js"></script>
</html>

