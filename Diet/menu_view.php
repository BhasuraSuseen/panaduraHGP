

        <?php
        //if(isset($_POST['submit'])){
        $day = $_POST['day'];
        $type = $_POST['type'];

        if ($day == "Tuesday") {
            include 'menu_tue.php';
        } else if ($day == "Monday") {
            include 'menu_mon.php';
        } else if ($day == "Wednesday") {
            include 'menu_wed.php';
        } else if ($day == "Thursday") {
            include 'menu_thu.php';
        } else if ($day == "Friday") {
            include 'menu_fri.php';
        }
        
        
        
        ?>




