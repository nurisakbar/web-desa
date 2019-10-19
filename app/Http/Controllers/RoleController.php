<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\EloquentRoleRepository;
use App\Repositories\Eloquent\EloquentPermissionRepository;
use App\Http\Requests\RoleUpdateRequest;
use App\Http\Requests\RoleStoreRequest;

class RoleController extends Controller
{

    protected $model;

    public function __construct(EloquentRoleRepository $roleRepository)
    {
        $this->model = $roleRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['roles'] = $this->model->paginate(9);
        return view('role.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(EloquentPermissionRepository $permission)
    {
        $data['rolePermissions']    = [];
        $data['permissions'] = $permission->all();
        return view('role.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleStoreRequest $request)
    {
        $this->model->create($request->all());
        return redirect('role')->with('message','A Role With Name '.$request->name.' Has Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,EloquentPermissionRepository $permission)
    {
        $role                       = $this->model->find($id);
        $data['role']               = $role;
        $data['permissions']        = $permission->all();
        $data['rolePermissions']    = $role->permissions->pluck('id')->toArray();
        return view('role.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleUpdateRequest $request, $id)
    {
        $this->model->update($id,$request->all());
        return redirect('role')->with('message','A Role With Name '.$request->name.' Has Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = $this->model->find($id);

        $this->model->delete($id);
        
        return redirect('role')->with('message','A Role With Name '.$role->name.' Has Deleted');
    }
}
