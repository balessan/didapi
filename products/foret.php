<?php include("../header.php") ?>

<div class="row-fluid">
	<div class="span3">
		<h1>Localisation</h1>
	</div>

	<div class="span9">
		<div class="row-fluid">
			<h1>Miel de Foret</h1>
		</div>
		<div class="row-fluid">
			<div class="span3" style="padding-top: 15px;">
				<img src="<?php echo $include_path; ?>includes/img/pot/foret_min.JPG" alt="Nos pots de miel de foret" class="img-circle" width="200">
			</div>
			
			<div class="span9">
				<h2>Description</h2>
				<p>
					A l’image du miel “Toutes fleurs”, le miel de fôret est en effet composé d’un mélange de nectars et de miellats variés. 
					Sa production dépend là encore de la situation géographique des ruches, et peut survenir à n’importe quel moment de l’été de début juin à fin août. 
					Dans le Loiret, le miel de forêt peut être un mélange de chêne, de lierre, de châtaigner, de ronce…<br>
					Moins fort et amer que le miel de châtaigner, le miel de forêt est cependant un miel au caractère assez prononcé, 
					qui ravira les amateurs de saveurs pleines et expressives.
				</p>
				<p>
					<b>Aspect</b> : Sa cristallisation est lente, il est généralement liquide assez longtemps et sa couleur fluctue entre le brun chaud et le brun foncé.<br>
					<b>Odeur</b> : Son odeur est marquée par son lieu de production. 
					Il exprime des notes boisées de chêne et de liège, et rappelle par certains aspect l’odeur des feuilles sèches. <br>
					<b>Goût</b> : Long en bouche, on perçoit une pointe d’amertume, accompagnée de notes boisées fermes rappelant les fût de chêne. 
					Il peut donner un caractère intéressant à vos préparations culinaires, ou se déguste simplement sur un toast grillé pour en apprécier tous les arômes ! <br>
				</p>
				<p>
					Quantite:
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
			$possibleValues = ["3.00 euros", "5.00 euros", "9.00 euros"];
			$('.product-price-value').text(findPrice($('.product-price-select').val(), $possibleValues));
						
			$('.product-price-select').change(function(e){
				$('.product-price-value').text(findPrice($(this).val(), $possibleValues));
			});
		});
		
		
</script>
