<?php include("header.php") ?>

<script src="/didapi/library/OpenLayers/OpenLayers.js"></script>
<style type="text/css">
	img 
	{ 
		max-width:none; 
	}
	
	.span3
	{ padding-left: 10px; }
</style> 

<div class="row">
	<div class="span3">
		<h2>Notre localisation</h2>
		<div id="StFlo" style="height:250px; width:250px;"></div>
	</div>
	<div class="span9">
		<h2>Présentation</h2>
		<div id="presentation_text">	
			<p>Didier Alessandroni est apiculteur depuis 2009, suite à une reconversion professionnelle.</p>
			<p>Passionné de nature, cet ingénieur généraliste de formation a décidé de contribuer, à sa manière, à la conservation de la biodiversité et à la sensibilisation à une alimentation plus saine, mais toute aussi bonne !</p>
			<p>Il s'est pris d'affection pour les abeilles et a pour souhait d'aider à préserver cet insecte, essentiel à l'équilibre de la terre et des hommes.</p>
			<p>Installé dans le Loiret (région Centre), il a débuté, en 2009, avec une dizaine de ruches qui lui ont permis de produire ses premiers kilos de miel.</p>
			<p>2011 a vu le cheptel s'étendre à près d'une centaine de ruches et notre apiculteur retourner en formation théorique et pratique.</p> 
			<p>2012 et 2013 ont mené à une consolidation du cheptel, portant celui-ci à près de 150 ruches, répartis entre 5 ruchers.<p>
			<p>Les premières récoltes arrivent, les pots se remplissent, la dynamique est lancé !</p>
		</div>
		
		<div class="contact">
			<h2>Nous Contacter</h2>
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
					<label>Tél:</label>         02 38 36 38 92<br>
				</p>
				
				<p>
					<label>Mobile:</label>      06 76 19 30 83<br>
				</p>
				
				<p>
					<label>Courriel:</label>    <a href="mailto:didapi@sfr.fr">didapi@sfr.fr</a>
				</p>
			</p>
		</div>
	</div>
</div>

<script type="text/javascript">    
	$(function(){
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
	});
</script>

<?php include('footer.php'); ?>

