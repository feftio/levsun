<?php
/**
 * 
 */
class AboutController 
{
	public function actionIndex()
	{
		global $Global;
		include_once ROOT . '/views/about.php';
	}
}