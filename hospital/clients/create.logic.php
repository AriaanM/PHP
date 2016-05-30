<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$client_name = $db->escape_string($_POST["client_name"]);
		
		// Prepare query and execute
		$query = "insert into client (client_name) values ('$client_name')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>