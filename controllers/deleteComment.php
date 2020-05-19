<?php

$comment = new Comment($database);

$comment->delete($_POST['comment_id']);

header('Location: /');