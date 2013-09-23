<?php
	include_once('../../globals.php');

	$response = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	  // if form has been posted process data
	
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
	
		$request->date = date("Y-m-d H:i:s");
		$request->user_id = $_SESSION['user_id']; 
		
		$post = PostRepository::FindById($request->id);

		$success = $post->Update($request);

		echo $success == true ? 'Votre article a bien été sauvegardé' : 'Il y a eu une erreur lors de la sauvegarde de votre article';
	}
?>

