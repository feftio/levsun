<?php
/**
 * 
 */

class Session
{
	public static function start()
	{
		if (!isset($_SESSION))
		{
			@session_start();
		}
	}

	public static function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	public static function get($key)
	{
		if (isset($_SESSION[$key]))
		{
			return $_SESSION[$key];
        }
        return NULL;
	}

	public static function destoy()
	{
		session_destroy();
	}
}

Session::start();