<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
	require_once('../../library/RedBeanORM/rb.php');
	include_once('../../globals.php');
			
	R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	
	$rucher_id = $_GET["rucher_id"];
	$allRuches = 0;
	
	if(isset($rucher_id))
	{
		$allRuches = R::find('ruche', ' rucher_id = :rucher_id', array(':rucher_id' => $rucher_id));
	}
	
	if (isset($allRuches))
	{
		echo utf8_encode('<table class="table" style="width: 100%;">
			<thead>
				<th>Id</th>
				<th>Numéro</th>
				<th>Modifier</th>
			</thead>
			<tbody>');
		foreach($allRuches as $ruche)
		{
			echo '<tr>';
			echo '<td>' . $ruche->id . '</td>';
			echo '<td>' . utf8_encode($ruche->name); . '</td>';
			echo '<td><a href=./ruche/detail.php?id=' .  $ruche->id . '</td>';
			echo '</tr>';
		}
	echo '</tbody>
	</table>';
	}
echo utf8_encode('<form id="new_ruche_form' . $rucher_id . '"  style="display: none;">
	<legend>Ajouter une nouvelle ruche au rucher</legend>
	<fieldset>
		<label>Numéro</label><input type="text" name="name" />
		<input type="hidden" value="' . $rucher_id .'" name="rucher_id" id="rucher_id" />
		<button type="button" id="create_ruche' .  $rucher_id . '" onclick="createRucheFor(' .  $rucher_id . ')">Créer la ruche</button>
		
	</fieldset>
</form>
<button id="add_ruche_to_rucher' .  $rucher_id . '" onclick="showRucheForm(' . $rucher_id . ')">Ajouter une ruche</button>');

?>

