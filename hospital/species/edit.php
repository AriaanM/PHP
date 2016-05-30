<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit species</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$id?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="species" value="<?=$species['species']?>">
		</div>
	</form> 
<?php
	include "../common/footer.php";
?>