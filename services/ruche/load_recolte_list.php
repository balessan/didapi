<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
	require_once('../../../library/RedBeanORM/rb.php');
	include_once('../../../globals.php');
			
	R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	
	$ruche_id = $_GET["ruche_id"];
	$allRuches = 0;
	
	if(isset($ruche_id))
	{
		$allRecoltes = R::find('recolte', ' ruche_id = :ruche_id', array(':ruche_id' => $ruche_id));
	}
	
	if (isset($allRecoltes) && $allRecoltes != 0 && !empty($allRecoltes))
	{
		echo '<table class="table" style="width: 100%;">
			<thead>
				<th>Id</th>
				<th>Date</th>
				<th>Type</th>
				<th>Nombre de hausses</th>
			</thead>
			<tbody>';

		foreach($allRecoltes as $recolte)
		{
			echo '<tr>';
			echo '<td>' . $recolte->id . '</td>';
			echo '<td>' . $recolte->date . '</td>';
			echo '<td>' . $recolte->type_miel . '</td>';
			echo '<td>' . $recolte->nombre_hausses . '</td>';
			echo '</tr>';
		}
		echo '</tbody></table>';
	}
?>

