<?php
require "../connect.php";
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn,"DELETE FROM letter WHERE letter_id='" . $_POST["users"][$i] . "'");
}
header("Location:list_letter.php");
?>