<?php include("./admin_header.php") ?>

<style> 
#apiary_form
{
	-webkit-transition: width 2s ease, height 2s ease;
	-moz-transition: width 2s ease, height 2s ease;
	-o-transition: width 2s ease, height 2s ease;
	-ms-transition: width 2s ease, height 2s ease;
	transition: width 2s ease, height 2s ease;
	/*-webkit-transition:width 2s, height 2s, -webkit-transform 2s; Safari */
}

#apiary_form:focus
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
		<div id="apiary_form_wrapper">
			<form id="apiary_form" style="display: none;">
				<fieldset>
					<legend>Nouveau rucher</legend>
					<label>Nom<label/><input type="text" name="name" id="name" />
					<label>Localisation</label/><input type="text" name="location" id="location" /><br>
					<input type="submit" id="apiary_form_submit" name="apiary_form_submit" class="button" />
				</fieldset>
			</form>
			<button id="create_apiary">Créer un nouveau rucher</button>
		</div>

		<div id="apiary_table_wrapper"/>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		
		refreshApiaryTable();

		$('#create_apiary').click(function(e){
			$('#apiary_form').show();
		});
		
		$('#apiary_form_submit').click(function(e){
			e.preventDefault();
			$form = $(this).closest('form');

			$.ajax({
       				url: '../services/apiary/save.php',
                        	type: 'POST',
                        	data: $("#apiary_form").serialize(),
                        	dataType: 'json',
                        	success: function(responseJson) {
                                	$form.before("<p>"+responseJson.message+"</p>");
					refreshApiaryTable();
                        	},
 
                      	error: function() {
                                	$form.before("<p>There was an error processing your request.</p>");
                        	}
                	});
		});

	});
	
	function refreshApiaryTable(){
		$('#apiary_table_wrapper').load(decodeURIComponent('../services/apiary/list.php', ''));
	}

	function refreshBeehiveTable(apiaryId){
		$('#beehive_table_wrapper' + apiaryId).load(decodeURIComponent('../services/beehive/list.php?apiary_id=' . apiaryId , ''));
	}

</script>

<?php include("../footer.php") ?>
