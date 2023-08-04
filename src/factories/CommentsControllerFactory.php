<?php

namespace app\factories;

use app\dal\CommentsMapper;
use app\controllers\Controller;
use app\controllers\CommentsController;

class CommentsControllerFactory extends Factory
{

    public function factoryMethod(): Controller
    {
        $commentsMapper = new CommentsMapper();
        $commentsController = new CommentsController();
        $commentsController->setTableMapper($commentsMapper);
        return $commentsController;
    }
}