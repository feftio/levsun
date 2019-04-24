<?php
/**
 * 
 */
class ContactController 
{
	public function actionIndex()
	{
		global $Global;
		include_once ROOT . '/views/contact.php';
	}
}