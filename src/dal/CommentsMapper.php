<?php

namespace app\dal;

use app\interfaces\IBlogsMapper;
use app\interfaces\ICommentsMapper;
use app\models\Model;

class CommentsMapper extends Mapper implements ICommentsMapper

{
    public function fetchAll(): array
    {
        // TODO: Implement fetchAll() method.
    }

    public function fetch(int $id): ?Model
    {
        // TODO: Implement fetch() method.
    }

    public function insert(Model $model): ?Model
    {
        // TODO: Implement insert() method.
    }

    public function update(Model $model): ?Model
    {
        // TODO: Implement update() method.
    }

    public function delete(Model $model): void
    {
        // TODO: Implement delete() method.
    }
}