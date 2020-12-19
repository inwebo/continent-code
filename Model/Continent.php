<?php

namespace Inwebo\Geo;

class Continent
{
    private string $code;

    /**
     * @return string 2 upper case letters
     */
    public function getCode(): string
    {
        return $this->code;
    }

    protected function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function __construct(string $code)
    {
        $this->setCode($code);
    }
}