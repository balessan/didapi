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
			echo '<td><button onclick="refreshRucheList(' . $rucher->id . ')">Liste des ruches associées</button>';
			echo '<td><a href="./ruche/detail.php?id=' . $rucher->id . '">Lien</a></td>';
			echo '</tr>';
			echo '<tr><td><table class="ruche_table_wrapper' . $rucher->id . '"/></td></tr>';
		}
	?>	
	</tbody>
</table>

<script type="text/javascript">
	function refreshRucheList(rucheId)
	{
		$('.ruche_table_wrapper' + rucheId).load('../includes/ajax/load_ruche_list.php?rucher_id=' + rucheId, '');
	}
</script>
