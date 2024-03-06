<?php

namespace App\Repositories;

use Spatie\Permission\Models\Permission;
use App\Repositories\Interfaces\PermissionRepositoryInterface;

class PermissionRepository implements PermissionRepositoryInterface
{
    public function all()
    {
        return Permission::all();
    }

    public function create(array $data)
    {
        return Permission::create($data);
    }

    public function find($id)
    {
        return Permission::findById($id);
    }

}
