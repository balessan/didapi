<?php include("../header.php") ?>

<style> 
#rucher_form
{
	-webkit-transition: width 2s ease, height 2s ease;
	-moz-transition: width 2s ease, height 2s ease;
	-o-transition: width 2s ease, height 2s ease;
	-ms-transition: width 2s ease, height 2s ease;
	transition: width 2s ease, height 2s ease;
	/*-webkit-transition:width 2s, height 2s, -webkit-transform 2s; Safari */
}

#rucher_form:focus
{
	height: 400px;
	width: 100%;
}
</style>


<div class="row">
	<div class="span3">
	</div>
	<div class="span9">
		<h1>Notre liste de ruchers</h1>
		<div id="rucher_form_wrapper">
			<form id="rucher_form" style="display: none;">
				<fieldset>
					<legend>Nouveau rucher</legend>
					<label>Nom<label/><input type="text" name="name" id="name" />
					<label>Localisation</label/><input type="text" name="location" id="location" /><br>
					<input type="submit" id="rucher_form_submit" name="rucher_form_submit" class="button" />
				</fieldset>
			</form>
			<button id="create_rucher">Créer un nouveau rucher</button>
		</div>

		<div id="rucher_table_wrapper"/>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$.ajaxSetup({contentType: 'Content-Type: text/html; charset=UTF-8'});

		$.ajaxSetup({
        		'beforeSend' : function(xhr) {
             			xhr.overrideMimeType('text/html; charset=UTF-8');
        			},
		});
		
		refreshRucherTable();

		$('#create_rucher').click(function(e){
			$('#rucher_form').show();
		});
		
		$('#rucher_form_submit').click(function(e){
			e.preventDefault();
			$form = $(this).closest('form');

			$.ajax({
       				url: '../includes/ajax/save_rucher.php',
                        	type: 'POST',
                        	data: $("#rucher_form").serialize(),
                        	dataType: 'json',
                        	success: function(responseJson) {
                                	$form.before("<p>"+responseJson.message+"</p>");
					refreshRucherTable();
                        	},
 
                      	error: function() {
                                	$form.before("<p>There was an error processing your request.</p>");
                        	}
                	});
		});

	});
	
	function refreshRucherTable(){
		$('#rucher_table_wrapper').load(decodeURIComponent('../includes/ajax/load_rucher_list.php', ''));
	}

	function refreshRucheTable(rucherId){
		$('#ruche_table_wrapper' + rucherId).load(decodeURIComponent('includes/ajax/load_ruche_list.php?rucher_id=' . rucherId , ''));
	}

</script>

<?php include("../footer.php") ?>
