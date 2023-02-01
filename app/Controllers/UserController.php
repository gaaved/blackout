<?php

namespace App\Controllers;

use App\DTO\UserCreateData;
use App\Services\UserService;

class UserController
{
    private UserService|null $userService = null;

    public function __construct()
    {
        $this->userService = new UserService();
    }
    public function create()
    {
        $data = new UserCreateData([
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ]);

        return $this->userService->create($data);
    }
}