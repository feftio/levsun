<?php
include_once ROOT . '/models/About.php';
/**
 * 
 */
class AboutController 
{
	public function actionIndex()
	{
		include_once ROOT . '/config/html/into.php';
		include_once ROOT . '/views/about.php';
	}
}