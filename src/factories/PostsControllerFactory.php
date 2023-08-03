<?php

namespace app\factories;

use app\dal\PostsMapper;
use app\controllers\Controller;
use app\controllers\PostsController;

class PostsControllerFactory extends Factory
{
    public function factoryMethod(): Controller
    {
        $postsMapper = new PostsMapper();
        $postsController = new PostsController();
        $postsController->setPostsMapper($postsMapper);
        return $postsController;
    }
}