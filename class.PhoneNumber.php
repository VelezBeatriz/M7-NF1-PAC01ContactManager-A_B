<?php

class PhoneNumber
{
    private $phone;

    function __construct($phone)
    {
        $this->phone = $phone;
    }
    function get_phone()
    {
        return $this->phone;
    }
}
