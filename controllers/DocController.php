<?php
include_once ROOT . '/models/Doc.php';
/**
 * 
 */
class DocController 
{
	public function actionIndex()
	{
		include_once ROOT . '/config/html/into.php';
		include_once ROOT . '/views/doc.php';
	}
}