<?php
/**
 * 
 */
class DocController 
{
	public function actionIndex()
	{
		global $Global;
		include_once ROOT . '/views/doc.php';
	}
}