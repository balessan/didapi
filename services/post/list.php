<?php
	include_once('../../globals.php');
			
	$allPosts = PostRepository::FindAll();
	$formattedPosts = array();
	
	foreach ($allPosts as $post)
	{
		$formattedPosts[] = $post->toArray();
	}
	
	echo json_encode($formattedPosts);
?>
