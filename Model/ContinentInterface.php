<?php

namespace Inwebo\Geo;

interface ContinentInterface
{
    /**
     * 2 upper case letters
     *
     * @see https://datahub.io/core/continent-codes
     *
     * @return string
     */
    public function getCode(): string;
}