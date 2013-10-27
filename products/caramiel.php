<?php include("../header.php") ?>

<div class="row-fluid">
	<div class="span4 products-photo" style="padding-top: 15px;">
		<img class="img-circle" src="../includes/img/derives/caramiel.JPG" alt="Photo de caramiel">
	</div>

	<div class="span8">
		<div class="row-fluid">
			<h1>Caramiel</h1>
		</div>
		<div class="row-fluid">
			<h2>Description</h2>
			<p>
				Le caramiel est une délicieuse pâte à tartiner au caramel.<br>
				Produit à base de miel d'acacia, il en tire toute la douceur et le bon goût de sucre ! <br>
				Le miel est également allié à une pointe de beurre salé, que nos amis bretons apprécieront :)<br>
			</p>
			<p>
				Quantite:
				<select class="product-price-select">
					<option value="250" selected="selected">250g</option>
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
