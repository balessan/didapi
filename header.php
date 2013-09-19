<?php include_once('./globals.php'); ?>	

<!DOCTYPE html>
<html>
	<head>
		<title>Didier Alessandroni - Apiculteur</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<!-- Bootstrap -->
		<link href="<?php echo $include_path; ?>includes/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $include_path; ?>includes/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?php echo $include_path; ?>includes/css/base.css" rel="stylesheet">
		<link href="<?php echo $include_path; ?>includes/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
	</head>
	<body>
		
		<?php if (!isset($_SESSION)) { session_start(); } ?>
		
		<div id="header">
			<script src="<?php echo $include_path; ?>includes/js/jquery-1.9.1.min.js"></script>
			<script src="<?php echo $include_path; ?>includes/js/bootstrap.min.js"></script>
			<script src="<?php echo $include_path; ?>includes/js/base.js"></script>
			<script src="<?php echo $include_path; ?>library/ckeditor/ckeditor.js"></script>
			<script src="<?php echo $include_path; ?>includes/js/jquery-ui/jquery-ui-min.js"></script>
			
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="brand" href="<?php echo $include_path; ?>index.php">Didapi</a>
						<div class="nav-collapse collapse">
							<p class="navbar-text pull-right">
							<?php 
									if (isset($_SESSION['username']))
									{
										echo '<a href="' . $include_path . 'profile.php" class="navbar-link">';
										echo "Connecté en tant que";
										echo $_SESSION['username'];
										echo '</a>';
									}      
								?>
							</p>	
							<ul class="nav">
							  <li><a href="<?php echo $include_path; ?>index.php"><i class="icon-home icon-white"></i> Accueil</a></li>
							  <li><a href="<?php echo $include_path; ?>about.php"><i class="icon-file icon-white"></i> A propos</a></li>
							  <li><a href="<?php echo $include_path; ?>contact.php"><i class="icon-pencil icon icon-white"></i> Contact</a></li>
							  <li><a href="<?php echo $include_path; ?>products.php"><i class="icon-book icon- icon-white"></i> Produits</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div id="myCarousel" class="carousel slide">
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="<?php echo $include_path; ?>includes/img/menu_cadre_301.jpg">
						<div class="container">
							<!--<div class="carousel-caption">
								<h1><?php //echo utf8_decode("LevÃÂÃÂ©e de cadres") ?></h1>
								<p class="lead"><?php //echo utf8_decode("Une des opÃÂÃÂ©rations parmi une longue liste ÃÂÃÂ  rÃÂÃÂ©pÃÂÃÂ©ter un bon nombre de fois ÃÂÃÂ  chaque ÃÂÃÂ©tape.") ?></p>
							</div>-->
						</div>
					</div>
					<div class="item">
						<img src="<?php echo $include_path; ?>includes/img/menu_main_301.jpg">
						<div class="container">
							<!--<div class="carousel-caption">
								<h1>Un de nos ruchers</h1>
								<p class="lead"><?php //echo utf8_decode("Un de nos ruchers, situÃÂÃÂ©s proche de BenoÃÂÃÂ®t-sur-Loire pour celui-lÃÂÃÂ ...") ?></p>
							</div>-->
						</div>
					</div>
					<div class="item">
						<img src="<?php echo $include_path; ?>includes/img/menu_onions_301.jpg">
						<div class="container">
							<!--<div class="carousel-caption">
								<h1><?php //echo utf8_decode("Champ d'oignons"); ?></h1>
								<p class="lead"><?php //echo utf8_decode('Saviez-vous que parmi tous les miels produits par Didier, il y avait du miel d\'oignon ? <a href="products.php">Nos produits, c\'est par ici !</a>'); ?></p>
							</div>-->
						</div>
					</div>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>
