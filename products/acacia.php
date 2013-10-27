<?php include('../header.php'); ?>

<div class="row-fluid">
	<div class="span4 products-photo" style="padding-top: 15px;">
		<img src="<?php echo $include_path; ?>includes/img/pot/acacia.JPG" alt="Nos pots de miel d'acacia" class="img-circle" />
	</div>

	<div class="span8">
		<div class="row-fluid">
			<h1>Miel d'Acacia</h1>
		</div>
		<div class="row-fluid">
			<h2>Description :</h2>
			<p>
				<p>
					Entre les mois de mai et de juin survient souvent l'une des floraison les plus spectaculaires et mellifères de nos contrées : celle de l'Acacia
					ou Robinier faux-acacia (<i>Robinia pseudoacacia</i>). 
				</p>
				<p>
					Ses fleurs d'un blanc pur, réparties en longues grappes de 10 à 25cm de long, dégagent un
					parfum délicat et poudré, proche de celui de la fleur d'oranger. 
				</p>
				<p>
					Les abeilles apprécient beaucoup cette espèce dont les fleurs apparaissent en grand nombre relativement tôt dans la saison et produisent une grande quantité de nectar.
				</p>
				<p>
					Le miel d'acacia est très apprécié pour sa forte teneur en sucre et sa saveur douce et peu prononcée.
				</p>
			</p>	
			<p>
				<p>
					<b>Aspect</b> : Le miel d'acacia se présente sous forme liquide, d'une jolie couleur jaune blond.
				</p>
				<p>
					<b>Odeur</b> : Son odeur est très douce, fleurie et suave, avec des accents de fleurs blanches type fleur d’oranger.
				</p>
				<p>
					<b>Goût</b> : Le miel d’acacia est apprécié pour la finesse de son goût. Délicat et légèrement acidulé, sa saveur est fraîche, un peu citronnée. On retrouve en fond la douceur discrète d’un bouquet de fleurs blanches. On l’utilise facilement en pâtisserie, mais aussi comme agent sucrant pour les tisanes, le thé, le lait chaud. Il est d’ailleurs recommandé en cas de mal de gorge pour son pouvoir adoucissant.
				</p>
			</p>
			<p>
				Quantité:
				<select class="form product-price-select">
					<option value="250" selected="selected">250g</option>
					<option value="500">500g</option>
					<option value="1000">1Kg</option>
				</select>
			</p>
			<p>
				<!--Prix:
				<span class="product-price-value"></span>-->
			</p>
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

<?php include('../footer.php'); ?>
