<?php
	include_once('../../globals.php');
			
	$allPosts = PostRepository::FindAll();
	$formattedPosts = array();
	
	foreach ($allPosts as $post)
	{
		$properties = array('id' => $post->GetId(), 'title' => $post->GetTitle(), 'content' => $post->GetContent(), 'date' => $post->GetDate(), 'user_id' => $post->GetUserId());
		$formattedPosts[] = $properties;
	}
	
	echo json_encode($formattedPosts);
?>
