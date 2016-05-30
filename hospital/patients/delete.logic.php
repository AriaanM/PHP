<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['pid'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$pid = $db->escape_string($_GET["pid"]);
			
			$query = "select * from patient where pid = $pid";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();	
			var_dump($query);	
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','root','','hospital');
		
			// Prepare data for delete
			$pid = $db->escape_string($_POST["pid"]);
	
			// Prepare query and execute
			$query = "delete * from patient where pid=$pid";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>