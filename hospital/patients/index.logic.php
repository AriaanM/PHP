<?php
	
	$db = new mysqli('localhost','root','','hospital');
 	$query = "SELECT * FROM patient INNER JOIN client ON patient.client_id = client.id INNER JOIN species ON patient.species_id = species.id"; 

	$order = isset($_GET['sort']) ? $_GET['sort']: 'name';
	$ascdesc = isset($_GET['ascdesc']) ? $_GET['ascdesc'] : 'asc';

	if(isset($ascdesc) and $ascdesc == "asc"){
		$ascdesc = "desc";
	}else{
		$ascdesc = "asc";
	}

	$query .= " ORDER BY $order $ascdesc";
	
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>

