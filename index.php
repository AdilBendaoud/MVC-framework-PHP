<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
require('./config.php');
require('./classes/Bootstrap.php');
require('./classes/Controller.php');
require('./classes/Model.php');

require('./controllers/home.php');
require('./controllers/posts.php');
require('./controllers/users.php');

require('./models/home.php');
require('./models/post.php');
require('./models/user.php');

$BS = new Bootstrap($_GET);
$controller = $BS->createController();
if ($controller) {
    $controller->executeAction();
}