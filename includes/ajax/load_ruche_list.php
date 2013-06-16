<?php
	require('../../library/RedBeanORM/rb.php');
		
	R::setup('mysql:host=localhost;
			dbname=didapi','root','');
	
	$rucher_id = $GET['rucher_id'];
	
	if(isset($rucher_id))
	{
		$allRuches = R::findAll('ruche', ' rucher_id = :rucher_id', array(':rucher_id' => $rucher_id));
	}
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
		foreach($allRuches as $ruche)
		{
			echo '<tr>';
			echo '<td>' . $ruche->id . '</td>';
			echo '<td>' . $ruche->name . '</td>';
			echo '<td>' . $ruche->location . '</td>';
			echo '<td><a href=./ruche/detail.php?id=' .  $ruche->id . '</td>';
			echo '</tr>';
		}
	?>	
	</tbody>
</table>
<form id="new_ruche_form<?php $rucher_id ?>" style="diplay:none;"
<button class="display_ruche_form" onclick="displayRucheForm()">

<script type="text/javascript">
	
</script>
