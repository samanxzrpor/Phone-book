<?php
namespace App\Models\Contracts;


interface CrudInterface
{

    public function create(array $data): int;

    public function find(array $where): object;

    public function get(array $where, array $data): object;

    public function update(array $where, array $data): int;

    public function delete(array $where): int;

}