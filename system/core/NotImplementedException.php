<?php

namespace clairity;

class NotImplementedException extends \Exception
{
	public function __construct()
	{
		parent::__construct('method_not_implemented');
	}
}