<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
	include_once('../../../globals.php');
			
	R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	
	$ruche_id = $_GET["ruche_id"];
	$allControles = 0;
	
	if(isset($ruche_id))
	{
		$allControles = R::find('controle', ' ruche_id = :ruche_id', array(':ruche_id' => $ruche_id));
	}
	
	if (isset($allControles) && $allControles != 0 && !empty($allControles))
	{
		echo '<table class="table" style="width: 100%;">
			<thead>
				<th>Id</th>
				<th>Date</th>
				<th>Nombre de cadres de couvain</th>
				<th>Traitement</th>
				<th>Type de traitement</th>
				<th>Nourissement</th>
				<th>Quantité de nourissement</th>
			</thead>
			<tbody>';

		foreach($allControles as $controle)
		{
			echo '<tr>';
			echo '<td>' . $controle->id . '</td>';
			echo '<td>' . $controle->date . '</td>';
			echo '<td>' . $controle->nombre_cadres_couvains . '</td>';
			echo '<td>' . $controle->traitement . '</td>';
			echo '<td>' . $controle->traitement_type . '</td>';
			echo '<td>' . $controle->nourrissement . '</td>';
			echo '<td>' . $controle->nourrissement_quantite . '</td>';
			echo '</tr>';
		}
		echo '</tbody></table>';
	}
?>

