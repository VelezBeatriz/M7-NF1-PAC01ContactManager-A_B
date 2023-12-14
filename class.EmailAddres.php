<?php

class EmailAddress
{
    private $email;

    function __construct($email)
    {
        $this->email = $email;
    }
    function get_email()
    {
        return $this->email;
    }
}
