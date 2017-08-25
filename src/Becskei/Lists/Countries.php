<?php

namespace Becskei\Lists;

class Countries
{
    /** @var  array */
    protected $countries;

    /**
     * Countries constructor.
     *
     * @param array $countries
     */
    public function __construct(array $countries)
    {
        $this->countries = $countries;
    }

    /**
     * @return array
     */
    public function getCountries()
    {
        return $this->countries;
    }
}
