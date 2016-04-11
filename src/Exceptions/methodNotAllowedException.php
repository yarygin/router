<?php

namespace Yarygin\Exceptions;

/**
 * Method not allowed for the route
 */
class methodNotAllowedException extends \Exception
{
    public $code = 405;
    public $message = "Method not allowed for the route";
}
