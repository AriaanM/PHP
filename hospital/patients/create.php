<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for ="gender">Gender:</label>
			<input type="radio" id="gender" name="gender" value="Male"> Male
			<input type="radio" id="gender" name="gender" value="Female"> Female<br>
		</div>	
		<div>
			<label for ="species">Species:</label>
			<select name="species_id">
			<?php foreach($selectbox as $species){ ?>
				<option value="<?=$species['id']?>"> <?=$species['species'];?></option>
			<?php } ?>
			</select>
		</div>
		<div>
			<label for ="client">Client:</label>
			<select name="client_id">
			<?php foreach($selectbox2 as $client){ ?>
				<option value="<?=$client['id']?>"> <?=$client['client_name'];?></option>
			<?php } ?>
			</select>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>