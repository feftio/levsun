<?php
/**
 * 
 */
class ContactController 
{

//	**************************************************
//	**************************************************

	public function actionIndex()
	{
		G::setvar(True, [

			'menu__active' => 'contact',
			'css' => [
				'parts/wrapper.css',
				'parts/nav.css',
				'contact.css',
				'parts/footer.css'
			]

		]);
		
		View::render('views', 'doc.php');
	}

//	**************************************************
//	**************************************************

}