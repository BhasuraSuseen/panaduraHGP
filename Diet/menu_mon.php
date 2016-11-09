<html>
<body>

<?php
include 'datetime.php';
include 'connect.php';

$monc_s1br = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Br, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S1Br <> 0.000");
$monc_s1lu  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Lu, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S1Lu <> 0.000");
$monc_s1di  = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Di, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id WHERE C_S1Di <> 0.000");

$monc_s2br = mysqli_query($conn, "SELECT item.Item_name, mon_breakfast.C_S2, item.unit FROM item INNER JOIN mon_breakfast ON item.Item_id = mon_breakfast.Item_id WHERE C_S2 <> 0.000");
$monc_s2lu  = mysqli_query($conn, "SELECT item.Item_name, mon_lunch.C_S2, item.unit FROM item INNER JOIN mon_lunch ON item.Item_id = mon_lunch.Item_id WHERE C_S2 <> 0.000");
$monc_s2di  = mysqli_query($conn, "SELECT item.Item_name, mon_dinner.C_S2, item.unit FROM item INNER JOIN mon_dinner ON item.Item_id = mon_dinner.Item_id WHERE C_S2 <> 0.000");

$monc_s3br = mysqli_query($conn, "SELECT item.Item_name, mon_breakfast.C_S3, item.unit FROM item INNER JOIN mon_breakfast ON item.Item_id = mon_breakfast.Item_id WHERE C_S3 <> 0.000");
$monc_s3lu  = mysqli_query($conn, "SELECT item.Item_name, mon_lunch.C_S3, item.unit FROM item INNER JOIN mon_lunch ON item.Item_id = mon_lunch.Item_id WHERE C_S3 <> 0.000");
$monc_s3di  = mysqli_query($conn, "SELECT item.Item_name, mon_dinner.C_S3, item.unit FROM item INNER JOIN mon_dinner ON item.Item_id = mon_dinner.Item_id WHERE C_S3 <> 0.000");

$monpbr = mysqli_query($conn, "SELECT item.Item_name, mon_breakfast.Patients, item.unit FROM item INNER JOIN mon_breakfast ON item.Item_id = mon_breakfast.Item_id WHERE Patients <> 0.000");
$monplu  = mysqli_query($conn, "SELECT item.Item_name, mon_lunch.Patients, item.unit FROM item INNER JOIN mon_lunch ON item.Item_id = mon_lunch.Item_id WHERE Patients <> 0.000");
$monpdi  = mysqli_query($conn, "SELECT item.Item_name, mon_dinner.Patients, item.unit FROM item INNER JOIN mon_dinner ON item.Item_id = mon_dinner.Item_id WHERE Patients <> 0.000");

$mondbr = mysqli_query($conn, "SELECT item.Item_name, mon_breakfast.DD, item.unit FROM item INNER JOIN mon_breakfast ON item.Item_id = mon_breakfast.Item_id WHERE DD <> 0.000");
$mondlu  = mysqli_query($conn, "SELECT item.Item_name, mon_lunch.DD, item.unit FROM item INNER JOIN mon_lunch ON item.Item_id = mon_lunch.Item_id WHERE DD <> 0.000");
$monddi  = mysqli_query($conn, "SELECT item.Item_name, mon_dinner.DD, item.unit FROM item INNER JOIN mon_dinner ON item.Item_id = mon_dinner.Item_id WHERE DD <> 0.000");

$monsbr = mysqli_query($conn, "SELECT item.Item_name, mon_breakfast.Staff, item.unit FROM item INNER JOIN mon_breakfast ON item.Item_id = mon_breakfast.Item_id WHERE Staff <> 0.000");
$monslu  = mysqli_query($conn, "SELECT item.Item_name, mon_lunch.Staff, item.unit FROM item INNER JOIN mon_lunch ON item.Item_id = mon_lunch.Item_id WHERE Staff <> 0.000");
$monsdi  = mysqli_query($conn, "SELECT item.Item_name, mon_dinner.Staff, item.unit FROM item INNER JOIN mon_dinner ON item.Item_id = mon_dinner.Item_id WHERE Staff <> 0.000");




		





<body>
</html>
