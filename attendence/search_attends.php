
                        <table border="0" style="width: 100%">
                            <tr>Employee came</tr>
                            <tr><td style="width:40%">Date:</td><td><select style="width:60%" id="day">


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
                            <tr><td style="width:40%">Status:</td><td><label id="st5"></label></td></tr>
                            <tr><td style="width: 60%"<br><br></td><td><button onclick="searchAttends(document.getElementById('day').value,document.getElementById('serId').value)" >Search</button></td></tr>
                        </table>