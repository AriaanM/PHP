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
      
	<form action="extpaniek.php" method="POST">
		Welk dier zou je nooit als huisdier willen hebben? 	<input type="text" name="dier"> <hr>
		Wie is de belangrijkste persoon in je leven?		<input type="text" name="persoon"><hr>
		In welk land zou je graag willen wonen?				<input type="text" name="wonen"><hr>
		Wat doe je als je je verveelt?						<input type="text" name="verveelt"><hr>
		Met welk speelgoed speelde je als kind het meest?	<input type="text" name="kind"><hr>
		Bij welke docent spijbel je het liefst?				<input type="text" name="docent"><hr>
		Als je EUR 100.000,- had, wat zou je dan kopen?		<input type="text" name="geld"><hr>
		Wat is je favoriete bezigheid?						<input type="text" name="bezigheid"><hr>
	  &nbsp <input type="submit" value="Submit">
	</form>
</div>


</body>
</html>