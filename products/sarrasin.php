<?php include("../header.php") ?>

<div class="row-fluid">
	<div class="span4 products-photo" style="padding-top: 15px;">
		<img class="img-circle" src="<?php echo $include_path; ?>includes/img/pot/sarrasin.JPG" alt="Nos différents pots de miel de Sarrasin">
	</div>

	<div class="span8">
		<div class="row-fluid">
			<h1>Miel de Sarrasin</h1>
		</div>
		<div class="row-fluid">
			<h2>Description</h2>
			<p>
				Pendant un temps délaissée, la culture du sarrasin (Fagopyrum esculentum) ou blé noir connaît un regain d’intérêt depuis quelques années 
				en France. Et c’est plutôt une aubaine pour les butineuses car sa floraison est longue et plutôt régulière au cours de l’été. Son pollen 
				est réputé pour être très nutritif pour les abeilles, grâce auquel elle produisent un des miels les plus puissants de la palette 
				disponible.<br>
				Tout comme le miel de châtaigner, le miel de sarrasin ne laisse pas indifférent et est généralement utilisé dans la 
				confection du pain d’épices, auquel il apporte tout son caractère et sa force. 
			</p>
			<p>
				<p>
					<b>Aspect</b> : Sa belle couleur brun foncé est plus ou moins prononcé selon la cristallisation qui se fait assez lentement et est plutôt fine.<br>
				</p>
				<p>
					<b>Odeur</b> : A l’image de sa couleur franche, le miel de sarrasin dégage des arômes de céréales complètes, de pain noir, de sucre brun, voir de caramel sur le point de brûler ! 
				Son odeur animale est prononcée, avec un aspect presque fumé.
				</p>
				<p>
					<b>Goût</b> : Sa profondeur et sa densité en font un miel plein et généreux comme aucun autre. 
				Une saveur forte de pain complet, de céréales s’associe avec des pointes boisées, fumées et caramélisées.
				</p>
			</p>
			<h2>Le sarrasin</h2>
			<p>
				D'après Wikipédia, le sarrasin est une plante mellifère de la famille Polygonacées cultivée pour ses graines consommées en alimentation humaine et animale.<br>
			<p class="products-image"><img class="img-rounded" height="300" width="300" src="<?php echo $include_path; ?>includes/img/plant/sarrasin.jpg" /></p>
			<br>				
				Egalement appelé blé noir, il est intéressant de constater que cette plante, fournissant pourtant aux abeilles le pollen à l'origine d'un des miels les plus particuliers qui soit, soit de moins en moins cultivée en France. En effet, sa surface cultivée a baissé de 700 000 hectares à l'échelle du pays à tout juste 30 000 hectares à l'heure actuelle. <br><br>

				Même en Bretagne, pourtant le pays de la "galette de blé noir", sa culture s'étant pourtant étendu jusqu'à atteindre les 160 000 hectares dans les années 1960 atteint maintenant péniblement les 3 000 à 4 000 hectares. Il est intéressant de noter que pour pallier à ce manque de culture, le sarrasin est à l'heure actuelle importé principalement de Chine (et oui, encore...)
			</p>
			<p>
				Quantite:
				<select class="product-price-select">
					<option value="250" selected="selected">250g</option>
					<option value="500">500g</option>
					<option value="1000">1Kg</option>
				</select>
			</p>
			<!--<p>
				Prix:
				<span class="product-price-value"></span>
			</p>-->
		</div>
	</div>
</div>

<script type="text/javascript">
		$(function(){
			$possibleValues = ["3.50 euros", "6.00 euros", "11.00 euros"];
			$('.product-price-value').text(findPrice($('.product-price-select').val(), $possibleValues));
						
			$('.product-price-select').change(function(e){
				$('.product-price-value').text(findPrice($(this).val(), $possibleValues));
			});
		});
		
		
</script>

<?php include("../footer.php") ?>
