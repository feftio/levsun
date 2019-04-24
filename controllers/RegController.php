<?php
include_once ROOT . '/models/Reg.php';
/**
 * 
 */
class RegController 
{
	public function actionIndex()
	{
		global $Global;
		include_once ROOT . '/views/reg.php';
	}
}