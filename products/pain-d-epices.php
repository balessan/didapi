<?php include("../header.php") ?>

<div class="row-fluid">
	<div class="span3">
		<h1>Localisation</h1>
	</div>

	<div class="span9">
		<div class="row-fluid">
			<h1>Pain d'epices</h1>
		</div>
		<div class="row-fluid">
			<div class="span3" style="padding-top: 15px;">
				<img src="/link/to/pain-d-epices" alt="/link/to/pain-d-epices" width="200">
			</div>
			
			<div class="span9">
				<h2>Description</h2>
				<p>
					Un bon pain d'épices ne se réussit pas sans un bon miel ! C'est traditionnellement le miel de sarrasin qui est utilisé pour la 
					confection de celui-ci aux côtés de la cannelle et de la noix de muscade, auxquelles il apporte son caractère et ses notes généreuses de 
					céréales, et de sucre brun.<br>
					On peut aussi proposer une variante assorties de petits morceaux de gingembre confits. Miam !<br><br>
					Un régal pour le goûter ou pour un petit creu !
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
