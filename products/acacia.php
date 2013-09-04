<?php include('../header.php'); ?>

<div class="row-fluid">
	<div class="span3">
		<h1>Localisation</h1>
	</div>

	<div class="span9">
		<div class="row-fluid">
			<h1>Miel d'Acacia</h1>
		</div>
		<div class="row-fluid">
			<div class="span3" style="padding-top: 15px;">
				<img src="<?php echo $include_path; ?>includes/img/pot/acacia_min.JPG" alt="Nos pots de miel d'acacia" width="200" class="img-circle" />
			</div>
			
			<div class="span9">
				<h2>Description</h2>
				<p>
					Entre les mois de mai et de juin survient souvent l'une des floraison les plus spectaculaires et mellifères de nos contrées : celle de l'Acacia
					ou Robinier faux-acacia (<i>Robinia pseudoacacia</i>). Ses fleurs d'un blanc pur, réparties en longues grappes de 10 à 25cm de long, dégagent un
					parfum délicat et poudré, proche de celui de la fleur d'oranger. Les abeilles apprécient beaucoup cette espèce dont les fleurs apparaissent en grand
					nombre relativement tôt dans la saison et produisent une grande quantité de nectar.<br>
					Le miel d'acacia est très apprécié pour sa forte teneur en sucre et sa saveur douce et peu prononcée.<br><br>
				</p>	
				<p>	
					<b>Aspect</b> : Le miel d'acacia se présente sous forme liquide, d'une jolie couleur jaune blond.<br>
					<b>Odeur</b> : Son odeur est très douce, fleurie et suave, avec des accents de fleurs blanches type fleur d’oranger.<br>
					<b>Goût</b> : Le miel d’acacia est apprécié pour la finesse de son goût. Délicat et légèrement acidulé, sa saveur est fraîche, un peu citronnée. On retrouve en fond la douceur discrète d’un bouquet de fleurs blanches. On l’utilise facilement en pâtisserie, mais aussi comme agent sucrant pour les tisanes, le thé, le lait chaud. Il est d’ailleurs recommandé en cas de mal de gorge pour son pouvoir adoucissant.
				</p>
				<br>
				<p>
					Quantité:
					<select class="product-price-select">
						<option value="250" selected="selected">250g</option>
						<option value="500">500g</option>
						<option value="1000">1Kg</option>
					</select>
				</p>
				<p>
					Prix:
					<span class="product-price-value"></span>
				</p>
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

<?php include('../footer.php'); ?>
