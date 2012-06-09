<?php

if (!defined('CLAIRITY'))
	die('No access.');

defined('LOG_ERROR') || define('LOG_ERROR', 1);
defined('LOG_DEBUG') || define('LOG_DEBUG', 2);

if (!function_exists('log_error'))
{
	/**
	 * Log error message.
	 *
	 * @param string $message
	 * @param int $severity
	 * @throws NotImplementedException
	 */
	function log_error($message, $severity = LOG_DEBUG)
	{
		throw new NotImplementedException();
	}
}
