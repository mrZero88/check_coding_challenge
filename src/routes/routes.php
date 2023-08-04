<?php

return [
    [
        "route" => "/",
        "controller" => "app\controllers\BlogsController",
        "method" => "index",
        "factory" => 'app\factories\BlogsControllerFactory'
    ],
    [
        "route" => "/imprint",
        "controller" => "app\controllers\BlogsController",
        "method" => "imprint",
        "factory" => 'app\factories\BlogsControllerFactory'
    ],
    [
        "route" => "/posts",
        "controller" => "app\controllers\PostsController",
        "method" => "index",
        "factory" => 'app\factories\PostsControllerFactory'
    ],
    [
        "route" => "/posts/{id}",
        "controller" => "app\controllers\PostsController",
        "method" => "show",
        "factory" => 'app\factories\PostsControllerFactory'
    ],
    [
        "route" => "/posts/create",
        "controller" => "app\controllers\PostsController",
        "method" => "create",
        "factory" => 'app\factories\PostsControllerFactory'
    ],
    [
        "route" => "/comments",
        "controller" => "app\controllers\CommentsController",
        "method" => "index",
        "factory" => 'app\factories\CommentsControllerFactory'
    ],
    [
        "route" => "/comments/destroy/{id}",
        "controller" => "app\controllers\CommentsController",
        "method" => "destroy",
        "factory" => 'app\factories\CommentsControllerFactory'
    ],
    [
        "route" => "/users/login",
        "controller" => "app\controllers\UsersController",
        "method" => "login",
        "factory" => 'app\factories\UsersControllerFactory'
    ],
    [
        "route" => "/users/register",
        "controller" => "app\controllers\UsersController",
        "method" => "register",
        "factory" => 'app\factories\UsersControllerFactory'
    ],
    [
        "route" => "/users/registeruserin",
        "controller" => "app\controllers\UsersController",
        "method" => "registeruserin",
        "factory" => 'app\factories\UsersControllerFactory'
    ],
    [
        "route" => "/users/loguserin",
        "controller" => "app\controllers\UsersController",
        "method" => "loguserin",
        "factory" => 'app\factories\UsersControllerFactory'
    ],
    [
        "route" => "/users/loguserout",
        "controller" => "app\controllers\UsersController",
        "method" => "loguserout",
        "factory" => 'app\factories\UsersControllerFactory'
    ],
];