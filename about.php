<?php include("header.php") ?>

<script src="/didapi/library/OpenLayers/OpenLayers.js"></script>

<div class="row">
	<div class="span3">
	</div>
	<div class="span9">
		<div id="demoMap" style="height:400px;"></div>
		<div id="presentation_text">	
			<p>Didier Alessandroni est un apiculteur depuis 2009, suite à une reconversion professionnelle.</p>
			<p>Passionné de nature, cet ingénieur généraliste de formation a décidé de contribuer, à sa manière, à la conservation de la biodiversité et à la sensibilisation à une alimentation plus saine, mais toute aussi bonne !</p>
			<p>Il s’est pris d’affection pour les abeilles et a pour souhait d’aider à préserver cet insecte, essentiel à l’équilibre de la terre et des hommes.</p>
			<p>Installé dans le Loiret (région Centre), il a débuté, en 2009, avec une dizaine de ruches qui lui ont permis de produire ses premiers kilos de miel.</p>
			<p>2011 a vu le cheptel s’étendre à près d’une centaine de ruches et notre apiculteur retourner en formation théorique et pratique.</p> 
			<p>Les premières récoltes arrivent, les pots se remplissent, la dynamique est lancée…</p>
		</div>
	</div>
</div>

<script type="text/javascript">
	map = new OpenLayers.Map("demoMap");
	var mapOSMLayer = new OpenLayers.Layer.OSM();
	map.addLayer(mapOSMLayer);
	
	var latitude  = 47.689653;
	var longitude = 2.47462900000005;
	var zoom      = 16;
	
	var fromProjection = new OpenLayers.Projection("ESPG:4326");
	var position       = new OpenLayers.LonLat(longitude, latitude).transform(fromProjection, map.getProjectionObject());
	
	var markers = new OpenLayers.Layer.Markers( "Markers" );
	markers.addMarker(new OpenLayers.Marker(position));
	map.addLayer(markers);
	
	map.setCenter(position, zoom);
</script>

<?php include("footer.php") ?>