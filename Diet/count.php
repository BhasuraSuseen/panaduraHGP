<?php
include './datetime.php';
include './connect.php';

$monb = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Br,C_S2Br,C_S3Br,P_Br,DD_Br,S_Br, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");
$monl = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Lu,C_S2Lu,C_S3Lu,P_Lu,DD_Lu,S_Lu, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");
$mond = mysqli_query($conn, "SELECT item.Item_name, menu_mon.C_S1Di,C_S2Di,C_S3Di,P_Di,DD_Di,S_Di, item.unit FROM item INNER JOIN menu_mon ON item.Item_id = menu_mon.Item_id");


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

if($date4 == "Monday"){
 if($date == $date3 && $meal == "BR"){

		 while ($mb = mysqli_fetch_array($monb)):; 
				
				$result = ($mb[1]*$c_s1) + ($mb[2]*$c_s2) + ($mb[3]*$c_s3) + ($mb[4]*$patients) + ($mb[5]*$dd) + ($mb[6]*$staff);
				if($result != 0){
					echo $mb[0].' '.':'.$result.' '.$mb[7].'<br>';
					
				}
				
		 endwhile;
			
 }
if($date == $date3 && $meal == "Lu"){
	
					 while ($ml = mysqli_fetch_array($monl)):; 
						$result = ($ml[1]*$c_s1) + ($ml[2]*$c_s2) + ($ml[3]*$c_s3) + ($ml[4]*$patients) + ($ml[5]*$dd) + ($ml[6]*$staff);
						if($result != 0){
                        
                            echo $ml[0].' '.':'.$result.' '.$ml[7].'<br>';
						}
                     endwhile; 

 }
if($date == $date3 && $meal == "Di"){
	 
		 while ($md = mysqli_fetch_array($mond)):; 
				
                
				$result = ($md[1]*$c_s1) + ($md[2]*$c_s2) + ($md[3]*$c_s3) + ($md[4]*$patients) + ($md[5]*$dd) + ($md[6]*$staff);
				if($result != 0){
				echo $md[0].' '.':'.$result.' '.$md[7].'<br>';
				}
				
		 endwhile;        
 }	 
				
				
}				

?>
