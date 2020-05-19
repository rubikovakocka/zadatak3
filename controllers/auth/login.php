<?php

session_start();

$user = new User($database);

$user_id = $user->login([
	'email' => $_POST['email'],
	'password' => $_POST['password']
]);

if($user_id)
{
	$_SESSION['user_id'] = $user_id;

	echo ("<script LANGUAGE='JavaScript'>
		window.location.href='/';
    	alert('Successfuly logged in.');
    </script>");
}

echo ("<script LANGUAGE='JavaScript'>
		window.location.href='/loginForm';
    	alert('Wrong E-mail or Password, please try again.');
    </script>"
);
