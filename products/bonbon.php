<?php include("../header.php") ?>

<div class="row-fluid">
	<div class="span4 products-photo" style="padding-top: 15px;">
		<img src="<?php echo $include_path; ?>/includes/img/derives/bonbon_boule.JPG" class="img-circle" alt="Photo de nos bonbons au miel">
	</div>

	<div class="span8">
		<div class="row-fluid">
			<h1>Bonbons au miel</h1>
		</div>
		<div class="row-fluid">
			<h2>Description</h2>
			<p>
				Les bonbons au miel sont des produits dérivés récemment introduits dans la palette que nous proposons.<br>
				Ce sont de véritables douceurs, aussi bien pour le palais que pour la gorge.<br>
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
