<?php

$news = new News($database);

$news->delete($_POST['new_id']);

header('Location: /');