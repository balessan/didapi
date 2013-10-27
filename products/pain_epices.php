<?php include("../header.php") ?>

<div class="row-fluid">
	<div class="span4 products-photo" style="padding-top: 15px;">
		<img class="img-circle" src="<?php echo $include_path; ?>/includes/img/derives/pain_epices.jpg" alt="Photo de notre gros pain d'épices">
	</div>

	<div class="span8">
		<div class="row-fluid">
			<h1>Pain d'epices</h1>
		</div>
		<div class="row-fluid">
			<h2>Description</h2>
			<p>
				Un bon pain d'épices ne se réussit pas sans un bon miel ! C'est traditionnellement le miel de sarrasin qui est utilisé pour la 
				confection de celui-ci aux côtés de la cannelle et de la noix de muscade, auxquelles il apporte son caractère et ses notes généreuses de 
				céréales, et de sucre brun.<br>
				On peut aussi proposer une variante assorties de petits morceaux de gingembre confits. Miam !<br><br>
				Un régal pour le goûter ou pour un petit creux !
			</p>
			<p>
				Quantite:
				<select class="product-price-select">
					<option value="150" selected="selected">150g</option>
					<option value="400">400g</option>
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
