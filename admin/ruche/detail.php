<?php
	require('../../library/RedBeanORM/rb.php');
	include_once('../../globals.php');
	include('../../header.php');
			
	R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	
	try {
		$ruche_id = $_GET['id'];

		if (isset($ruche_id))
		{	
			$ruche = R::load('ruche', $ruche_id);
			
			
?>
<div class="span3">
	<h2>Menu</h2>
</div>
<div class="span9">
	<?php echo "<h1>" . $ruche['name'] . "</h1>"; ?>
	<?php echo $ruche; ?>	
	
</div>
<?php
		}
		else {
			echo '<h1>Ruche Not Found</h1>';
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	
	include('../../footer.php');	
?>
