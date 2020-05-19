<?php

session_start();

$news = new News($database);
$comments = new Comment($database);

$news = $news->all();

require 'views/index.view.php';