<?php
/**
 * 
 */

class MainController
{

//	**************************************************
//	**************************************************

	public function actionIndex()
	{
		G::setvar(True, [

			'menu__active' => 'main',
			'css' => [
				'parts/wrapper.css',
				'parts/nav.css',
				'main.css',
				'parts/footer.css'
			]

		]);

		csrf_field();

		View::render('main.php');
	}

//	**************************************************
//	**************************************************

}