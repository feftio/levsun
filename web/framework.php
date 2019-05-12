<?php
	require_once ROOT . '/web/framework/ErrorHandle.php';
//	(new \lib\ErrorHandle())->register();
	require_once ROOT . '/web/framework/Config.php';
//	*******************************************************
	require_once ROOT . '/web/framework/G.php';
	require_once ROOT . '/web/framework/Database.php';
	require_once ROOT . '/web/framework/View.php';
	require_once ROOT . '/web/framework/Support/helpers.php';
	require_once ROOT . '/web/framework/Router.php';






//	*******************************************************
	(new Router())->run();
//	*******************************************************