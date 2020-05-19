<?php

error_reporting( error_reporting() & ~E_NOTICE & ~E_WARNING );

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
//Models
require 'core/database/models/News.php';
require 'core/database/models/User.php';
require 'core/database/models/Comment.php';

$database = Connection::make($app['config']['database']);
