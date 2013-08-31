<?php include("header.php") ?>

<div class="container marketing">
	<div class="row">	
		<div class="content-wrapper">
			<div class="span4">
				<a href="./actu.php"><img class="img-circle" src="./includes/img/header_right.jpg" /></a>
				<?php echo '<h2 id="actu">Actualités</h2>'; ?>
				<p class="section-header">
					<?php echo "Toutes les actualités de la vie des colonies de l'apiculteur de Saint-Florent, c'est par ici !"; ?>
				</p>
				<p>
					<?php echo "<a class=\"btn\" href=\"./actu.php\">Plus de détails...</a>"; ?>
				</p>
			</div>
			
			<div class="span4">
				<a href="./products.php"><img class="img-circle" src="./includes/img/pot/acacia_min.JPG" /></a>
				<h2 id="products">Nos produits</h2>
				<p class="section-header">
					<?php echo "Pour plus d'informations sur nos produits, c'est par là  !"; ?> 
				</p>
				<p>
					<?php echo "<a class=\"btn\" href=\"./products.php\">Plus de détails...</a>"; ?>
				</p>
			</div>
			
			<div class="span4">
				<a href="./"><img class="img-circle" src="./includes/img/header_left.jpg" /></a>
				<h2 id="./about.php">A propos</h2>
				<p class="section-header">
					<?php echo "Pour plus d'informations sur le parcours de Didier en apiculture, cette section y est dédié."; ?>
				</p>
				<p>
					<?php echo "<a class=\"btn\" href=\"./about.php\">Plus de détails...</a>"; ?>
				</p>
			</div>	
		</div>
	</div>
</div>

<?php include("footer.php") ?>
