<?php

namespace app\interfaces;

use app\models\Model;

interface IMapper
{
    public function fetchAll(): array;

    public function fetch(int $id): ?Model;

    public function insert(Model $model): ?Model;

    public function update(Model $model): ?Model;

    public function delete(Model $model): void;
}