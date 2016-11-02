<html>
    <body>
        
        <?php
        //if(isset($_POST['submit'])){
        $day = $_POST['day'];
        $type = $_POST['type'];

        if($day == "tuesday") {
        include 'menu_tue.php';
        }else if($day == "monday"){
			include 'menu_mon.php';
		} else if($day == "wednesday"){
			include 'menu_wed.php';
		}else if($day == "thursday"){
			include 'menu_thu.php';
		}else if($day == "friday"){
			include 'menu_fri.php';
		}

         ?>
    </body>
</html>

