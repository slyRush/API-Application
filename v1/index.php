<?php

require '.././libs/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$user_id = NULL; // ID utilisateur - variable globale
$user_connected = NULL; // user connected -- all info

require_once 'routes/route_application.php';
require_once 'routes/route_application_tag.php';
require_once 'routes/route_author.php';
require_once 'routes/route_tag.php';
require_once 'routes/route_user.php';
require_once 'routes/route_login_register.php';

$app->run();