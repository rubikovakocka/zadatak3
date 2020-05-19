<?php

session_start();

if(! $_SESSION['user_id']) {
	echo ("<script LANGUAGE='JavaScript'>
		window.location.href='/loginForm';
    	alert('You have to be logged in.');
    </script>");
}

$comment = new Comment($database);

$comment->add([
	'body' => $_POST['comment_body'],
	'news_id' => $_POST['news_id'],
	'user_id' => $_SESSION['user_id']
]);

header('Location: /');
