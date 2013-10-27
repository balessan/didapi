<?php include("../header.php") ?>

<div class="row-fluid">
	<div class="span3">
		<h1>Localisation</h1>
	</div>

	<div class="span9">
		<div class="row-fluid">
			<h1>Miel de Chataigners</h1>
		</div>
		<div class="row-fluid">
			<div class="span3" style="padding-top: 15px;">
				<img src="<?php echo $include_path; ?>includes/img/pot/chataigner_min.JPG" alt="Nos pots de miel de chataigner" width="200" class="img-circle" />
			</div>
			
			<div class="span9">
				<h2>Description</h2>
				<p>
					Connu principalement pour ses fruits, le châtaigner (<i>Castanea sativa</i>) est aussi devenu réputé pour le miel 
					qu'en tirent les abeilles. Ses petites fleurs réparties sur une longue tige dégagent des effluves puissants, à la fois boisés et poudrés. 
					La récolte a généralement lieu dans le courant du mois de juillet. 
					Le miel de châtaigner est aujourd'hui devenu un miel très apprécié des amateurs pour son caractère unique et marqué.<br>
					Il est aussi très riche en oligo-éléments : potassium, magnésium, manganèse notamment.
				</p>
				<p>
					<b>Aspect</b> : D'une belle couleur ambrée chaude à l'état liquide, il cristallise lentement et peut prendre alors des teintes plus foncées de caramel à brun.<br>
					<b>Odeur</b> : Son parfum est rond, chaud et boisé. Des notes de châtaigne se marient avec une senteur amère et légèrement animale.<br>
					<b>Goût</b> : Très prononcé, il est long en bouche et son amertume peut rappeler le café. 
					A l'image d'un bon whisky, le miel de châtaigner avec ses accents maltés et tourbés est un vrai miel de dégustation et de connaisseurs. <br>
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
			$possibleValues = ["3.50 euros", "6.00 euros", "11.00 euros"];
			$('.product-price-value').text(findPrice($('.product-price-select').val(), $possibleValues));
						
			$('.product-price-select').change(function(e){
				$('.product-price-value').text(findPrice($(this).val(), $possibleValues));
			});
		});
		
		
</script>
