<?php

$result = mysqli_query($conn,"SELECT * FROM letter");

?>
<html>
<head>
<title>Letters List</title>

<script language="javascript" src="del_let/users.js" type="text/javascript"></script>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:100%;">
<table border="0" cellpadding="10" cellspacing="1" width="100%" class="tblListForm">
<tr class="listheader">
<td></td>
<td>ID</td>
<td>Date</td>
<td>Subject</td>
<td>Address</td>
<td>Type</td>
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
<td><input type="checkbox" name="users[]" value="<?php echo $row["letter_id"]; ?>" ></td>

<td><?php echo $row["letter_id"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["subject"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["type"]; ?></td>
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
</body></html>