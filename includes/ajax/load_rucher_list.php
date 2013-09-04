<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style text="text/css">
	.rucher-title {
		border: 1px solid gray;
		margin:  0 0 0 0;
		padding: 5px;	
	}
	.rucher-header {
		border-top-right-radius: 5px;
		border-top-left-radius: 5px;
		background-color: lightgray;
	}
	
	.rucher-content {
		border-bottom:    1px solid gray;
		border-right:  1px solid gray;
		border-left:   1px solid gray;
		padding: 10px;
		border-bottom-right-radius: 5px;
		border-bottom-left-radius: 5px;
		margin-bottom: 20px;
		height: 100%;
	}

	#accordion {
		margin-top: 20px;
	}

	.ui-accordion-content {
		margin-bottom: 10px;	
	}
	
	.ui-accordion .ui-accordion-content{
		overflow: visible !important;
	}
</style>

<?php
	require('../../library/RedBeanORM/rb.php');
	include_once('../../globals.php');
			
	R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	
	$allRuchers = R::findAll('rucher', '');
	
	echo '<div id="accordion" class="ui-accordion ui-widget ui-helper-reset">';	
	
	foreach($allRuchers as $rucher)
	{
		echo '<h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons rucher-title rucher-header">' . $rucher->id . '-' . $rucher->name . ' a ' . $rucher->location . '</h3>';
		echo '<div class="rucher-content ui-accordion-content ui-helper-reset ui-widget-content">';
		echo '<p>Détail du rucher : <a href="./rucher/detail.php?id=' . $rucher->id . '">Lien</a></p>';

		$allRuches = 0;
		
		if(isset($rucher->id))
		{
			$allRuches = R::find('ruche', ' rucher_id = :rucher_id', array(':rucher_id' => $rucher->id));
		}
		
		if (isset($allRuches))
		{
			echo '<h3>Liste des ruches associées au rucher</h3>';
			echo '<table class="table" style="width: 100%;">
				<thead>
					<th>Sélectionner</th>
					<th>Id</th>
					<th>Numéro</th>
					<th>Modifier</th>
				</thead>
				<tbody>';
				
			foreach($allRuches as $ruche)
			{
				echo '<tr>';
				echo '<td><input type="checkbox" class="selectCheckboxFor' . $rucher->id . '" value="' . $ruche->id . '" name="selected_ruche_rucher' . $rucher->id . '[]" /></td>';
				echo '<td>' . $ruche->id . '</td>';
				echo '<td>' . $ruche->name . '</td>';
				echo '<td><a href="./ruche/detail.php?id=' .  $ruche->id . '">Lien</a></td>';
				echo '</tr>';
			}
			echo '</tbody>
			</table>';
		}
		echo '<button id="delete_ruches_of' . $rucher->id . '" onclick="deleteRucheFor(' . $rucher->id . ')">Supprimer</button><button id="moveRuchesOf' . $rucher->id . 'toOther">Déplacer</button><select id="destinationListForRucher' . $rucher->id . '"><option>Rucher1</option><option>Rucher2</option><option>Rucher3</option></select><br>';
		echo '<form id="new_ruche_form' . $rucher->id . '"  style="display: none;">
		<legend>Ajouter une nouvelle ruche au rucher</legend>
		<fieldset>
			<label>Numéro</label><input type="text" name="name" />
			<input type="hidden" value="' . $rucher->id .'" name="rucher_id" id="rucher_id" />
			<button type="button" id="create_ruche' .  $rucher->id . '" onclick="createRucheFor(' .  $rucher->id . ')">Créer la ruche</button>
			
		</fieldset>
	</form>
	<button id="add_ruche_to_rucher' .  $rucher->id . '" onclick="showRucheForm(' . $rucher->id . ')">Ajouter une ruche</button>';
		echo '</div>';
	}
	
	echo '</ul>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '</div>';
?>

<script type="text/javascript">
	$(function() {
		$("#accordion").accordion({
			collapsible: true,
			autoHeight: false
		});
		$('.rucher').draggable();
		$('.rucher').droppable();
		$('.rucher').sortable();
	});
	
	function deleteRucheFor(rucherId) {
		
		$('.selectCheckboxFor' + rucherId).each(function(){
			if($(this).is('checked')){
				$.get('../includes/ajax/delete_ruche.php', { ruche_id: $(this).val() }.done(function() {
						$('#delete_ruches_of' + rucherId).before("<p>Success</p>");
					}).fail(function() {
						$('#delete_ruches_of' + rucherId).before("<p>There was an error processing your request.</p>");
					})
				);	
			}
		});
    	}
	

	function createRucheFor(rucherId)
	{
		$form = $(this).closest('form');
		
		$.ajax({
			url: '../includes/ajax/save_ruche.php',
			type: 'POST',
			data: $('#new_ruche_form' + rucherId).serialize(),
			dataType: 'json',
			success: function(responseJson) {
				$form.before("<p>" + responseJson.message + "</p>");
				refreshRucheTable(rucherId);
			},
			error: function() {
				$form.before("<p>There was an error processing your request.</p>");
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

