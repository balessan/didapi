<?php
	include('../../globals.php');	

	$postId = $_GET['id'];
	$post;

	if (isset($postId))
	{
		$entity = PostRepository::FindById('post', $postId);
		$post = new Post($entity->id, $entity->title, $entity->content, $entity->date, $entity->user_id);
	}

	echo isset($post) == true ? json_encode($post->toArray()) : json_encode('There was an error while processing the retrieval og this message'); 
?>
