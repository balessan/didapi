<?php
	require_once('../../library/RedBeanORM/rb.php');
	
	R::setup('mysql:host=localhost;
			dbname=didapi','root','');
	
	$rucher_id = $_GET["rucher_id"];
	
	if(isset($rucher_id))
	{
		$allRuches = R::findAll('ruche', ' rucher_id = :rucher_id', array(':rucher_id' => $rucher_id));
	}
	echo "TOTO";
	if (isset($allRuches))
	{
	echo '<table class="table" style="width: 100%;">
		<thead>
			<th>Id</th>
			<th>Numero</th>
			<th>Modifier</th>
		</thead>
		<tbody>';
		foreach($allRuches as $ruche)
		{
			echo '<tr>';
			echo '<td>' . $ruche->id . '</td>';
			echo '<td>' . $ruche->name . '</td>';
			echo '<td><a href=./ruche/detail.php?id=' .  $ruche->id . '</td>';
			echo '</tr>';
		}
	echo '</tbody>
	</table>';
	}
echo '<form id="new_ruche_form' . $rucher_id . '"  style="display: none;">
	<legend>Ajouter une nouvelle ruche au rucher</legend>
	<fieldset>
		<label>Numéro</label><input type="text" name="name" />
		<input type="submit" id="create_ruche' .  $rucher_id . '" onclick="createRucheFor(' .  $rucher_id . ')" />
	</fieldset>
</form>
<button id="add_ruche_to_rucher' .  $rucher_id . '" onclick="showRucheForm(' . $rucher_id . '">Ajouter une ruche</button>';

?>
<script type="text/javascript">
	
</script>
