<?php include("../header.php") ?>

<div class="row-fluid">
	<div class="span4 products-photo" style="padding-top: 15px;">
		<img src="<?php echo $include_path; ?>includes/img/pot/printemps.JPG" class="img-circle" alt="Photo de nos miels de printemps">
	</div>

	<div class="span9">
		<div class="row-fluid">
			<h1>Miel de printemps</h1>
		</div>
		<div class="row-fluid">
			<h2>Description</h2>
			<p>
				C’est en réalité le miel de colza (Brassica napus) qui se cache derrière l’appelation : “Miel de printemps” ou “Miel du Gatinaîs”. 
				Ces petites fleurs d’un jaune d’or brillant sont en effet les premières à éclore à la sortie de l’hiver. 
				L’occasion pour les abeilles de reconstruire les réserves de miels entamées durant l’hiver, grâce à ces fleurs riches en nectar. 
				Les abeilles en tirent un miel très doux, fin et crémeux, incontestablement l’un des favoris des français. 
			</p>
			<p>
				<b>Aspect</b> : Très crémeux et facile à tartiner, le miel de printemps a une belle couleur blanc crème. <br>
				<b>Odeur</b> : L’odeur caractéristique du colza se retrouve dans ce miel aux accents de foin, d’herbes sèches et de céréales. 
				Elle rappelle l’odeur fraîche et un peu verte des jonquilles et du narcisse. <br>
				<b>Goût</b> : Son goût en bouche est suave et rond et rappelle le beurre frais. 
				Il déploie à nouveau des notes de foin et de paille, et une pointe de céréales. 
				Le tout reste très doux, délicieux sur les tartines du petit-déjeuner !<br>
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
