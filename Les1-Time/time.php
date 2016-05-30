	<?php
	$hour = date("H:i");
	
	if ($hour >= "12:00" && $hour <= "17:59") {
	$image = "afternoon";
	}

	elseif ($hour >= "18:00" && $hour <= "23:59") {
	$image = "evening"; 
	}
	
	elseif ($hour >= "24:00" && $hour <= "5:59") {
	$image = "night";	
	}
	
	elseif ($hour >= "06:00" && $hour <= "11:59") {
	$image = "morning";
	}
	?>
	<!DOCTYPE HTML>


<HTML>
	<Head>
	<title>
		Good <?=$image?>
	
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</Head>
	<body style="background-image:url('<?=$image?>.jpg');">

	<div>

		<h1 class="<?=$image?>"> Good <?=$image?>, right now it's <?=$hour?></h1>
	</div>

	</body>

	</HTML>
	</DOCTYPE>