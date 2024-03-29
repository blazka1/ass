<?php


namespace App\Repositories\Interfaces;


interface PostRepositoryInterface
{
    public function all();

    public function create(array $data, $userId);

    public function find($id);
}
