<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New species</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="species">
		</div>

	</form>
<?php 
	include "../common/footer.php";
?>