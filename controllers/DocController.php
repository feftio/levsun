<?php
/**
 * 
 */
class DocController 
{

//	**************************************************
//	**************************************************

	public function actionIndex()
	{
		G::setvar(True, [

			'menu__active' => 'doc',
			'css' => [
				'parts/nav.css',
				'parts/footer.css'
			]

		]);

		View::render('views', 'doc.php');
	}

//	**************************************************
//	**************************************************

}