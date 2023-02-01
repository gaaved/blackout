<?php

namespace App\Services;

use App\DTO\UserCreateData;

class UserService
{
    public function create(UserCreateData $data)
    {
        echo 'Email:  ' . $data->email;
        echo '<br>' . 'Password:  ' . $data->password;
        return true;
    }
}