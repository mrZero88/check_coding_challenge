<?php

namespace app\dal;

use app\models\Post;
use app\models\Model;
use app\interfaces\IPostsMapper;

class PostsMapper extends Mapper implements IPostsMapper
{
    public function fetchAll(): array
    {
        $stmt = $this->execQuery("SELECT * FROM posts order by createdAt desc");
        $posts = [];

        foreach ($stmt->get_result() as $row) {
            $posts[] = new Post($row);
        }

        return $posts;
    }

    public function fetch(int $id): ?Model
    {
        $post = null;
        $stmt = $this->execQuery("SELECT * FROM posts WHERE id = ? order by createdAt desc", [$id]);

        foreach ($stmt->get_result() as $row) {
            $post = new Post($row);
        }

        return $post;
    }

    public function insert(Model $model): ?Model
    {
        $query = $this->getInsertQuery($model);
        $stmt = $this->execQuery($query["query"], $query["parameters"]);
        $lastInsertedId = $stmt->insert_id;
        return $this->fetch($lastInsertedId);
    }

    public function update(Model $model): ?Model
    {
        $query = $this->getUpdateQuery($model);
        $this->execQuery($query["query"], $query["parameters"]);
        return $model;
    }

    public function delete(Model $model): void
    {
        $this->execQuery("DELETE FROM " . $model->getTableName() . " WHERE id = ?", [$model->getId()]);
    }
}