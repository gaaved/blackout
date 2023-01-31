<?php

namespace App\Services;

use App\DTO\UserCreateData;

class UserService
{
    public function create(UserCreateData $data)
    {
        echo 'User created:  ' . $data->nickname;
        echo '<br>' . 'Email is sent to:  ' . $data->email;
        return true;
    }
}