<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/global.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
    <div class="hr_body">
        <?php
        require "connect.php";

        $nic = $_POST['nic'];
        $fname =$_POST['fname'];
        $lname = $_POST['lname'];
        $bday = $_POST['bdate'];
        $address = $_POST['address'];
        $cno = $_POST['cnumber'];
        $gender = $_POST['gender'];
        //$etype = $_POST['etype'];
        $fedate = $_POST['fedate'];
        $ecdate = $_POST['ecdate'];
        $fgpdate = $_POST['fgpdate'];
        $cgpdate = $_POST['cgpdate'];
        $sgpdate = $_POST['sgpdate'];
        $salary = $_POST['salary'];
        $sidate = $_POST['sidate'];
        $remarks = $_POST['remarks'];


        if (isset($_POST["submit"])) {
            $sql = "UPDATE employee set Address='$address', Contact_NO='$cno', FGP_Date='$fgpdate', SGP_Date='$sgpdate', CGP_Date='$cgpdate', Salary='$salary', SI_Date='$sidate', Remarks='$remarks' where NIC_NO='$nic'";
if (mysqli_query($conn , $sql)) {
    echo "New record Updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


?>
</div>
</body>
</html>
