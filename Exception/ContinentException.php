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
     * @param string         $continentCode
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null, string $continentCode)
    {
        if($message === "") {
            $message = sprintf("Continent code must be a 2 upper letters string, your input : %s", $continentCode);
        }
        parent::__construct($message, $code, $previous);
    }
}