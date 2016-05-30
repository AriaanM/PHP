<?php


?>

<html>
<head>
<title>
Madlips
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="kop">
<H1> Mad Lips </H1>
</div>
<div class="header">
	<ul>
		<li> <a href="indexpaniek.php"> Er heerst paniek... </a></li>
		<li> <a href="indexonkunde.php"> Onkunde </a></li>
	</ul>
</div>

<div class="frame">
      
	<form action="extonkunde.php" method="POST">
		Wat zou je graag willen kunnen?<input type="text" name="kunnen"> <hr>
		Met welke persoon kun je goed opschieten?<input type="text" name="persoon"><hr>
		Wat is je favoriete getal?<input type="text" name="getal"><hr>
		Wat heb je altijd bij je als je op vakantie gaat?<input type="text" name="vakantie"><hr>
		Wat is je beste persoonlijke eigenschap?<input type="text" name="eigenschap"><hr>
		Wat is je slechtste persoonlijke eigenschap?<input type="text" name="eigenschap2"><hr>
		Wat is het ergste dat je kan overkomen?<input type="text" name="ergste"><hr>

	 	 &nbsp <input type="submit" value="Submit">
	</form>
</div>


</body>
</html>