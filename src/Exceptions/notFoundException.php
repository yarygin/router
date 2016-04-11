<?php

namespace Yarygin\Exceptions;

/**
 * Method not allowed for the route
 */
class notFoundException extends \Exception
{
    public $code = 405;
    public $message = "Method not allowed for the route";
}
