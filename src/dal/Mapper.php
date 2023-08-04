<?php

namespace app\dal;

use mysqli;
use Exception;
use mysqli_stmt;
use app\models\Model;

abstract class Mapper
{
    private ?mysqli $connection = null;

    protected function execQuery(string $query, ?array $params = null): ?mysqli_stmt
    {
        try {
            $this->connect();
            $stmt = $this->connection->prepare($query);
            if (!empty($params)) {
                $paramTypes = $this->getParamTypes($params);
                $stmt->bind_param($paramTypes, ...$params);
            }
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        } finally {
            $this->disconnect();
        }

        return null;
    }

    /**
     * @return void
     */
    protected function connect(): void
    {
        $dbConfig = include("../src/DbConfig.php");
        if ($this->connection === null && is_resource($this->connection) === false) {
            $this->connection = new mysqli($dbConfig["servername"], $dbConfig["username"], $dbConfig["password"], $dbConfig["dbname"]);
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
        }
    }

    /**
     * @return void
     */
    protected function disconnect(): void
    {
        if ($this->connection != null && is_resource($this->connection) === true) $this->connection->close();
    }

    private function getParamTypes(array $params): string
    {
        $paramTypes = "";

        foreach ($params as $param) {
            switch (true) {
                case is_int($param):
                    $paramTypes .= "i";
                    break;
                case is_float($param):
                    $paramTypes .= "d";
                    break;
                case is_string($param) > 0:
                    $paramTypes .= "s";
                    break;
            }
        }

        return $paramTypes;
    }

    protected function getInsertQuery(Model $model): array
    {
        $modelArray = $model->toArray();
        return [
            "query" => "INSERT INTO " . $model->getTableName() . " (" . $this->getInsertColumns($model) . ") VALUES (" . $this->getInsertValues($model) . ")",
            "parameters" => array_values($modelArray)
        ];
    }

    protected function getUpdateQuery(Model $model): array
    {
        $modelArray = (array)$model;
        $modelArray[] = $model->getId();
        return [
            "query" => "UPDATE " . $model->getTableName() . " SET " . $this->getUpdateSets($model) . " WHERE id = ?",
            "parameters" => array_values($modelArray)
        ];
    }

    protected function getSelectWheres(array $where): string
    {
        $parts = array_map(function ($key, $value) {
            return "$key = ?";
        }, array_keys($where), array_values($where));

        return implode(" and ", $parts);
    }

    protected function getSelectWhereParameters(array $where): array
    {
        return array_map(function ($key, $value) {
            return $value;
        }, array_keys($where), array_values($where));
    }

    private function getInsertColumns(Model $model): string
    {
        $modelArray = $model->toArray();
        return implode(",", array_keys($modelArray));
    }

    private function getUpdateSets(Model $model): string
    {
        $modelArray = (array)$model;

        $parts = array_map(function ($key, $value) {
            return "$key = ?";
        }, array_keys($modelArray), array_values($modelArray));

        return implode(",", $parts);
    }

    private function getInsertValues(Model $model): string
    {
        $modelArray = $model->toArray();

        $parts = array_map(function ($key, $value) {
            return "?";
        }, array_keys($modelArray), array_values($modelArray));

        return implode(",", $parts);
    }
}