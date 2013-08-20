<?php include("./header.php") ?>

<style>
	.products {
		text-align: justify;
	}
	.products-resume {
		height: 80px;
		overflow: hidden;
	}
	
	.products h3, .products .link {
		text-align: center;
	}
	
		
</style>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3">
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
					<li class="nav-header"><a href="#classics">Miels classiques</a></li>
					<li><a href="#printemps">Printemps</a></li>
					<li><a href="#foret">Forêt</a></li>
					<li><a href="#fleurs">Toute fleurs</a></li>
					<li class="nav-header"><a href="#types">Miel typés</a></li>
					<li><a href="#oignon">Oignon</a></li>
					<li><a href="#chataigner">Chataîgner</a></li>
					<li><a href="#sarrasin">Sarrasin</a></li>
					<li><a href="#acacia">Acacia</a></li>
					<li class="nav-header"><a href="#produits">Produits de la ruche</a></li>
					<li><a href="#gelee">Gelée Royale</a></li>
					<!--<li><a href="#propolis">Propolis</a></li>
					<li><a href="#autres">Autres...</a></li>-->
				</ul>
			</div>
		</div>
	
		<div class="span9">
			<div class="hero-unit">
				<h1 id="actu">Produits</h1>
				<p>
					PHOTO DE L'ATELIER TO ADD ! Vous trouverez sur cette page la photo et la description de l'ensemble des produits offerts par Didier Alessandroni.
				</p>
			</div>
		
			<div class="row-fluid">
				<h2 id="classics">Miels classiques</h2>

				<div id="printemps" class="span3 products">
					
					<img class="img-circle" src="./includes/img/pot/acacia_min.JPG" />
					<h3>Printemps</h3>
					<p class="products-resume">
						Le best-seller ! Le miel souvent présenté sous l'appelation "Miel du Gatînais", constitué majoritairement de Colza...
					<p class="link">
						<a class="btn" href="./products/printemps.php">Détails</a>
					</p>
				</div>
				
				<div id="foret" class="span3 products">
					<img class="img-circle" src="./includes/img/pot/foret_min.JPG" />
					<h3>Forêt</h3>
					<p class="products-resume">
						Un miel légèrement amer et plus fort en goût, pour ceux qui aiment les produits forts, ou les curieux !
					</p>
					<p class="link">
						<a class="btn" href="./products/foret.php">Détails</a>
					</p>
				</div>
			
				<div id="fleurs" class="span3 products">
					<img class="img-circle" src="./includes/img/pot/fleurs_min.JPG" />
					<h3>Toutes fleurs</h3>
					<p class="products-resume">
						Le miel le plus consommé à l'échelle de la planête. Un mélange de goût et d'odeurs, et une texture plus facile à tartiner...
					</p>
					<p class="link">
						<a class="btn" href="./products/fleurs.php">Détails</a>
					</p>
				</div>	
			</div>
			
			<div class="row-fluid">
				<h2 id="types">Miels typés</h2>

				<!--<div id="oignon" class="span3">
					<h3>Miel d'Oignon</h3>
					<p>
						Un miel très original, agréable en cuisine... Obtenu à la faveur d'un contrat de pollinisation chez un cultivateur (entre autres) d'oignon...
					</p>
					<p>
						<a class="btn" href="./products/oignon.php">Détails</a>
					</p>
				</div>-->
				
				<div id="chataigner" class="span3 products">
					<img class="img-rounded" src="./includes/img/pot/chataigner_min.JPG" />
					<h3>Chataigner</h3>
					<p class="products-resume">
						Le miel le plus amer de la gamme. A réserver aux habitués des sensations fortes...
					</p>
					<p class="link">
						<a class="btn" href="./products/chataigner.php">Détails</a>
					</p>
				</div>
				
				<div id="sarrasin" class="span3 products">
					<img class="img-rounded" src="./includes/img/pot/sarrasin_min.JPG" />
					<h3>Sarrasin</h3>
					<p class="products-resume">
						Mon (le webmaster) préféré ! Le miel le plus fort en goût, très lourd et très crémeux par sa cristallisation rapide...
					</p>
					<p class="link">
						<a class="btn" href="./products/sarrasin.php">Détails</a>
					</p>
				</div>
				
				<div id="acacia" class="span3 products">
					<img class="img-rounded" src="./includes/img/pot/acacia_min.JPG" />
					<h3>Acacia</h3>
					<p class="products-resume">
						Le second bestseller ! Et le miel naturellement le plus sucré et le plus doux... Très bon en cas de mal de gorge, dans les thés ou sur la tartine !
					</p>
					<p class="link">
						<a class="btn" href="./products/acacia.php">Détails</a>
					</p>
				</div>
			</div>
			
			<div class="row-fluid">
				<h2 id="produits">Produits de la ruche</h2>
				<div id="epices" class="span3 products">
					<img class="img-circle" src="" />
					<h3>Pain d'epices</h3>
					<p class="products-resume">
						Le premier produit dérivé de la production de miel, le pain d'épices ! Un régal pour les papilles au goûter, ou à tout heure de la journée ! 
					</p>
					<p>
						<a class="btn" href="./products/pain-d-epices.php">Détails</a>
					</p>
				</div>
				
				<!--<div id="propolis" class="span4">
					<h2>Propolis</h2>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn" href="#">Détails</a>
					</p>
				</div>
				
				<div id="autres" class="span4">
					<h2>Autres</h2>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn" href="#">Détails</a>
					</p>
				</div>-->
			</div>
		</div>
</div>

<?php include("footer.php") ?>
