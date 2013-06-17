<?php
	require('../../library/RedBeanORM/rb.php');
		
	R::setup('mysql:host=localhost;
			dbname=didapi','root','');
	
	$allRuchers = R::findAll('rucher', '');
?>

<table class="table" style="width: 70%;">
	<thead>
		<th>Id</th>
		<th>Numero</th>
		<th>Localisation</th>
		<th>Liste de ruche</th>
		<th>Modifier</th>
	</thead>
	<tbody>
	<?php
		foreach($allRuchers as $rucher)
		{
			echo '<tr>';
			echo '<td>' . $rucher->id . '</td>';
			echo '<td>' . $rucher->name . '</td>';
			echo '<td>' . $rucher->location . '</td>';
			echo '<td><button onclick="refreshRucheTable(' . $rucher->id . ')">Liste des ruches associées</button>';
			echo '<td><a href="./ruche/detail.php?id=' . $rucher->id . '">Lien</a></td>';
			echo '</tr>';
			echo '<tr><td colspan="5">
				<div id="ruche_table_wrapper' . $rucher->id . '"/>
			      </td></tr>';
		}
	?>	
	</tbody>
</table>

<script type="text/javascript">
	function createRucheFor(rucherId)
	{
		e.preventDefault();
		$form = $(this).closest('form');
		
		$.ajax({
			url: '../includes/ajax/save_ruche.php?rucher_id=' + rucherId,
			type: 'POST',
			data: $('#rucher_form' + rucherId).serialize(),
			dataType: 'json',
			success: function(responseJson) {
				$form.before("<p>" + responseJson.message + "</p>");
				refreshRucheTable()
			}	
		});
	}

	function showRucheForm(rucherId){
		$('#new_ruche_form' + rucherId).show();
	}

	function refreshRucheTable(rucherId)
	{
		$('#ruche_table_wrapper' + rucherId).load('../includes/ajax/load_ruche_list.php?rucher_id=' + rucherId, '');
	}
</script>
