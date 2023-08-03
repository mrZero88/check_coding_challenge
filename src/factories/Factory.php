<?php

namespace app\factories;

use app\controllers\Controller;

abstract class Factory
{
    abstract public function factoryMethod(): Controller;
}