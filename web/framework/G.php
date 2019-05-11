<?php
/**
 * 
 */

class G
{
	private static $var = [];

//	******************************************
//	*******************SET********************
//	******************************************

	public static function setvar($useDefaultGlobal=true, $array=[])
	{
		if ($useDefaultGlobal)
		{
			self::$var = array_merge_recursive(Config::getglobal(), $array);
		}
		else
		{
			self::$var = $array;
		}
	}

//	******************************************
//	*******************GET********************
//	******************************************

	public static function var($key)
	{
		return self::$var[$key];
	}

	public static function varDirs($key)
	{
		$array = [];
		foreach (self::var($key) as $path)
		{
			$array[] = Config::getdirs($key) . '/' . $path;
		}
		return $array;
	}
}