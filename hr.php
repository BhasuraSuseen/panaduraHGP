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

if(isset($_POST["search1"])){
	
	$sql1 = "SELECT * FROM employee WHERE F_Name ='{$_POST["search"]}'";
	$result = mysqli_query($conn, $sql1);
	
	
     //output data of each row
 if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "<a class='employee_detail'> First Name : " . $row["F_Name"]. "<br>". "Last Name : " . $row["L_Name"]. "<br>". "Birth Date : " .$row["B_Date"]. "<br>". "Address : " .$row["Address"]. "<br>". "Contact NO : " .$row["Contact_NO"]. "<br>". "Gender : " .$row["Gender"]. "<br>". "NIC NO : " .$row["NIC_NO"]. "<br>". "Salary : " .$row["Salary"]. "<br></a>";
    }
 }else{
   echo "0 results";
}
}



mysqli_close($conn);
?>
</div>
</body>
</html>

