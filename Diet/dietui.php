<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="styles/global.css" />
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <script src="vertical-timeline/js/modernizr.js"></script> <!-- Modernizr -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="attendence/jst.js"></script>
        <script type="text/javascript">

            

        </script>
    </head>
    <body>
        <?php
        require "connect.php";
        include 'datetime.php';
        session_start();
        ?>
        <div class="all_container">
            <div class="left_side_bar" >
                <div class="left_side_bar_top">                   
                </div>
                <div class="left_side_bar_down" >
                    <ul id="nav">
                        <li class="admin_panel_list" style="border-left: 4px solid #455A64;">
						<i> <img src="images/food-1.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>                               
					

                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="middle_top">
                    <div class="middle_top_left">
                        <img src="images/oms4.png"  style= "padding: 5px;">
                    </div>
                    <div class="middle_top_middle">			
                        <div id="clockbox"></div>
                    </div>
                    <div class="middle_top_right">
                        
                    </div>
                </div>


                <div class="middle_left" >
                    <center>
                        <br><br>
                        <form name="counts" method="post" action="count.php">
                            <table align="center">
                                <thead>
                                    <tr>
                                        <th colspan=2>Enter the counts <br><br></th></thead>
                                </tr>
                                <tr><td>Children S1</td><td> 
                                        <input type="number" name="children_s1" size="20" required></td></tr>
                                <tr><td>Children S2</td><td> 
                                        <input type="number" name="children_s2" size="20" required></td></tr>
                                <tr><td>Children S3</td><td> 
                                        <input type="number" name="children_s3" size="20" required></td></tr>
                                <tr><td>Patients</td><td> 
                                        <input type="number" name="patients" size="20" required></td></tr>
                                <tr><td>Diabetics Patients </td><td> 
                                        <input type="number" name="diabetics_patients" size="20" required></td></tr>
                                <tr><td>Staff</td><td> 
                                        <input type="number" name="staff" size="20" required></td></tr>
                                </td></tr>
                                <tr><td>Meal</td><td>
                                        <input type="radio" name="meal" value="BR" onclick="myFunction()" required> Breakfast
                                        <input type="radio" name="meal" value="Lu" onclick="myFunction()" required> Lunch
                                        <input type="radio" name="meal" value="Di" onclick="myFunction()" required> Dinner
                                        <br><br>
                                    </td></tr>
                                <tr><td colspan=2 align="center">
                                    <input type="submit" value="Calculate" name="submit">
									<input type="reset" value="Reset"></td></tr>
                                </thead>
                            </table>

                        </form>
                    </center>

                    <?php
                    
//                    $meal = $_POST['meal'];
//                    $c_s1 = $_POST['children_s1'];
//                    $c_s2 = $_POST['children_s2'];
//                    $c_s3 = $_POST['children_s3'];
//                    $patients = $_POST['patients'];
//                    $dd = $_POST['diabetics_patients'];
//                    $staff = $_POST['staff'];
//
//                    if (isset($_POST["submit"])) {
//                        $sql = "INSERT INTO counts(Date,meal,C_S1,C_S2,C_S3,Patients,DD,Staff) VALUES('$date3','$meal','$c_s1','$c_s2','$patients','$dd','$staff')";
//                        if (mysqli_query($conn, $sql)) {
//                            echo "New record created successfully";
//                        } else {
//                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//                        }
//                    }
                    ?>


                </div>
                <div class="middle_right">

                </div>
            </div>
            <div class="right_side_bar" id="menu_view">
            </div>	












        </div>


        <div id="pop_box_att_1">
            <?php include 'menu_tue.php'; ?>			
        </div>

    </div>



    <script>
        $(document).ready(function () {
            $('#open_hr_1').click(function () {
                $('#pop_background').fadeIn();
                $('#pop_box_hr_1').fadeIn();
                return false;
            });
            $('#open_att_1').click(function () {
                $('#pop_background').fadeIn();
                $('#pop_box_att_1').fadeIn();
                return false;
            });
            $('#open_hr_2').click(function () {
                $('#pop_background').fadeIn();
                $('#pop_box_hr_2').fadeIn();
                return false;
            });
            $('#pop_background').click(function () {
                $('#pop_background').fadeOut();
                $('#pop_box_hr_1').fadeOut();
                $('#pop_box_att_1').fadeOut();
                $('#pop_box_hr_2').fadeOut();

                return false;
            });
        });
    </script>

</body>
</html>
