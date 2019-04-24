<?php
include_once ROOT . '/models/Main.php';
/**
 * 
 */
class MainController 
{
	public function actionIndex()
	{
		include_once ROOT . '/config/html/into.php';
		include_once ROOT . '/views/main.php';
	}
}