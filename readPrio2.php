

<?php
require_once "connect.php";
if(!empty($_POST["keyword"])) {
	$p1letters=mysqli_query($conn,"SELECT * FROM letter WHERE letter_id LIKE '" . $_POST["keyword"] . "%'");
	if(!empty($p1letters)){
		?>
		<ul id="letterid-list">
		<?php

		foreach($p1letters as $letter_id) {
			?>
			<li onClick="selectletterid('<?php echo $letter_id["letter_id"]; ?>');"><?php echo $letter_id["letter_id"]; ?></li>
			<?php 
		} ?>
		</ul>
		<?php 
	}
}
if(!empty($_POST["keyword1"])) {
	$p1letters=mysqli_query($conn,"SELECT * FROM letter WHERE subject LIKE '%" . $_POST["keyword1"] . "%'");
	if(!empty($p1letters)){
		?>
		<ul id="letterid-list">
		<?php

		foreach($p1letters as $subject) {
			?>
			<li onClick="selectletterid1('<?php echo $subject["letter_id"]; ?>');"><?php echo $subject["letter_id"]. "  |  ".$subject["subject"]; ?></li>
			<?php 
		} ?>
		</ul>
		<?php 
	}
}
if(!empty($_POST["keyword2"])) {
	$p1letters=mysqli_query($conn,"SELECT * FROM letter WHERE address LIKE '%" . $_POST["keyword2"] . "%'");
	if(!empty($p1letters)){
		?>
		<ul id="letterid-list">
		<?php

		foreach($p1letters as $address) {
			?>
			<li onClick="selectaddress('<?php echo $address["letter_id"]; ?>');"><?php echo $address["letter_id"]."  |  ".$address["address"]; ?></li>
			<?php 
		} ?>
		</ul>
		<?php 
	}
}
mysqli_close($conn); 
?>
