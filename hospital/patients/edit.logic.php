<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['pid'])):
			// Get Patient for pid
			$db = new mysqli('localhost','root','','hospital');
			$pid = $db->escape_string($_GET["pid"]);
			
			$query = "select * from patient where pid=$pid";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();		
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$pid = $db->escape_string($_POST["pid"]);
		$name = $db->escape_string($_POST["name"]);
		$gender = $db->escape_string($_POST["gender"]);
		$species_id = $db->escape_string($_POST["species_id"]);
		$status = $db->escape_string($_POST["status"]);
		
		// Prepare query and execute
		$query = "update patient set name='$name', gender='$gender' ,species_id='$species_id', status='$status' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>