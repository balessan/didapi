<?php
	include_once('../globals.php');	

	if (!isset($_SESSION)) session_start();

	$currentUser = new User($_SESSION['username'], $_SESSION['firstname'], $_SESSION['name'], $_SESSION['is_admin'], $_SESSION['user_id']);
	
	if (!$currentUser->IsAdmin())
	{
		header("location: ../index.php");
	}
	else
	{

?>

<!DOCTYPE html>
<html ng-app="management-system">
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
		<div id="header">
			<script src="<?php echo $include_path; ?>includes/js/jquery-1.9.1.min.js"></script>
			<script src="<?php echo $include_path; ?>includes/js/bootstrap.min.js"></script>
			<script src="<?php echo $include_path; ?>includes/js/base.js"></script>
			<script src="<?php echo $include_path; ?>library/ckeditor/ckeditor.js"></script>
			<script src="<?php echo $include_path; ?>includes/js/jquery-ui/jquery-ui-min.js"></script>
			<script src="<?php echo $include_path; ?>includes/js/angular.min.js"></script>
			<script src="<?php echo $include_path; ?>includes/js/angular/management-system.js"></script>
			<script src="<?php echo $include_path; ?>includes/js/angular/management-system-controllers.js"></script>
			
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
										echo "Bonjour ";
										echo $currentUser->GetUsername();
										echo ' !</a>';
									}      
									else echo '<a href="' . $include_path . 'login.php">Non connecté</a>';
								?>
							</p>	
							<ul class="nav">
							  <li><a href="./rucher.php"><i class="icon-file icon-white"></i> Vos ruchers</a></li>
							  <li><a href="./news.php"><i class="icon-pencil icon- icon-white"></i> Vos news</a></li>
							  <li><a href="./contact.php"><i class="icon-book icon-white"></i> Vos messages</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="admin-panel-wrapper">
<?php
	}
?>

