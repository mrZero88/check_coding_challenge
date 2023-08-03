<?php

namespace app\factories;

use app\controllers\BlogsController;
use app\controllers\Controller;
use app\dal\BlogsMapper;

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