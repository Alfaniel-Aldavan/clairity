<?php

namespace clairity;

class Request
{
	/**
	 * @var string
	 */
	private $_method;

	/**
	 * @var array
	 */
	private $_headers;

	/**
	 * @var string
	 */
	private $_version;

	/**
	 * @var string
	 */
	private $_url;

	/**
	 * @var string
	 */
	private $_baseUrl;

	/**
	 * @var \clairity\Action
	 */
	private $_action;

	/**
	 * @var unknown_type
	 */
	private $_body;

	/**
	 * @var Session
	 */
	private $_session;

	/**
	 * @var array
	 */
	private $_cookies;

	/**
	 * @var unknown_type
	 */
	private $_server;

	/**
	 * @var unknown_type
	 */
	private $_files;

	/**
	 * @var string
	 */
	private $_language;

	/**
	 * Request constructor.
	 *
	 * @param string $url
	 */
	public function __construct($url)
	{
		$this->_url = $this->_clean_url($url);
	}

	/**
	 * Clean the URL from any funny stuff.
	 *
	 * @param string $url
	 */
	private function _clean_url($url)
	{
		return $url;
	}

	/**
	 * Access the request method.
	 */
	public function method()
	{
		return $this->_method;
	}

	/**
	 * Access the request headers.
	 *
	 * @return \ArrayIterator over an array of arrays or strings
	 */
	public function headers()
	{
		return new \ArrayIterator($this->headers());
	}

	/**
	 * Return the HTTP protocol version
	 */
	public function http_version()
	{
		return $this->_version;
	}

	/**
	 * Retrieve the URL
	 */
	public function url()
	{
		return $this->_url;
	}

	/**
	 * Retrieve base URL
	 */
	public function base_url()
	{
		return $this->_baseUrl;
	}

	/**
	 * Return the action associated with the request
	 */
	public function action()
	{
		return $this->_action;
	}

	/**
	 * Body of the request.
	 */
	public function body()
	{
		return $_body;
	}

	/**
	 * Session associated with this request.
	 * @return \clairity\Session
	 */
	public function session()
	{
		return $this->_session;
	}

	public function language()
	{
		return $this->_language;
	}

	/**
	 * Whether this request is an XmlHttpRequest
     */
    public function is_xml_http_request()
    {
        return false;
    }
}
