<?php

namespace Inwebo\Geo;

use Throwable;

class ContinentException extends \Exception
{
    /**
     * ContinentException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        if($message === "") {
            $message = sprintf("Continent code must be a 2 upper letters string");
        }
        parent::__construct($message, $code, $previous);
    }
}