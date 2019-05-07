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
				'parts/wrapper.css',
				'parts/nav.css',
				'about.css',
				'parts/footer.css'
			]

		]);

		View::render('views', 'about.php');
	}

//	**************************************************
//	**************************************************

}