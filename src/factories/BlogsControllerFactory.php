<?php

namespace app\factories;

use app\dal\BlogsMapper;
use app\controllers\Controller;
use app\controllers\BlogsController;

class BlogsControllerFactory extends Factory
{
    public function factoryMethod(): Controller
    {
        $blogsMapper = new BlogsMapper();
        $blogsController = new BlogsController();
        $blogsController->setBlogsMapper($blogsMapper);
        return $blogsController;
    }
}