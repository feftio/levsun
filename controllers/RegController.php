<?php
include_once ROOT . '/models/Reg.php';
/**
 * 
 */
class RegController 
{
	public function actionIndex()
	{
		include_once ROOT . '/config/html/into.php';
		include_once ROOT . '/views/reg.php';
	}
}