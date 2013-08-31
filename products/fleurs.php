<?php include("../header.php") ?>

<div class="row-fluid">
	<div class="span3">
		<h1>Localisation</h1>
	</div>

	<div class="span9">
		<div class="row-fluid">
			<h1>Miel toutes fleurs</h1>
		</div>
		<div class="row-fluid">
			<div class="span3" style="padding-top: 15px;">
				<img src="../includes/img/pot/fleurs.JPG" alt="Nos pots de miel de fleurs" width="200" class="img-rounded" />
			</div>
			
			<div class="span9">
				<h2>Description</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra urna at mi facilisis eget venenatis velit iaculis. 
					Vestibulum in eros nec metus faucibus cursus non vitae orci. Sed viverra congue urna, eget condimentum libero aliquam eget. 
					Vivamus metus libero, molestie porta iaculis id, lobortis nec ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
					per inceptos himenaeos. Sed ultricies, velit et ultrices congue, lacus sapien pulvinar sapien, vitae tristique erat est dignissim lacus. 
					Etiam libero est, rutrum at ornare at, convallis ut ipsum. Nam rutrum porttitor mi, ut tristique tellus vulputate vitae. 
					In a turpis libero, eget lacinia arcu. Nulla non magna a arcu fermentum lobortis vitae id metus.
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
