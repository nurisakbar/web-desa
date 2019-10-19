<?php

namespace App\Repositories\Eloquent;

use App\User;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Support\Facades\Hash;
use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentUserRepository extends AbstractRepository implements UserRepository
{
    public function entity()
    {
        return User::class;
    }


    public function update($id,$request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password!=null)
        {
            $user->password = $request->password;
        }
        $user->update();
    }
}
