<?php
/**
 * 
 */
class G
{
	private static $SysPathes = 
	[
		'dirs.php'   => '\config\dirs.php',
		'global.php' => '\config\global.php',
		'router.php' => '\config\router.php',
		'routes.php' => '\config\routes.php'
	];

	private static $dirs       = [];
	private static $global     = [];
	private static $routes     = [];
	private static $router     = [];

//	******************************************
//	*******************SET********************
//	******************************************

	public static function setdirs($array)
	{
		self::$dirs = $array;
	}

	public static function setroutes($array)
	{
		self::$routes = $array;
	}

	public static function setrouter($array)
	{
		self::$router = $array;
	}

	public static function setglobal($array)
	{
		self::$global = $array;
	}

//	******************************************
//	*******************GET********************
//	******************************************

	public static function getdir($key='')
	{
		return self::$dirs[$key];
	}	

	public static function getroute($key='')
	{
		return self::$routes[$key];
	}

	public static function getdirs()
	{
		return self::$dirs;
	}

	public static function getroutes()
	{
		return self::$routes;
	}

	public static function getSysPathes()
	{
		return self::$SysPathes;
	}

	public static function getSysPath($key)
	{
		return self::$SysPathes[$key];
	}


//	******************************************
//	******************METHODS*****************
//	******************************************

	public static function getFullPathes()
	{
		
	}
}