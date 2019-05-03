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
				'nav.css',
				'main__style.css',
				'footer.css'
			]
		]);

		include_once ROOT . '/views/main.php';
	}

//	**************************************************
//	**************************************************

}