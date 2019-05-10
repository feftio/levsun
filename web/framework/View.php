<?php
/**
 * 
 */
class View
{
	public static function render($fileName)
	{
		include_once ROOT . G::getdirs('views') . '/' . $fileName;
	} 
}