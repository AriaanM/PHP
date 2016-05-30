<?php
	require_once "index.logic.php";
	include "../common/header.php";


?>
	<h1>Patients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
			<th> id </th>
		<th><a href="?sort=name&ascdesc=<?=$ascdesc?>">Name</th></a>
		<th><a href="?sort=gender&ascdesc=<?=$ascdesc?>">Gender</th></a>
	
		<th><a href="?sort=status&ascdesc=<?=$ascdesc?>">Status</th></a>
		<th><a href="?sort=species&ascdesc=<?=$ascdesc?>">Species</th></a>
		<th><a href="?sort=client_name&ascdesc=<?=$ascdesc?>">Client</th>
			<th></th>
			<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient){
?>
			<tr>
				<td><?=$patient['pid']?></td>
				<td><?=$patient['name']?></td>
				<td><?=$patient['gender']?></td>
				<td><?=$patient['status']?></td>				
				<td><?=$patient['species']?></td>
				<td><?=$patient['client_name']?></td>
				<td class="center"><a href="edit.php?pid=<?=$patient['pid']?>">edit</a></td>
				<td class="center"><a href="delete.php?pid=<?=$patient['pid']?>">delete</a></td>
			</tr>

<?php
	}
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>	