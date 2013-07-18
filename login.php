<?php include('./header.php') ?>

<div class="row-fluid">
	<div class="span3">
		<h2>Barre de menus</h2>
	</div>
	
	<div class="span9">
		<h1>Se connecter</h1>
		<form id="login_form"></h2>
			<fieldset>
				<label>Identifiant</label><input type="text" name="username" id="username" placeholder="Identifiant..." />
				<label>Mot de passe</label><input type="password" name="password" id="password" placeholder="Mot de passe..." />
				
				<input id="login_submit" type="submit" name="submit" class="button" onClick="" />	
			</fieldset>
		</form>
	
		<h1>Create user</h1>
		<form id="user_form"></h2>
			<fieldset>
				<input id="create_user_submit" type="submit" name="submit" class="button" onClick="" />	
			</fieldset>
		</form>
	</div>
</div>

<script type="text/javascript">
		$(function(){
			manageUserCreation();
			manageUserLogin();
		});
		
		function manageUserLogin()
		{
			$('#login_submit').click(function(e){
					e.preventDefault();  
					$form = $(this).closest('form');
					
					$.ajax({
					  url: './includes/ajax/login_user.php',
					  type: 'POST',
					  data: $("#login_form").serialize(),
					  dataType: 'json',
					  success: function(responseJson) {
						 $form.before("<p>"+responseJson.message+"</p>");
						 document.location.href = "./admin/index.php";
					  },
					  error: function() {
						 $form.before("<p>There was an error processing your request.</p>");
					  }
					});
				});   
		}
		
		function manageUserCreation()
		{
			$('#create_user_submit').click(function(e){
				e.preventDefault();  
				$form = $(this).closest('form');
				
				$.ajax({
				  url: './includes/ajax/create_user.php',
				  type: 'POST',
				  data: $("#user_form").serialize(),
				  dataType: 'json',
				  success: function(responseJson) {
					 $form.before("<p>"+responseJson.message+"</p>");
				  },
				  error: function() {
					 $form.before("<p>There was an error processing your request.</p>");
				  }
				});
			});   
		}
	</script>

<?php include('./footer.php') ?>
