<?php
require_once ROOT . '\web\framework\G.php';
require_once ROOT . '\web\framework\Checker.php';
$checker = new Checker(True);

require_once ROOT . '\web\framework\Router.php';

$router = new Router();
$router->run();
?>