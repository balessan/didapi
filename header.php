<!DOCTYPE html>
<html>
	<head>
		<title>Didier Alessandroni - Apiculteur</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="/didapi/includes/css/bootstrap.min.css" rel="stylesheet">
		<link href="/didapi/includes/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="/didapi/includes/css/base.css" rel="stylesheet">
	</head>
	<body>
		
		<?php if (!isset($_SESSION)) { session_start(); } ?>
		
		<div id="header">
			<script src="/didapi/includes/js/jquery-1.9.1.min.js"></script>
			<script src="/didapi/includes/js/bootstrap.min.js"></script>
			<script src="/didapi/includes/js/base.js"></script>
			<script src="/didapi/library/ckeditor/ckeditor.js"></script>
			
			<div class="navbar-wrapper">
				<div class="container">
					<div class="navbar navbar-inverse">
						<div class="navbar-inner">
							<a class="brand" href="/didapi/index.php">Didapi</a>
							<div class="nav-collapse collapse">
								<p class="navbar-text pull-right">
									Connect� en tant que 
									<a href="/didapi/profile.php" class="navbar-link">
										<?php 
											if (isset($_SESSION['username']))
												echo $_SESSION['username'];
											else
												echo 'Username';
										?>
									</a>
								</p>	
								<ul class="nav">
								  <li><a href="/didapi/index.php"><i class="icon-home icon-white"></i> Accueil</a></li>
								  <li><a href="/didapi/about.php"><i class="icon-file icon-white"></i> A propos</a></li>
								  <li><a href="/didapi/contact.php"><i class="icon-pencil icon icon-white"></i> Contact</a></li>
								  <li><a href="/didapi/products.php"><i class="icon-book icon- icon-white"></i> Produits</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="myCarousel" class="carousel slide">
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="/didapi/includes/img/index_didapi_300.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1>Lev�e de cadres</h1>
								<p class="lead">Une des op�rations parmi une longue liste � r�p�ter un bon nombre de fois � chaque �tape.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="/didapi/includes/img/menu_main_300.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1>Un de nos ruchers</h1>
								<p class="lead">Un de nos ruchers, situ�s proche de Beno�t-sur-Loire pour celui-l�...</p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="/didapi/includes/img/menu_onions_300.jpg">
						<div class="container">
							<div class="carousel-caption">
								<a href="./products.php">
									<h1>Champ d'oignons</h1>
									<p class="lead">Saviez-vous que parmi tous les miels produits par Didier, il y avait du miel d'oignon ? Nos produits, c'est par ici !</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>