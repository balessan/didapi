<?php include("header.php") ?>

<div class="row-fluid">
	<div class="span3">
		<h2>Barre de menus</h2>
	</div>
	
	<div class="span9">
		<h1>Contactez-nous</h1>
		<form id="contact_form"></h2>
			<fieldset>
				<legend>Veuillez utiliser le formulaire suivant pour nous contacter</legend>
				<label>Nom</label><input type="text" name="name" id="name" placeholder="Votre nom" />
				<label>Prénom</label><input type="text" name="firstname" id="firstname" placeholder="Votre prénom" />
				<label>Courriel</label><input type="email" name="email" id="email" placeholder="Votre adresse courriel" />
				<label>Tel</label><input type="tel" name="phone" id="phone" placeholder="Votre numéro de tél" />
				<label>Commentaires</label><textarea name="comment" id="comment" rows="10" cols="40" style="width:50%;" placeholder="Vos commentaires"></textarea><br>
				<input id="add_contact_submit" type="submit" name="submit" class="button" onClick="" />	
			</fieldset>
		</form>
		
		
		<div id="contact_table_wrapper">
			<div id="contact_table" />
			
		</div>
	</div>
	
    <script type="text/javascript">
		$(function(){
			refreshContactTable();
			
			$('#add_contact_submit').click(function(e){
				e.preventDefault();  
				$form = $(this).closest('form');

				// if you need to then wrap this ajax call in conditional logic
				$('textarea.ckeditor').each(function () {
				   var $textarea = $(this);
				   $textarea.val(CKEDITOR.instances[$textarea.attr('name')].getData());
				});
				
				$.ajax({
				  url: './ajax/save_contact.php',
				  type: 'POST',
				  data: $("#contact_form").serialize(),
				  dataType: 'json',
				  success: function(responseJson) {
					 $form.before("<p>"+responseJson.message+"</p>");
				  },
				  error: function() {
					 $form.before("<p>There was an error processing your request.</p>");
				}
				});
			});         
		});
		
		function refreshContactTable(){
			$('#contact_table_wrapper').load('./ajax/load_contact_list.php', function(){
			   setTimeout(refreshContactTable, 5000);
			});
		}
	</script>
</div>

<?php include("footer.php") ?>