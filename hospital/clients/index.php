<?php
	require_once "index.logic.php";
	include "../common/header.php";

?>
	<h1>Clients</h1>
	

	<p class="options"><a href="create.php">create</a></p>
	<table>
	 <thead>
	  <tr>
	  	<th> Clients </th>
	 	<th> </th>
	 	<th> </th> 
	  </tr>
	 </thead>
	
<?php
	foreach($clients as $client){
?>
	<tr>
		<td><?=$client['client_name']?></td>
		<td class="center"><a href="edit.php?id=<?=$client['id']?>">edit</a></td>
		<td class="center"><a href="delete.php?id=<?=$client['id']?>">delete</a></td>
	</tr>

<?php }	
	include "../common/footer.php";
?>