			<label for ="species">Species:</label>
			<select name="species_id">
			<?php foreach($selectbox as $species){ ?>
				<option value="<?=$species['species_id']?>"> <?=$species['species'];?></option>
			<?php } ?>
			</select>
		</div>
		<div>
			<label for ="species">Client:</label>
			<select name="client_id">
			<?php foreach($selectbox2 as $client){ ?>
				<option value="<?=$client['client_id']?>"> <?=$client['client_name'];?></option>
			<?php } ?>
			</select>