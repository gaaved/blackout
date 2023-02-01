<?php

namespace App\DTO;

class UserCreateData
{
    public $email = '';
    public $password = '';

    public function __construct($args)
    {
        foreach ($args as $key => $value) {
            $this->$key = $value;
        }
    }
}