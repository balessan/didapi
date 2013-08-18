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
		<!--<div id="map" style="height:250px;"></div>-->
		<h1>Pr�sentation</h1>
		<div id="presentation_text">	
			<p>Didier Alessandroni est apiculteur depuis 2009, suite � une reconversion professionnelle.</p>
			<p>Passionn� de nature, cet ing�nieur g�n�raliste de formation a d�cid� de contribuer, � sa mani�re, � la conservation de la biodiversit� et � la sensibilisation � une alimentation plus saine, mais toute aussi bonne !</p>
			<p>Il s�est pris d�affection pour les abeilles et a pour souhait d�aider � pr�server cet insecte, essentiel � l��quilibre de la terre et des hommes.</p>
			<p>Install� dans le Loiret (r�gion Centre), il a d�but�, en 2009, avec une dizaine de ruches qui lui ont permis de produire ses premiers kilos de miel.</p>
			<p>2011 a vu le cheptel s��tendre � pr�s d�une centaine de ruches et notre apiculteur retourner en formation th�orique et pratique.</p> 
			<p>2012 et 2013 ont men� � une consolidation du cheptel, portant celui-ci � pr�s de 150 ruches, r�partis entre 5 ruchers.<p>
			<p>Les premi�res r�coltes arrivent, les pots se remplissent, la dynamique est lanc�e�</p>
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
					<label>T�l:</label>         02 38 36 38 92<br>
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
		
		//map.zoomToMaxExtent();
</script>

<?php include("footer.php") ?>