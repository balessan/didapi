<?php
	include_once('../../globals.php');
			
	R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	
	try {
		$rucher_id = $_GET['id'];

		if (isset($rucher_id))
		{	
			$rucher = R::load('rucher', $rucher_id);
			
			
?>
<div class="span3">
	<h2>Menu</h2>
</div>
<div class="span9">
	<?php echo "<h1>" . $rucher['name'] . "</h1>"; ?>
	<?php echo $rucher; ?>	
	
</div>
<?php
		}
		else {
			echo '<h1>Rucher Not Found</h1>';
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	
	include('../../footer.php');
?>
