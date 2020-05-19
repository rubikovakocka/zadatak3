<?php

// session_start();

$user = new User($database);

$user->register([
	'email' => $_POST['email'],
	'name' => $_POST['name'],
	'password' => $_POST['password'],
    'role' => 'user',
]);

header('Location: /loginForm');