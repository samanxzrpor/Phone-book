<?php
namespace App\Models\Contracts;

use \Medoo\Medoo;

class MysqlBaseModel extends BaseModelAbstract
{

    public function __construct()
    {
        try {

            $this->connection = new Medoo([
                // [required]
                'type' => 'mysql',
                'host' => $_ENV['DB_HOST'],
                'database' => $_ENV['DB_NAME'],
                'username' => $_ENV['DB_USER'],
                'password' => $_ENV['DB_PASS'],
             
                // [optional]
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_general_ci'
            ]);

        } catch (\PDOException $e) {
            //throw $th;
            die('We have some Error in the database : ' . $e->getMessage());
        }
    }

    
    public function create(array $data): int
    {
        $this->connection->insert($this->tableName, $data);

        return 1;
    }

    public function find(array $where): object
    {
        
        $data = $this->connection->select($this->tableName, "*", $where);

        return (object)$data;
    }

    public function get(array $where , array|string $data): object
    {
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $this->pageSize;
        $where ['LIMIT']=[$start,$this->pageSize];
        $where ['ORDER']=['created_at'=>'DESC'];

        $data = $this->connection->select($this->tableName, $data, $where);

        return (object)$data;
    }

    public function update(array $where , array $data): int
    {
        return 1;
    }

    public function delete(array $where): int
    {
        return 1;
    }

    public function getCount($where = '*')
    {
        return $this->connection->count($this->tableName,$where);
    }

    public function searchData(string $pat)
    {
        $data = $this->connection->select($this->tableName, "*", [
            "AND" => [
                "OR" => [
                    "name[~]" => $pat,
                    "number[~]" => $pat,
                    "email[~]" => $pat
                ]
        ]]);
        
        return (object)$data;
    }
}

