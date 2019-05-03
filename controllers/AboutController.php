<?php
/**
 * 
 */
class AboutController 
{

//	**************************************************
//	**************************************************

	public function actionIndex()
	{
		G::setvar(True, [
			'menu__active' => 'about',
			'css' => [
				'wrapper.css',
				'nav.css',
				//'main__style.css',
				'footer.css'
			]

		]);
		include_once ROOT . '/views/about.php';
	}

//	**************************************************
//	**************************************************

}