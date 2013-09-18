<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style text="text/css">
	.apiary-title {
		border: 1px solid gray;
		margin:  0 0 0 0;
		padding: 5px;	
	}
	.apiary-header {
		border-top-right-radius: 5px;
		border-top-left-radius: 5px;
		background-color: lightgray;
	}
	
	.apiary-content {
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
	include_once('../../globals.php');
			
	$allApiaries = ApiaryRepository::FindAll();
	
	echo '<div id="accordion" class="ui-accordion ui-widget ui-helper-reset">';	
	
	foreach($allApiaries as $apiary)
	{
		echo '<h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons rucher-title rucher-header">' . $apiary->GetId() . '-' . $apiary->GetName() . ' a ' . $apiary->GetLocation() . '</h3>';
		echo '<div class="rucher-content ui-accordion-content ui-helper-reset ui-widget-content">';
		echo '<p>Détail du rucher : <a href="./rucher/detail.php?id=' . $apiary->GetId() . '">Lien</a></p>';

		$allBeehives = 0;
		
		if(isset($apiary->id))
		{
			$allBeehives = BeehiveRepository::FindByApiary($apiary->id);
		}
		
		if (isset($allBeehives) && !empty($allBeehives))
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
				
			foreach($allBeehives as $beehive)
			{
				echo '<tr>';
				echo '<td><input type="checkbox" class="selectCheckboxFor' . $beehive->GetId() . '" value="' . $beehive->GetId() . '" name="selected_beehive_apiary' . $apiary->GetId() . '[]" /></td>';
				echo '<td>' . $beehive->GetId() . '</td>';
				echo '<td>' . $beehive->GetName() . '</td>';
				echo '<td><a href="./ruche/detail.php?id=' .  $beehive->GetId() . '">Lien</a></td>';
				echo '</tr>';
			}
			echo '</tbody>
			</table>';
		}
		echo '<button id="delete_beehives_of' . $apiary->GetId() . '" onclick="deleteBeehiveFor(' . $apiary->GetId() . ')">Supprimer</button><button id="moveBeehivesOf' . $apiary->GetId() . 'toOther">Déplacer</button><select id="destinationListForApiary' . $apiary->GetId() . '"><option>Rucher1</option><option>Rucher2</option><option>Rucher3</option></select><br>';
		echo '<form id="new_beehive_form' . $apiary->GetId() . '"  style="display: none;">
		<legend>Ajouter une nouvelle ruche au rucher</legend>
		<fieldset>
			<label>Numéro</label><input type="text" name="name" />
			<input type="hidden" value="' . $apiary->GetId() .'" name="apiary_id" id="apiary_id" />
			<button type="button" id="create_beehive' .  $apiary->GetId() . '" onclick="createBeehiveFor(' .  $apiary->GetId() . ')">Créer la ruche</button>
			
		</fieldset>
	</form>
	<button id="add_beehive_to_apiary' .  $apiary->GetId() . '" onclick="showBeehiveForm(' . $apiary->GetId() . ')">Ajouter une ruche</button>';
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
		$('#accordion').accordion({
			collapsible: true,
			autoHeight: false
		});
		$('.apiary').draggable();
		$('.apiary').droppable();
		$('.apiary').sortable();
	});
	
	function deleteBeehiveFor(apiaryId) {
		
		$('.selectCheckboxFor' + apiaryId).each(function(){
			if($(this).is('checked')){
				$.get('../includes/ajax/delete_ruche.php', { ruche_id: $(this).val() }.done(function() {
						$('#delete_beehives_of' + apiaryId).before("<p>Success</p>");
					}).fail(function() {
						$('#delete_beehives_of' + apiaryId).before("<p>There was an error processing your request.</p>");
					})
				);	
			}
		});
    	}
	

	function createBeehiveFor(apiaryId)
	{
		$form = $('#new_beehive_form' + apiaryId);
		
		$.ajax({
			url: '../includes/ajax/save_beehive.php',
			type: 'POST',
			data: $('#new_beehive_form' + apiaryId).serialize(),
			dataType: 'json',
			success: function(responseJson) {
				$form.before("<p>" + responseJson.message + "</p>");
				refreshBeehiveTable(apiaryId);
			},
			error: function() {
				$form.before("<p>There was an error processing your request.</p>");
			}	
		});
	}

	function showBeehiveForm(apiaryId){
		$('#new_beehive_form' + apiaryId).show();
	}

	function refreshBeehiveTable(apiaryId)
	{
		$('#beehive_table_wrapper' + apiaryId).load('../includes/ajax/load_beehive_list.php?apiary_id=' + apiaryId, '');
	}
</script>

