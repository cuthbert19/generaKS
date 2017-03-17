<?php

namespace generaKS\Validators;
use Validator;

/**
* Custom validator for all forms
*/
class CustomValidator extends Validator
{

	protected static $ipRegEx = '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
	
	Validator::make
}

?>