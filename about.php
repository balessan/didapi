<?php include("header.php") ?>

<script src="/didapi/library/OpenLayers/OpenLayers.js"></script>

<div class="row">
	<div class="span3">
	</div>
	<div class="span9">
		<div id="demoMap" style="height:400px;"></div>
		<div id="presentation_text">	
			<p>Didier Alessandroni est un apiculteur depuis 2009, suite � une reconversion professionnelle.</p>
			<p>Passionn� de nature, cet ing�nieur g�n�raliste de formation a d�cid� de contribuer, � sa mani�re, � la conservation de la biodiversit� et � la sensibilisation � une alimentation plus saine, mais toute aussi bonne !</p>
			<p>Il s�est pris d�affection pour les abeilles et a pour souhait d�aider � pr�server cet insecte, essentiel � l��quilibre de la terre et des hommes.</p>
			<p>Install� dans le Loiret (r�gion Centre), il a d�but�, en 2009, avec une dizaine de ruches qui lui ont permis de produire ses premiers kilos de miel.</p>
			<p>2011 a vu le cheptel s��tendre � pr�s d�une centaine de ruches et notre apiculteur retourner en formation th�orique et pratique.</p> 
			<p>Les premi�res r�coltes arrivent, les pots se remplissent, la dynamique est lanc�e�</p>
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