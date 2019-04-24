<?php
include_once ROOT . '/models/Contact.php';
/**
 * 
 */
class ContactController 
{
	public function actionIndex()
	{
		include_once ROOT . '/config/html/into.php';
		include_once ROOT . '/views/contact.php';
	}
}