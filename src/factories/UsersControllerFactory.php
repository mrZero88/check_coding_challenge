<?php

namespace app\factories;

use app\dal\UsersMapper;
use app\controllers\Controller;
use app\controllers\UsersController;

class UsersControllerFactory extends Factory
{

    public function factoryMethod(): Controller
    {
        $usersMapper = new UsersMapper();
        $usersController = new UsersController();
        $usersController->setTableMapper($usersMapper);
        return $usersController;
    }
}