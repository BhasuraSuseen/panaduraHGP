<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./styles/attend styl.css" media="screen" />
        <?php include 'datetime.php';?>
    </head>
    <body> 
        <div class="attall_container">

            <div class="attcontainer">
                <div class="attmiddle_left">
                    <div style="height: 650px">
                        <div style="overflow-y: scroll">
                            <?php include 'doctoratt.php'; ?>
                        </div>
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
                            <tr><td style="width:40%">Day</td><td><?php echo $yearmon;?><select class="styled-select" style="width:30%" id="day">


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
                            <tr><td style="width:40%">Search by ID </td><td><input type="text" id="serId"></td></tr>
                            <tr><td style="width:40%">Status</td><td><label id="st6"></label></td></tr>
                            <tr><td><button class="attblack_btn" onclick="searchAttends(document.getElementById('day').value, document.getElementById('serId').value)" >Search</button></td></tr>
                        </table>
                        <br>
                            <button class="attblack_btn" type="submit" onclick="callme();">Download</button>


                    </div>

                </div>
            </div>
 <script type="text/javascript" src="jst.js"></script>
            <script>
                function loadEbdata() {
    checkBrowser();
       
    obj.onreadystatechange = function() {


       if (obj.readyState === 4 && obj.status === 200) {
            //alert(obj.responseText);
            var text = obj.responseText;

            document.getElementById('st1').innerHTML = JSON.parse(text).a;
            document.getElementById('st2').innerHTML = JSON.parse(text).b;
            document.getElementById('st3').innerHTML = JSON.parse(text).c;

        }
    };
    obj.open("POST", "./attendence/viewEbArp.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send();

}

                </script>
    </body>
   
</html>
