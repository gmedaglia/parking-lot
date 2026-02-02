<?php

namespace Exceptions;

use RuntimeException;
use Throwable;

class NoSlotAvailableException extends RuntimeException
{
    public function __construct($message = "", $code = 0, ?Throwable $previous = null)
    {
        parent::__construct("There is no parking slot available.", $code, $previous);
    }
}
