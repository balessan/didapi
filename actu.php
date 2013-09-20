<?php include_once('./globals.php'); ?>	

<!DOCTYPE html>
<html ng-app ng-controller="MyBlogListController">
	<head>
		<title>Le Blog de l'apiculteur</title>
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
						</div>
					</div>
					<div class="item">
						<img src="<?php echo $include_path; ?>includes/img/menu_main_301.jpg">
						<div class="container">
						</div>
					</div>
					<div class="item">
						<img src="<?php echo $include_path; ?>includes/img/menu_onions_301.jpg">
						<div class="container">
						</div>
					</div>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>
	<head>
	
	<body ng-init="RetrieveAll()">
		<script type="text/javascript" src="./includes/js/angular.min.js"></script>

		<script type="text/javascript" src="./includes/js/angular/blog-controller.js"></script>

		<style type="text/css">
			.blog-title {
				text-align: center;
			}
			
			.post-repeater {
				list-style-type: none;
				text-align: center;
			}

			.post-item {
				list-style-type: none;
			}
		</style>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class=span2>
					Search: <input ng-model="query"/>
					Sort By:
					<select ng-model="orderProp">
						<option value="title">Alphabetical</option>
						<option value="date">Date</option>
					</select>
					<div id="status">Current Filter: {{query}}</div>	
				</div>
				
				<div class="span10">
					<h1 class="blog-title">Actualités</h1>
					
					<ul class="post-repeater">
						<li class="post-item" ng-repeat="post in posts | filter:query | orderBy:orderProp">
							<article>
								<h2>{{post.title}}</h2>
								<div class="post-content">
									{{post.content}}
								</div>
								<p class="post-footer">Ecrit le {{post.date}} par {{post.user_id}}</p>
								<p class="post-comments"><a href="./admin/post/{{post.id}}">Commentaires</a></p>
							</article>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
