<?php

namespace app\controllers;

use app\models\User;

class UsersController extends Controller
{

    public function index(): void
    {
        // TODO: Implement index() method.
    }

    public function create(): void
    {
        include "../src/views/loginview.php";
    }

    public function store(): void
    {
        // TODO: Implement store() method.
    }

    public function show(int $id): void
    {
        // TODO: Implement show() method.
    }

    public function edit(int $id): void
    {
        // TODO: Implement edit() method.
    }

    public function update(int $id): void
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }

    public function login(): void
    {
        $selectedView = "../src/views/loginview.php";
        include "../src/views/indexview.php";
    }

    public function register(): void
    {
        $selectedView = "../src/views/registerview.php";
        include "../src/views/indexview.php";
    }

    public function registeruserin(): void
    {
        $data = [
            "userName" => htmlspecialchars($_POST["userName"]),
            "email" => htmlspecialchars($_POST["email"]),
            "password" => htmlspecialchars($_POST["password"]),
            "confirmationPassword" => htmlspecialchars($_POST["confirmationPassword"])
        ];

        try {
            $user = new User($data);
            $user->validate();
            $this->tableMapper->insert($user);
            $_SESSION["loggeduser"] = $user;
            $this->redirect("/");
        } catch (\Exception $e) {
            $errors = [];
            $selectedView = "../src/views/registerview.php";
        }

        include "../src/views/indexview.php";
    }

    public function loguserin(): void
    {
        // TODO: Implement store() method.
    }

    public function loguserout(): void
    {
        if (!empty($_SESSION["loggeduser"])) {
            unset($_SESSION["loggeduser"]);
        }

    }
}