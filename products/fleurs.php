<?php include("../header.php") ?>

<div class="row-fluid">
	<div class="span4 products-photo" style="padding-top: 15px;">
		<img src="<?php echo $include_path; ?>includes/img/pot/fleurs.JPG" alt="Nos pots de miel de fleurs" class="img-circle" />
	</div>

	<div class="span8">
		<div class="row-fluid">
			<h1>Miel toutes fleurs</h1>
		</div>
		<div class="row-fluid">
			<h2>Description</h2>
			<p>
				Le miel “Toutes fleurs” porte bien son nom puisqu’il est en effet constitué de différents types de pollens et de nectars en fonction des 
				fleurs qui se trouvent à proximité des ruchers. Il peut être produit durant toute la saison, entre deux grandes floraisons par exemple. 
				Ce miel n’étant pas composé à partir d’une espèce de fleur en majorité, il n’est pas “typé” comme peuvent l’être le miel d’acacia ou de 
				sarrasin. De plus sa composition dépendra aussi de la situation géographique des ruches. 
				Dans le Loiret, le miel “Toutes fleurs” peut être produit à partir des fleurs de carottes, de tournesol, d’aubépine…<br>
				On obtient alors un miel au caractère équilibré, qui garde une certaine douceur même s’il est plus prononcé que les miels doux. 
				Il est apprécié de ceux qui aiment la variété et les surprises, car son goût n’est jamais tout à fait le même d’une année sur l’autre !
			</p>
			<p>
				<p>
					<b>Aspect</b> : En fonction de sa composition, il va de jaune paille à orangé et est le plus souvent assez crémeux. <br>
				</p>
				<p>
					<b>Odeur</b> : Difficile à définir ! Le miel toutes fleurs produit dans le Loiret par Didier a souvent une odeur un peu fruitée rappelant l’abricot sec et les bois blonds. 
				Il peut aussi développer des notes épicées de noix de muscade et de poivre, avec quelques inflexions fleuries. <br>
				</p>
				<p>	
					<b>Goût</b> : Même dilemne ! ;-) Selon les années, le miel toutes fleurs exprimera plus ou moins fort des notes fleuries, ou fruitées (abricot sec, ananas).
				</p>
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
			$possibleValues = ["3.00 euros", "5.00 euros", "9.00 euros"];
			$('.product-price-value').text(findPrice($('.product-price-select').val(), $possibleValues));
						
			$('.product-price-select').change(function(e){
				$('.product-price-value').text(findPrice($(this).val(), $possibleValues));
			});
		});
		
		
</script>
