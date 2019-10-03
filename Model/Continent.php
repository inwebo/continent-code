<?php

namespace Inwebo\Geo;

class Continent
{
    /** @var string */
    private $code;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    protected function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Continent constructor.
     *
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->setCode($code);
    }
}