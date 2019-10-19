<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\Eloquent\EloquentUserRepository;

class UserController extends Controller
{

    protected $model;

    public function __construct(EloquentUserRepository $userRepository)
    {
        //$this->middleware('permission:create-users');
        $this->middleware('role:admin');
        //$this->middleware('auth');
        //$this->middleware('permission:create-users', ['only' => ['create', 'store']]);    
        $this->model = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        dd($user->roles->first()->permissions->pluck('name'));

        $data['users'] = $this->model->paginate(5);
        return view('user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $this->model->create($request->all());
        return redirect('user')->with('message','A User With Name '.$request->name.' Has Created');
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
        $data['user'] = $this->model->find($id);
        return view('user.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $this->model->update($id,$request);
        return redirect('user')->with('message','A User With Name '.$request->name.' Has Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->model->find($id);

        $this->model->delete($id);
        
        return redirect('user')->with('message','A User With Name '.$user->name.' Has Deleted');
    }
}
