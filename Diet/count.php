<?php
include './datetime.php';
include './connect.php';


$meal = $_POST['meal'];
$c_s1 = $_POST['children_s1'];
$c_s2 = $_POST['children_s2'];
$c_s3 = $_POST['children_s3'];
$patients = $_POST['patients'];
$dd = $_POST['diabetics_patients'];
$staff = $_POST['staff'];

if (isset($_POST["submit"])) {
    $sql = "INSERT INTO counts(Date,meal,C_S1,C_S2,C_S3,Patients,DD,Staff) VALUES('$date3','$meal','$c_s1','$c_s2','$c_s3','$patients','$dd','$staff')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>