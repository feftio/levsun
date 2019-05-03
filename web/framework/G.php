<?php
/**
 * 
 */
class G
{
	private static $SysPathes = 
	[
		'dirs.php'   => '/config/dirs.php',
		'global.php' => '/config/global.php',
		'router.php' => '/config/router.php',
		'routes.php' => '/config/routes.php'
	];

	private static $dirs    = [];
	private static $global  = [];
	private static $router  = [];
	private static $routes  = [];
	private static $var     = [];

//	******************************************
//	*******************SET********************
//	******************************************

	private static function setdirs()
	{
		self::$dirs = include_once ROOT . self::$SysPathes['dirs.php'];
	}

	private static function setglobal()
	{
		self::$global = include_once ROOT . self::$SysPathes['global.php'];
	}

	private static function setrouter()
	{
		self::$routes = include_once ROOT . self::$SysPathes['routes.php'];
	}

	private static function setroutes()
	{
		self::$router = include_once ROOT . self::$SysPathes['router.php'];
	}

//	******************************************
//	******************************************
//	******************************************

	public static function init()
	{
		self::setdirs();
		self::setglobal();
		self::setrouter();
		self::setroutes();
	}

	public static function setvar($useDefaultGlobal=true, $array=[])
	{
		if ($useDefaultGlobal)
		{
			self::$var = array_merge_recursive(self::getglobal(), $array);
		}
		else
		{
			self::$var = $array;
		}
	}

//	******************************************
//	*******************GET********************
//	******************************************

	public static function getdirs($key='')
	{
		if ($key === '')
		{
			return self::$dirs;
		}
		else
		{
			return self::$dirs[$key];
		}
	}

	public static function getglobal($key='')
	{
		if ($key === '')
		{
			return self::$global;
		}
		else
		{
			return self::$global[$key];
		}
	}

	public static function getrouter($key='')
	{
		if ($key === '')
		{
			return self::$router;
		}
		else
		{
			return self::$router[$key];
		}
	}

	public static function getroutes($key='')
	{
		if ($key === '')
		{
			return self::$routes;
		}
		else
		{
			return self::$routes[$key];
		}
	}

	public static function getSysPathes($key='')
	{
		if ($key === '')
		{
			return self::$SysPathes;
		}
		else
		{
			return self::$SysPathes[$key];
		}
	}

	public static function var($key)
	{
		return self::$var[$key];
	}

	public static function varDirs($key)
	{
		$array = [];
		foreach (self::var($key) as $path)
		{
			$array[] = self::getdirs($key) . '/' . $path;
		}
		return $array;
	}
}

G::init();