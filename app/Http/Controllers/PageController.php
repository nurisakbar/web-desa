<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Permission;
class PageController extends Controller
{
    public function setup()
    {
        $owner = new Role();
        $owner->name         = 'owner';
        $owner->display_name = 'Project Owner'; // optional
        $owner->description  = 'User is the owner of a given project'; // optional
        $owner->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();
        
        $user = User::where('email', '=', 'nuris.akbar@gmail.com')->first();

        // role attach alias
        //$user->attachRole($admin); // parameter can be an Role object, array, or id

        // or eloquent's original technique
        $user->roles()->attach($admin->id);




        $createPost = new Permission();
        $createPost->name         = 'create-post';
        $createPost->display_name = 'Create Posts'; // optional
        // Allow a user to...
        $createPost->description  = 'create new blog posts'; // optional
        $createPost->save();

        $editUser = new Permission();
        $editUser->name         = 'edit-user';
        $editUser->display_name = 'Edit Users'; // optional
        // Allow a user to...
        $editUser->description  = 'edit existing users'; // optional
        $editUser->save();

        $admin->attachPermission($createPost);
        // equivalent to $admin->perms()->sync(array($createPost->id));

        $owner->attachPermissions(array($createPost, $editUser));
        // equivalent to $owner->perms()->sync(array($createPost->id, $editUser->id));
    }

    function test()
    {
        $user = User::where('email','nuris.akbar@gmail.com')->first();
        //dd($user->hasRole('admin'));

        if($user->hasRole('admins'))
        {
            return 'anda boleh akses halaman ini';
        }else
        {
            return 'tidak boleh';
        }
    }
}
