<?php
/**
 * 
 */
class RegController 
{

//	**************************************************
//	**************************************************

	public function actionIndex()
	{
		G::setvar(True, [
			
			'menu__active' => 'reg',
			'css' => [
				'parts/nav.css',
				'contact.css',
				'parts/footer.css'
			]

		]);

		View::render('views', 'reg.php');
	}

//	**************************************************
//	**************************************************

}