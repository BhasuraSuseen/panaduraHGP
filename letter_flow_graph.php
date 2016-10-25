
require "connect.php";

  $query = "SELECT * FROM letter WHERE letter_id ='1234567891'";

  $result = mysqli_query($con,$query);

  $rows = array();
  while($r = mysqli_fetch_array($result)) {
    $rows[] = $r;
  }
  echo json_encode($rows);
			     
