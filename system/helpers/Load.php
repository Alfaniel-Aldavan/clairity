<?php

if (!defined('CLAIRITY'))
	die('No access.');

use Clairity\NotImplementedException;

if (!function_exists('load_template'))
{
	/**
	 * Load a template file.
	 *
	 * @param string $name
	 */
	function load_template($name)
	{
		throw new NotImplementedException();
	}
}

if (!function_exists('load_config'))
{
	/**
	 * Load configuration file.
	 *
	 * @param string $filename
	 */
	function load_config($filename)
	{
		throw new NotImplementedException();
	}
}

if (!function_exists('load_js'))
{
	/**
	 * Load js files.
	 *
	 * @param string $filenames
	 */
	function load_js($filenames)
	{
		if (is_string($filenames))
			$filenames = array($filenames);

		throw new NotImplementedException();
	}
}

if (!function_exists('load_css'))
{
	/**
	 * Load css files.
	 *
	 * @param array $filenames
	 */
	function load_css($filenames)
	{
		if (is_string($filenames))
			$filenames = array($filenames);

		throw new NotImplementedException();
	}
}

if (!function_exists('load_database'))
{
	/**
	 * Load the database
	 *
	 * @param array $adapter
	 * @throws NotImplementedException
	 */
	function load_database($adapter)
	{
		throw new NotImplementedException();
	}
}

if (!function_exists('load_session'))
{
	/**
	 * Load the session, or create one.
	 *
	 * @throws NotImplementedException
	 */
	function load_session()
	{
		throw new NotImplementedException();
	}
}


