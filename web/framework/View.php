<?php
/**
 * 
 */
class View
{
	public static function render($path, $file)
	{
		include_once ROOT . '/' . $path . '/' .$file;
	} 

	public static function renderDirs($keyDirs, $file)
	{
		include_once ROOT . G::getdirs($keyDirs) . '/' . $file;
	}
}