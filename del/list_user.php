<?php

$result = mysqli_query($conn,"SELECT * FROM users");

?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<script language="javascript" src="del/users.js" type="text/javascript"></script>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Username</td>
<td>Admin Type</td>
<td>NIC No.</td>
<td>EB No.</td>
<td></td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_assoc($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="users[]" value="<?php echo $row["NIC_NO"]; ?>" ></td>

<td><?php echo $row["USERNAME"]; ?></td>
<td><?php echo $row["ADMIN"]; ?></td>
<td><?php echo $row["NIC_NO"]; ?></td>
<td><?php echo $row["EB"]; ?></td>
<td><?php echo"<a class='link' href='del/edit_user.php?id=". $row['NIC_NO'] ."'>Edit</a>" ; ?></td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="6"> <input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>
</tr>
</table>
</form>
</div>
<?php
function edit(){
if (isset($_POST[$row["NIC_NO"]])){
	echo $row["NIC_NO"];
	echo $_SESSION['nic'];
}
}
?>
</body></html>