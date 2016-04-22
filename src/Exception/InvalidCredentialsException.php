<?php
namespace Momentum\MSGOnline\Exception;

class InvalidCredentialsException extends ClientException
{
	public function __construct($message, $code = 0, Exception $previous = null) {
	    parent::__construct($message, $code, $previous);
	  }
}
