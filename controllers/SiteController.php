<?php
/**
 * 
 */
class SiteController 
{

//	**************************************************
//	**************************************************

	public function actionMain()
	{
		G::setGlobal(True, [

		]);
		echo 'Main';
		exit;
		include_once ROOT . '/views/main.php';
	}

//	**************************************************
//	**************************************************

	public function actionContact()
	{
		include_once ROOT . '/views/contact.php';
	}

//	**************************************************
//	**************************************************

	public function actionDoc()
	{
		include_once ROOT . '/views/doc.php';
	}

//	**************************************************
//	**************************************************

	public function actionReg()
	{
		echo 'Reg';
		exit;
		include_once ROOT . '/views/reg.php';
	}

//	**************************************************
//	**************************************************

	public function actionAbout()
	{
		include_once ROOT . '/views/about.php';
	}

//	**************************************************
//	**************************************************

	public function actionTicket($params)
	{
	
		//include_once ROOT . '/config/db/db_tables.php';
		//include_once ROOT . '/config/pdf/pdf_ticket.php';

		$IDEN  = $params[0];
		$LOGIN = "Alex54";
		$CODE  = "sdsdgs";

		$RANDOM_STRING = Ticket::checkingILC($IDEN, $LOGIN, $CODE, $TABLE_NAME);

		include_once ROOT . '/views/ticketing.php';
	}

//	**************************************************
//	**************************************************


}