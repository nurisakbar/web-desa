<?php

namespace App\Repositories\Eloquent;

use App\Permission;
use App\Repositories\Contracts\PermissionRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentPermissionRepository extends AbstractRepository implements PermissionRepository
{
    public function entity()
    {
        return Permission::class;
    }
}
