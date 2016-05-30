<?php
		$db = new mysqli('localhost','root','','hospital');
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$gender = $db->escape_string($_POST["gender"]);
		$species_id = $db->escape_string($_POST["species_id"]);
		$client_id = $db->escape_string($_POST["client_id"]);
		$status = $db->escape_string($_POST["status"]);
		

		// Prepare query and execute
		$query = "INSERT INTO patient (name , gender , species_id , client_id , status) VALUES ('$name', '$gender' , $species_id , $client_id ,'$status')";

		$result = $db->query($query);
		header("Location: ./");
	}

		$query1 = "SELECT * FROM species";
		$result1 = $db->query($query1);
		$selectbox = $result1->fetch_all(MYSQLI_ASSOC);

		$query2 ="SELECT * FROM client";
		$result2 = $db->query($query2);
		$selectbox2 = $result2->fetch_all(MYSQLI_ASSOC);

	    // Tell the browser to go back to the index page.


?>