<?php
	require('../../library/RedBeanORM/rb.php');
	include_once('../../globals.php');
	include('../../header.php');
			
	R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	
	try {
		$ruche_id = $_GET['id'];

		if (isset($ruche_id))
		{	
			$ruche = R::load('ruche', $ruche_id);
			
			
?>
<div class="span3">
	<h2>Menu</h2>
</div>
<div class="span9">
	<?php echo "<h1>" . $ruche['name'] . "</h1>"; ?>
	<?php echo $ruche; ?><br>

	<div><button class="btn" id="btn-recolte">Ajouter une récolte</button><br></div>

	<div id="ruche_recolte_wrapper"></div>

	<br><div><button class="btn" id="btn-controle">Ajouter un contrôle</button></div>
	
	<div id="ruche_controle_wrapper"></div>
	
	<div id="recolte_form_wrapper">	
		<form id="recolte_form">
			<fieldset>
				<legend>Nouvelle récolte</legend>
				<label>Date</label><input type="date" name="recolte-date" id="recolte-date" />
				<label>Type de miel</label>
				<select name="recolte-type" id="recolte-type">
					<option>Toutes fleurs</option>
					<option>Forêt</option>
					<option>Printemps</option>
					<option>Chataîgner</option>
					<option>Acacia</option>
					<option>Sarrasin</option>
					<option>Pollinisation</option>
				</select>
				<label>Nombre de hausses</label><input type="number" name="recolte-hausse" id="recolte-hausse" /><br>
				<input type="hidden" value="<?php echo $ruche->id; ?>" name="recolte-ruche-id" id="recolte-ruche-id" />
				<input value="Valider" type="submit" id="recolte_form_submit" name="recolte_form_submit" class="button">
			</fieldset>
		</form>
	</div>

	<div id="controle_form_wrapper" style="display: none;">
		<form id="controle_form">
			<fieldset>
				<legend>Nouveau contrôle</legend>
				<label>Date</label><input type="date" class="small" value="05/09/2013" name="controle-date" id="controle-date" data-datepicker="datepicker" />
				<label>Traitement:</label>
					<label><input type="radio" name="controle-traitement" value="true">Oui</label>
					<label><input type="radio" name="controle-traitement" value="false">Non</label>
				<label>Type de traitement</label>
				<select name="controle-traitement-type" id="controle-traitement-type">
					<option>Apivar</option>
					<option>Apistant</option>
					<option>Taktic</option>
					<option>Clartan</option>
					<option>Autre</option>
				</select>
				<label>Nombre de cadres de couvains</label><input type="number" name="controle-couvains" id="controle-couvains" /><br>
				<label>Nourrissement:</label>
					<label><input type="radio" name="controle-nourrissement" value="true">Oui</label>
					<label><input type="radio" name="controle-nourrissement" value="false">Non</label>
				<label>Quantité (litres)</label><input type="number" name="controle-nourrissement-quantite" />
				<input type="hidden" value="<?php echo $ruche->id; ?>" name="controle-ruche-id" id="controle-ruche-id" />
			</fieldset>
		</form>
	</div>		
</div>
<?php
		}
		else {
			echo '<h1>Ruche Not Found</h1>';
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>
	
<script type="text/javascript">
	$(function() {
		refreshRecolteTable();
		refreshControleTable();
		

		$('#recolte-date').datepicker({
				format: 'mm-dd-yyyy'
		});
	
		$('#controle-date').datepicker({
				format: 'mm-dd-yyyy'
		});
		
		$('#recolte_form_wrapper').dialog({
			autoOpen: false,
			modal: true,
			width: 500,
			buttons: {
				"Valider": function() {
					$form = $(this).closest('form');
					
					$.ajax({
						url: '../../services/ruche/save_recolte.php',
						type: 'POST',
						data: $("#recolte_form").serialize(),
						dataType: 'json',
						success: function(responseJson) {
							$form.before("<p>"+responseJson.message+"</p>");
							$('#ruche_recolte_wrapper').before("<p>" + responseJson.message + "</p>");
							refreshRecolteTable();
						},
 
					error: function() {
							$('#recolte_form_wrapper').before("<p>There was an error processing your request.</p>");
						}
					});
					
					$(this).dialog("close");
		
				},
				Cancel: function() {
					$(this).dialog("close");
				}
			}		
		});

		$('#btn-recolte').click(function(e){
			$('#recolte_form_wrapper').dialog("open");
		});
		
		$('#controle_form_wrapper').dialog({
			autoOpen: false,
			modal: true
		});

		$('#btn-controle').click(function(e){
			$('#controle_form_wrapper').dialog("open");
		});	
		
		$('.btn-close').click(function(e){
			$(this).dialog("close");
		});	

		$('#recolte_form_submit').click(function(e){
			e.preventDefault();
			$form = $(this).closest('form');

			$.ajax({
       				url: '../../services/ruche/save_recolte.php',
                        	type: 'POST',
                        	data: $("#recolte_form").serialize(),
                        	dataType: 'json',
                        	success: function(responseJson) {
                                	$form.before("<p>"+responseJson.message+"</p><div style=\"text-align:right;\"><button class=\"btn-close\" Value=\"Fermer\">Fermer</button></div> ");
					refreshRecolteTable();
					$('#recolte_form').hide();
                        	},
 
                      	error: function() {
                                	$form.before("<p>There was an error processing your request.</p>");
                        	}
                	});
		});
		
		$('#controle_form_submit').click(function(e){
			e.preventDefault();
			$form = $(this).closest('form');

			$.ajax({
       				url: '../../services/ruche/save_controle.php',
                        	type: 'POST',
                        	data: $("#controle_form").serialize(),
                        	dataType: 'json',
                        	success: function(responseJson) {
                                	$form.before("<p>"+responseJson.message+"</p>");
					refreshControleTable();
					$('#controle_form').hide();
                        	},
 
                      	error: function() {
                                	$form.before("<p>There was an error processing your request.</p>");
                        	}
                	});
		});
	});

	function refreshRecolteTable() {
		$('#ruche_recolte_wrapper').load('../../services/ruche/load_recolte_list.php?ruche_id=' + $('#recolte-ruche-id').val(), '');
	}

	function refreshControleTable() {
		$('#ruche_controle_wrapper').load('../../services/ruche/load_controle_list.php?ruche_id=' + $('#controle-ruche-id').val(), '');
	}
</script>

<?php
	include('../../footer.php');	
?>
