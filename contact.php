<?php include("header.php") ?>

<script src="./library/OpenLayers/OpenLayers.js"></script>
<style type="text/css">
	img 
	{ 
		max-width:none; 
	}
	
	.span3 { padding-left: 10px; }
</style> 

<div class="row-fluid">
	<div class="span3">
		<h2>Notre localisation</h2>
		<div id="StFlo" style="height:250px; width:250px;"></div>
	</div>
	
	<div class="span9">
		<h1>Contactez-nous</h1>
		<form id="contact_form">
			<fieldset>
				<legend>Veuillez utiliser le formulaire suivant pour nous contacter</legend>
				<label>Nom</label><input type="text" name="name" id="name" placeholder="Votre nom" />
				<label>Prénom</label><input type="text" name="firstname" id="firstname" placeholder="Votre prénom" />
				<label>Courriel</label><input type="email" name="email" id="email" placeholder="Votre adresse courriel" />
				<label>Tél</label><input type="tel" name="phone" id="phone" placeholder="Votre numéro de tél" />
				<label>Commentaires</label><textarea name="comment" id="comment" rows="10" cols="40" style="width:50%;" placeholder="Vos commentaires"></textarea><br>
				<input id="add_contact_submit" type="submit" name="submit" class="button"/>	
			</fieldset>
		</form>
		
		
		<div class="contact">
			<h2>Nous Contacter directement</h2>
			<p>
				<p>
					<label>Adresse:</label>     25, route de Villemurlin<br>
				</p>
				
				<p>
					<label>Ville:</label>       Saint-Florent le Jeune<br>
				</p>
				
				<p>
					<label>Code postal:</label> 45600<br>
				</p>
				
				<p>
					<label>Téléphone:</label>         02 38 36 38 92<br>
				</p>
				
				<p>
					<label>Mobile:</label>      06 76 19 30 83<br>
				</p>
				
				<p>
					<label>Courriel:</label>    <a href="mailto:didapi@orange.fr">didapi@orange.fr</a>
				</p>
			</p>
		</div>
	</div>
	
    <script type="text/javascript">
		$(function(){
			locateSaintFlorent();
			
			$('#add_contact_submit').click(function(e){
				e.preventDefault();  
				$form = $(this).closest('form');

				// if you need to then wrap this ajax call in conditional logic
				$('textarea.ckeditor').each(function () {
				   var $textarea = $(this);
				   $textarea.val(CKEDITOR.instances[$textarea.attr('name')].getData());
				});
				
				$.ajax({
				  url: './services/contact/save.php',
				  type: 'POST',
				  data: $("#contact_form").serialize(),
				  dataType: 'json',
				  success: function(responseJson) {
					 $form.before("<p>"+responseJson.message+"</p>");
					 refreshContactTable();
				  },
				  error: function() {
					 $form.before("<p>There was an error processing your request.</p>");
				}
				});
			});         
		});
		
		function locateSaintFlorent()
		{
			stMap = new OpenLayers.Map( 'StFlo');
			mapOSMLayer = new OpenLayers.Layer.OSM("Simple OSM Map");
			stMap.addLayer(mapOSMLayer);
			
			var targetProj = new OpenLayers.Projection("EPSG:900913");
			var sourceProj = new OpenLayers.Projection("EPSG:4326");
			
			var position = new OpenLayers.LonLat(2.476043,47.689428);
			
			var markers = new OpenLayers.Layer.Markers( "Markers" );
			markers.addMarker(new OpenLayers.Marker(position));
			stMap.addLayer(markers);
			
			var center = position.transform(
					sourceProj,
					targetProj
				);
			
			stMap.setCenter(center, 6);
		}
	</script>
</div>

<?php include("footer.php") ?>
