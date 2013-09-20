<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
	include_once('../../globals.php');
			
	$apiary_id = $_GET["apiary_id"];
	$allBeehives = 0;
	
	if(isset($apiary_id))
	{
		$allBeehives = BeehiveRepository::FindByApiary($apiary_id);
	}
	
	if (isset($allBeehives))
	{
		echo utf8_encode('<table class="table" style="width: 100%;">
			<thead>
				<th>Id</th>
				<th>Numéro</th>
				<th>Modifier</th>
			</thead>
			<tbody>');
		foreach($allBeehives as $beehive)
		{
			echo '<tr>';
			echo '<td>' . $beehive->id . '</td>';
			echo '<td>' . utf8_encode($beehive->name); . '</td>';
			echo '<td><a href=./ruche/detail.php?id=' .  $beehive->id . '</td>';
			echo '</tr>';
		}
	echo '</tbody>
	</table>';
	}
echo utf8_encode('<form id="new_apiary_form' . $apiary_id . '"  style="display: none;">
	<legend>Ajouter une nouvelle ruche au rucher</legend>
	<fieldset>
		<label>Numéro</label><input type="text" name="name" />
		<input type="hidden" value="' . $apiary_id .'" name="apiary_id" id="apiary_id" />
		<button type="button" id="create_beehive' .  $apiary_id . '" onclick="createBeehiveFor(' .  $apiary_id . ')">Créer la ruche</button>
		
	</fieldset>
</form>
<button id="add_beehive_to_apiary' .  $apiary_id . '" onclick="showBeehiveForm(' . $apiary_id . ')">Ajouter une ruche</button>');

?>

