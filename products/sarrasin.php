<?php include("../header.php") ?>

<style type="text/css">
	.products-content{
		text-align: justify;
	}
	.products-image {
		text-align: center;	
	}
</style>

<div class="row-fluid">
	<div class="span3">
		<h1>Localisation</h1>
	</div>

	<div class="span9">
		<div class="row-fluid">
			<h1>Miel de Sarrasin</h1>
		</div>
		<div class="row-fluid">
			<div class="span3" style="padding-top: 15px;">
				<img class="img-circle" src="<?php echo $include_path; ?>includes/img/pot/sarrasin_min.JPG" alt="Nos différents pots de miel de Sarrasin" width="200">
			</div>
			
			<div class="span9 products-content">
				<h2>Description</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra urna at mi facilisis eget venenatis velit iaculis. 
					Vestibulum in eros nec metus faucibus cursus non vitae orci. Sed viverra congue urna, eget condimentum libero aliquam eget. 
					Vivamus metus libero, molestie porta iaculis id, lobortis nec ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
					per inceptos himenaeos. Sed ultricies, velit et ultrices congue, lacus sapien pulvinar sapien, vitae tristique erat est dignissim lacus. 
					Etiam libero est, rutrum at ornare at, convallis ut ipsum. Nam rutrum porttitor mi, ut tristique tellus vulputate vitae. 
					In a turpis libero, eget lacinia arcu. Nulla non magna a arcu fermentum lobortis vitae id metus.
				</p>
				<h2>Le sarrasin</h2>
				<p>
					D'après Wikipédia, le sarrasin est une plante mellifère de la famille Polygonacées cultivée pour ses graines consommées en alimentation humaine et animale.<br>
				<p class="products-image"><img class="img-rounded" height="200" width="200" style="margin: auto;" src="<?php echo $include_path; ?>includes/img/plant/sarrasin.jpg" /></p>
				<br>				
					Egalement appelé blé noir, il est intéressant de constater que cette plante, fournissant pourtant aux abeilles le pollen à l'origine d'un des miels les plus particuliers qui soit, soit de moins en moins cultivée en France. En effet, sa surface cultivée a baissé de 700 000 hectares à l'échelle du pays à tout juste 30 000 hectares à l'heure actuelle. <br><br>

					Même en Bretagne, pourtant le pays de la "galette de blé noir", sa culture s'étant pourtant étendu jusqu'à atteindre les 160 000 hectares dans les années 1960 atteint maintenant péniblement les 3 000 à 4 000 hectares. Il est intéressant de noter que pour pallier à ce manque de culture, le sarrasin est à l'heure actuelle importé principalement de Chine (et oui, encore...)
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
			$possibleValues = ["3.50 euros", "6.00 euros", "11.00 euros"];
			$('.product-price-value').text(findPrice($('.product-price-select').val(), $possibleValues));
						
			$('.product-price-select').change(function(e){
				$('.product-price-value').text(findPrice($(this).val(), $possibleValues));
			});
		});
		
		
</script>

<?php include("../footer.php") ?>
