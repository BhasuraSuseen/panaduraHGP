<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
<div class="hr_body">
<?php

require "connect.php";

if(isset($_POST["submit"])){
    
$sql = "INSERT INTO employee (NIC_NO, F_Name, L_Name, B_Date, Address, Contact_NO, Gender, E_Type, 
FE_Date, EC_Date, FGP_Date, SGP_Date, CGP_Date, Salary, SI_Date, Remarks)
VALUES ('{$_POST["nic"]}', '{$_POST["fname"]}', '{$_POST["lname"]}', '{$_POST["bdate"]}', '{$_POST["address"]}', '{$_POST["cnumber"]}', '{$_POST["gender"]}'
, '{$_POST["etype"]}', '{$_POST["fedate"]}', '{$_POST["ecdate"]}', '{$_POST["fgpdate"]}', '{$_POST["sgpdate"]}', '{$_POST["cgpdate"]}', '{$_POST["salary"]}', '{$_POST["sidate"]}', '{$_POST["remarks"]}')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
</div>
</body>
</html>

