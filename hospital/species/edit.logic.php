<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$species = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select species from species where id = $id";
			$result = $db->query($query);
		
			$species = $result->fetch_assoc();		
		endif;
		if ($species == NULL):

			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		$id = $db->escape_string($_GET["id"]);
		$species = $db->escape_string($_POST["species"]);
		
		$query = "UPDATE species SET species='$species' WHERE id=$id";
		$result = $db->query($query);
	
    header("Location: ./");
    exit();
	endif;

?>