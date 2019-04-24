<?php
/**
 * 
 */
class MainController 
{
	public function actionIndex()
	{
		global $Global;
		include_once ROOT . '/views/main.php';
	}
}