<?php

namespace App\Repositories\Eloquent;

use App\Role;
use App\Repositories\Contracts\RoleRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentRoleRepository extends AbstractRepository implements RoleRepository
{
    public function entity()
    {
        return Role::class;
    }

    function create($request)
    {
        $role = Role::create($request);
        $role->permissions()->attach($request['permissions']);
    }

    function update($id,$request)
    {
        $role = Role::find($id);
        $role->update($request);
        $role->permissions()->sync($request['permissions']);
    }
}
