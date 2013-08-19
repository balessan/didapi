<!DOCTYPE html>
<html>
	<head>
		<title>Didier Alessandroni - Apiculteur</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="./includes/css/bootstrap.min.css" rel="stylesheet">
		<link href="./includes/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="./includes/css/base.css" rel="stylesheet">
	</head>
	<body>
		
		<?php if (!isset($_SESSION)) { session_start(); } ?>
		<?php include_once('./globals.php'); ?>	
		
		<div id="header">
			<script src="./includes/js/jquery-1.9.1.min.js"></script>
			<script src="./includes/js/bootstrap.min.js"></script>
			<script src="./includes/js/base.js"></script>
			<script src="./library/ckeditor/ckeditor.js"></script>
			
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="brand" href="/didapi/index.php">Didapi</a>
						<div class="nav-collapse collapse">
							<p class="navbar-text pull-right">
							<?php 
									if (isset($_SESSION['username']))
									{
										echo '<a href="/didapi/profile.php" class="navbar-link">';
										echo utf8_decode("Connecté en tant que");
										echo utf8_decode($_SESSION['username']);
										echo '</a>';
									}      
									else echo utf8_decode('<a href="./login.php">Non connecté</a>');
								?>
							</p>	
							<ul class="nav">
							  <li><a href="./index.php"><i class="icon-home icon-white"></i> Accueil</a></li>
							  <li><a href="./about.php"><i class="icon-file icon-white"></i> A propos</a></li>
							  <li><a href="./contact.php"><i class="icon-pencil icon icon-white"></i> Contact</a></li>
							  <li><a href="./products.php"><i class="icon-book icon- icon-white"></i> Produits</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div id="myCarousel" class="carousel slide">
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="./includes/img/index_didapi_300.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1><?php echo utf8_decode("Levée de cadres") ?></h1>
								<p class="lead"><?php echo utf8_decode("Une des opérations parmi une longue liste à répéter un bon nombre de fois à chaque étape.") ?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="./includes/img/menu_main_300.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1>Un de nos ruchers</h1>
								<p class="lead"><?php echo utf8_decode("Un de nos ruchers, situés proche de Benoît-sur-Loire pour celui-là...") ?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="./includes/img/menu_onions_300.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1><?php echo utf8_decode("Champ d'oignons") ?></h1>
								<p class="lead"><?php echo utf8_decode('Saviez-vous que parmi tous les miels produits par Didier, il y avait du miel d\'oignon ? <a href="products.php">Nos produits, c\'est par ici !</a>') ?></p>
							</div>
						</div>
					</div>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>
