<?php
	include_once('../../globals.php');
	
	try {	
		$entity = new Entity();
		$allContacts = $entity->GetAllEntities('contact');
	
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>

<table class="table" style="width: 70%;">
	<thead>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Courriel</th>
		<th>Téléphone</th>
		<th>Commentaire</th>
	</thead>
	<tbody>
	<?php
		foreach($allContacts as $contact)
		{
			echo '<tr>';
			echo '<td>' . $contact->name . '</td>';
			echo '<td>' . $contact->firstname . '</td>';
			echo '<td>' . $contact->email . '</td>';
			echo '<td>' . $contact->phone . '</td>';
			echo '<td>' . $contact->comment . '</td>';
			echo '</tr>';
		}
	?>	
	</tbody>
</table>
