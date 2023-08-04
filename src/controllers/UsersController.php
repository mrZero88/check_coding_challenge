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
            "password" => password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT),
            "confirmationPassword" => password_hash(htmlspecialchars($_POST["confirmationPassword"]), PASSWORD_DEFAULT)
        ];

        try {
            $user = new User($data);
            $user->validate();
            $user = $this->tableMapper->insert($user);
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
        $data = [
            "userName" => htmlspecialchars($_POST["userName"]),
            "password" => htmlspecialchars($_POST["password"])
        ];

        try {
            $user = new User($data);
            $user = $this->tableMapper->fetch(["userName" => $user->getUserName()]);
            if (!empty($user) && password_verify($data["password"], $user->getPassword())) {
                $_SESSION["loggeduser"] = $user;
                $this->redirect("/");
            } else {
                throw new \Exception();
            }
        } catch (\Exception $e) {
            $errors = [];
            $selectedView = "../src/views/loginview.php";
        }

        include "../src/views/indexview.php";
    }

    public function loguserout(): void
    {
        if (!empty($_SESSION["loggeduser"])) {
            unset($_SESSION["loggeduser"]);
        }
        $this->redirect("/");
    }
}