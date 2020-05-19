<?php

//Feed
$router->get('', 'controllers/index.php');
$router->post('comment', 'controllers/comment.php');
$router->post('deleteComment', 'controllers/deleteComment.php');
$router->post('deleteNew', 'controllers/deleteNew.php');

//Auth
$router->get('loginForm', 'controllers/auth/loginForm.php');
$router->get('registerForm', 'controllers/auth/registerForm.php');

$router->post('register', 'controllers/auth/register.php');
$router->post('login', 'controllers/auth/login.php');
$router->get('logout', 'controllers/auth/logout.php');
