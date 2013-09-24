<?php
	R::setup('mysql:host=localhost;
			dbname=didapi','root','');
			
	$allRuchers = R::findAll('rucher', '');
?>

<table class="table" style="width: 70%;">
	<thead>
		<th>Id</th>
		<th>Numero</th>
		<th>Localisation</th>
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
			echo '<td><a href=./rucher/detail.php?id=' .  $rucher->id . '</td>';
			echo '</tr>';
		}
	?>	
	</tbody>
	
	<form>
		<fieldset>
			<input id="new_rucher_submit" type="submit" name="submit" class="button" onClick="" />
		</fieldset>
	</form>
</table>
