<?php

/**
 * 
 */
class G
{
	public static $GlobalM    = array();
	public static $GlobalD    = array();
	public static $GlobalF    = array();
	public static $PathDir    = array();
	public static $PathFile   = array();
	public static $Routes     = array();
	public static $Prefix     = array();

//	******************************************

	public static function getFull_PathDir($key)
	{
		return ROOT . self::$PathDir[$key] . '/';
	}

	public static function getFull_PathFile($key)
	{
		return ROOT . self::$PathFile[$key];
	}

//	******************************************

	public static function setGlobalM($GlobalM)
	{
		self::$GlobalM = $GlobalM;
	}

	public static function setGlobalD($GlobalD)
	{
		self::$GlobalD = $GlobalD;
	}

	public static function setGlobalF($GlobalF)
	{
		self::$GlobalF = $GlobalF;
	}

//	******************************************

	public static function getPathes($array, $type)
	{
		$arr = array();
		foreach (self::${$array}[$type] as $value) {
			$arr[] = self::$PathDir[$type] . '/' . $value;
		}
		return $arr;
	}





}