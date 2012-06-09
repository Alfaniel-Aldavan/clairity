<?php

namespace clairity;

class Request
{
	/**
	 * Request method
	 * @var string
	 */
	private $_method;

	/**
	 * Headers (array of arrays or strings)
	 * @var array
	 */
	private $_headers;

	/**
	 * HTTP version
	 * @var string
	 */
	private $_version;

	/**
	 * Request URL
	 * @var string
	 */
	private $_url;

	/**
	 * Content body
	 * @var unknown_type
	 */
	private $_body;

	/**
	 * Session
	 * @var Session
	 */
	private $_session;

	/**
	 * Cookies in the request
	 * @var array
	 */
	private $_cookies;

	/**
	 * Request constructor.
	 *
	 * @param string $url
	 */
	public function __construct($url)
	{
		$this->_url = $this->_clean_url($url);
	}

	private function _clean_url($url)
	{
		return $url;
	}

	public function method()
	{
		return $this->_method;
	}

	public function headers()
	{
		return new \ArrayIterator($this->headers());
	}

	public function http_version()
	{
		return $this->_version;
	}

	public function url()
	{
		return $this->_url;
	}

	public function body()
	{
		return $_body;
	}

	public function session()
	{
		return $this->_session;
	}
}
