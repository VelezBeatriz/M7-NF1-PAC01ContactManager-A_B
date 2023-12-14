<?php

class Address
{
    private $address;

    function __construct($address)
    {
        $this->address = $address;
    }
    function get_address()
    {
        return $this->address;
    }
}
