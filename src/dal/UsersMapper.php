<?php

namespace app\dal;

use app\models\Model;
use app\interfaces\IUsersMapper;

class UsersMapper extends Mapper implements IUsersMapper
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