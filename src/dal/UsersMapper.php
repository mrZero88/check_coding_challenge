<?php

namespace app\dal;

use app\models\User;
use app\models\Model;
use app\interfaces\IUsersMapper;

class UsersMapper extends Mapper implements IUsersMapper
{

    public function fetchAll(): array
    {
        // TODO: Implement fetchAll() method.
    }

    public function fetch(array $where): ?Model
    {
        $user = null;
        $selectWheres = $this->getSelectWheres($where);
        $whereParameters = $this->getSelectWhereParameters($where);
        $stmt = $this->execQuery("SELECT * FROM users WHERE " . $selectWheres, $whereParameters);
        foreach ($stmt->get_result() as $row) {
            $user = new User($row);
        }
        return $user;
    }

    public function insert(Model $model): ?Model
    {
        $query = $this->getInsertQuery($model);
        $stmt = $this->execQuery($query["query"], $query["parameters"]);
        $lastInsertedId = $stmt->insert_id;
        return $this->fetch(["id" => $lastInsertedId]);
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