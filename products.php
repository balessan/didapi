<?php include("./header.php") ?>

<style>
	.products {
		text-align: justify;
	}
	.products-resume {
		height: 40px;
		overflow: hidden;
	}
	
	.products-header, .products-link {
		text-align: center;
	}
</style>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
					<li class="nav-header"><a href="#doux">Miels doux</a></li>
					<li><a href="#acacia">Acacia</a></li>
					<li><a href="#printemps">Printemps</a></li>
					<li class="nav-header"><a href="#equilibre">Miels équilibrés</a></li>
					<li><a href="#fleurs">Toutes fleurs</a></li>
					<li><a href="#foret">Forêt</a></li>
					<li class="nav-header"><a href="#genereux">Miels généreux</a></li>
					<!--<li><a href="#oignon">Oignon</a></li>-->
					<li><a href="#chataignier">Châtaignier</a></li>
					<li><a href="#sarrasin">Sarrasin</a></li>
					<li class="nav-header"><a href="#produits">Produits de la ruche</a></li>
					<li><a href="#pain_epices">Pain d'épices</a></li>
					<li><a href="#caramiel">Caramiel</a></li>
					<li><a href="#bonbon">Bonbons au miel</a></li>
				</ul>
			</div>
		</div>
	
		<div class="span10">
			<div class="hero-unit">
				<h1 id="actu">Produits</h1>
				<p>
					Découvrez l’assortiment de miels et de produits proposés par les ruchers de Didier
				</p>
			</div>
		
			<div class="row-fluid">
				<p>
					Tout au long de la saison, les abeilles produisent au rythme des différentes floraisons. Elles se concentreront tantôt sur l’acacia, tantôt sur le châtaigner, ou encore sur le sarrasin, au fur et à mesure de l’apparition des fleurs. Les apiculteurs suivent attentivement ces mouvements, et récoltent ainsi différents types de miels dont la saveur et les particularités varient selon les fleurs qui ont été visitées par les butineuses. 
				</p>
				
				<p>
					Le pouvoir sucrant du miel et son goût si particulier en font un excellent ingrédient pour la préparations de plats divers, mais aussi pour la confection du fameux pain d’épices.
				</p>
				
				<h2 id="doux">Miels doux</h2>

				<div id="printemps" class="span5 products">
					<div class="products-header">
						<a href="./products/printemps.php"><img class="img-circle" src="./includes/img/pot/printemps_min.JPG" /></a>
						<h3>Printemps</h3>
					</div>
					<p class="products-resume">
						Le best-seller ! Le miel souvent présenté sous l'appelation "Miel du Gatînais", constitué majoritairement de Colza
					</p>
					<p class="products-link">
						<a class="btn" href="./products/printemps.php">Détails</a>
					</p>
				</div>
			
				<div id="acacia" class="span5 products">
					<div class="products-header">
						<a href="./products/acacia.php"><img class="img-circle" src="./includes/img/pot/acacia_min.JPG" /></a>
						<h3>Acacia</h3>
					</div>
					<p class="products-resume">
						Deuxième tête d'affiche ! Et le miel naturellement le plus sucré et le plus doux...
					</p>
					<p class="products-link">
						<a class="btn" href="./products/acacia.php">Détails</a>
					</p>
				</div>
			</div>
			
			<div class="row-fluid">
				<h2 id="equilibre">Miels équilibrés</h2>
				
				<div id="fleurs" class="span5 products">
					<div class="products-header">
						<a href="./products/fleurs.php"><img class="img-circle" src="./includes/img/pot/fleurs_min.JPG" /></a>
						<h3>Toutes fleurs</h3>
					</div>
					<p class="products-resume">
						Le miel le plus consommé à  l'échelle de la planète. Un mélange de goût et d'odeurs, et une texture facile à tartiner...
					</p>
					<p class="products-link">
						<a class="btn" href="./products/fleurs.php">Détails</a>
					</p>
				</div>	
			
				<div id="foret" class="span5 products">
					<div class="products-header">
						<a href="./products/foret.php"><img class="img-circle" src="./includes/img/pot/foret_min.JPG" /></a>
						<h3>Forêt</h3>
					</div>
					<p class="products-resume">
						Un miel légèrement amer, qui réserve des surprises, comme une belle balade. Pour les amateurs, ou les curieux !
					</p>
					<p class="products-link">
						<a class="btn" href="./products/foret.php">Détails</a>
					</p>
				</div>
				
			</div>
				
			<div class="row-fluid">
				
				<h2 id="genereux">Miels généreux</h2>

				<!--<div id="oignon" class="span3">
					<h3>Miel d'Oignon</h3>
					<p>
						Un miel trÃÂ¨s original, agrÃÂ©able en cuisine... Obtenu ÃÂ  la faveur d'un contrat de pollinisation chez un cultivateur (entre autres) d'oignon...
					</p>
					<p>
						<a class="btn" href="./products/oignon.php">DÃÂ©tails</a>
					</p>
				</div>-->
				
				<div id="chataignier" class="span5 products">
					<div class="products-header">
						<a href="./products/chataignier.php"><img class="img-circle" src="./includes/img/pot/chataigner_min.JPG" /></a>
						<h3>Chataignier</h3>
					</div>
					<p class="products-resume">
						Un miel corsé connu pour sa petite pointe d'amertume qui le rend unique !
					</p>
					<p class="products-link">
						<a class="btn" href="./products/chataignier.php">Détails</a>
					</p>
				</div>
				
				<div id="sarrasin" class="span5 products">
					<div class="products-header">
						<a href="./products/sarrasin.php"><img class="img-circle" src="./includes/img/pot/sarrasin_min.JPG" /></a>
						<h3>Sarrasin</h3>
					</div>
					<p class="products-resume">
						Mon (le webmaster) préféré ! Un miel au goût et aux arômes inégalés, à découvrir ou redécouvrir...
					</p>
					<p class="products-link">
						<a class="btn" href="./products/sarrasin.php">Détails</a>
					</p>
				</div>
			</div>	
			<div class="row-fluid">	
				<p>
				<b>NB</b> : Vous avez déjà remarqué que le miel a tendance à cristalliser (formation de cristaux de sucre) au bout d’un certain temps ? En réalité, ce phénomène est naturel et n’altère en rien les qualités du miel. La cristallisation survient plus ou moins rapidement selon le type de miel, et peut être prévenue en conservant vos pots dans un endroit bien sec, à l’abri de la lumière. Si vous préférez votre miel sous forme liquide, faites chauffer votre pot au bain-marie, sans jamais dépasser les 40°.
				</p>
			</div>

			<div class="row-fluid">
				<h2 id="produits">Produits de la ruche</h2>
				<div id="pain_epices" class="span5 products">
					<div class="products-header">
						<a href="./products/pain_epices.php"><img class="img-circle" src="<?php echo $include_path; ?>includes/img/derives/pain_epices_min.jpg" /></a>
						<h3>Pain d'épices</h3>
					</div>
					<p class="products-resume">
						Le premier produit dérivé de la production de miel, le pain d'épices ! Un régal pour les papilles au goûter, ou à toute heure de la journée !
					</p>
					<p class="products-link">
						<a class="btn" href="./products/pain_epices.php">Détails</a>
					</p>
				</div>
				
				<div id="epices" class="span5 products">
					<div class="products-header">
						<a href="./products/caramiel.php"><img class="img-circle" src="./includes/img/derives/caramiel_min.JPG" /></a>
						<h3>Caramiel</h3>
					</div>
					<p class="products-resume">
						Un petit nouveau ! Une douceur pour le petit déjeuner ou le goûter qui vous surprendra par sa saveur inattendue ! 
					</p>
					<p class="products-link">
						<a class="btn" href="./products/caramiel.php">Détails</a>
					</p>
				</div>
			</div>

			<div class="row-fluid">
				<div id="bonbon" class="span5 products">
					<div class="products-header">
						<a href="./products/bonbon.php"><img class="img-circle" src="./includes/img/derives/bonbon_boule_min.JPG" /></a>
						<h3>Bonbons au miel</h3>
					</div>
					<p class="products-resume">
						Une production originale, pour une saveur sucrée qui ravira petits et grands !
					</p>
					<p class="products-link">
						<a class="btn" href="./products/bonbon.php">Détails</a>
					</p>
				</div>
			</div>
		</div>
</div>

<?php include("footer.php") ?>
