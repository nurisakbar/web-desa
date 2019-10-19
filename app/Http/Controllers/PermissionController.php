<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Repositories\Eloquent\EloquentPermissionRepository;

class PermissionController extends Controller
{
    protected $model;

    public function __construct(EloquentPermissionRepository $permissionRepository)
    {
        $this->model = $permissionRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['permissions'] = $this->model->paginate(5);
        return view('permission.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {
        $this->model->create($request->all());
        return redirect('permission')->with('message','A permission With Name '.$request->name.' Has Created');
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
    public function edit($id)
    {
        $data['permission'] = $this->model->find($id);
        return view('permission.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, $id)
    {
        $this->model->update($id,$request->all());
        return redirect('permission')->with('message','A Permission With Name '.$request->name.' Has Updated');
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
        
        return redirect('permission')->with('message','A Permission With Name '.$role->name.' Has Deleted');
    }
}
